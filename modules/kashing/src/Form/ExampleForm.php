<?php

namespace Drupal\kashing\Form;

use Drupal\Component\Utility\Html;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\kashing\Entity\KashingAPI;
use Drupal\kashing\misc\countries\KashingCountries;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExampleForm extends FormBase {

    private $form_id = 'kashing_form';
    private $kashing_countries;
    private $form_amount;
    private $form_description;
    private $kashing_api;

    /**
     * Class constructor.
     */
    public function __construct($kashing_countries) {
        $this->kashing_countries = $kashing_countries;
    }

    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */

    public function getFormId() {
        return $this->form_id;
    }

    /**
     * Form constructor.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     *
     * @return array
     *   The form structure.
     */
    public function buildForm(array $form, FormStateInterface $form_state, $argument = array()) {

        $amount = $argument['kashing_form_amount'];

        if (is_int($amount)) {
            $amount *= 100;
            $this->form_amount = $amount;
        } elseif (is_numeric($amount)) {
            $this->form_amount = $amount;
        } else {
            $this->form_amount = 0;
        }

        $this->form_description = $argument['kashing_form_description'];
        //TODO else no description

        $form['first_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('First Name'),
            //'#description' => $this->t('Enter your First Name. It must be at least 5 characters in length.'),
            '#required' => TRUE,
        ];

        $form['last_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Last Name'),
            '#required' => TRUE,
        ];

        $form['address1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Address 1'),
            '#required' => TRUE,
        ];

        if ($argument['kashing_form_checkboxes']['address2'] === 'address2') {
            $form['address2'] = [
                '#type' => 'textfield',
                '#title' => $this->t('Address 2'),
            ];
        }

        $form['city'] = [
            '#type' => 'textfield',
            '#title' => $this->t('City'),
            '#required' => TRUE,
        ];

        $form['country'] = [
            '#type' => 'select',
            '#title' => $this->t('Country'),
            '#options' => $this->kashing_countries->get_all(),
            '#empty_option' => $this->t('--Select a country--'),
            '#required' => TRUE,
        ];

        $form['postcode'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Post Code'),
            '#required' => TRUE,
        ];

        if ($argument['kashing_form_checkboxes']['phone'] === 'phone') {
            $form['phone'] = [
                '#type' => 'tel',
                '#title' => $this->t('Phone'),
                //'#description' => $this->t('Enter your phone number.'),
            ];
        }

        if ($argument['kashing_form_checkboxes']['email'] === 'email') {
            $form['email'] = [
                '#type' => 'email',
                '#title' => $this->t('Email'),
            ];
        }

//        // CheckBoxes.
//        $form['tests_taken'] = [
//            '#type' => 'checkboxes',
//            '#options' => ['SAT' => t('SAT'), 'ACT' => t('ACT')],
//            '#title' => $this->t('What standardized tests did you take?'),
//            '#description' => 'If you did not take any of the tests, leave unchecked',
//        ];

//
//        // Number.
//        $form['quantity'] = [
//            '#type' => 'number',
//            '#title' => t('Quantity'),
//            '#description' => $this->t('Enter a number, any number'),
//        ];
//        // Password.
//        $form['password'] = [
//            '#type' => 'password',
//            '#title' => $this->t('Password'),
//            '#description' => 'Enter a password',
//        ];
//        // Password Confirm.
//        $form['password_confirm'] = [
//            '#type' => 'password_confirm',
//            '#title' => $this->t('New Password'),
//            '#description' => $this->t('Confirm the password by re-entering'),
//        ];

//        // Search.
//        $form['search'] = [
//            '#type' => 'search',
//            '#title' => $this->t('Search'),
//            '#description' => $this->t('Enter a search word or phrase'),
//        ];

//        // TableSelect.
//        $options = [
//            1 => ['first_name' => 'Indy', 'last_name' => 'Jones'],
//            2 => ['first_name' => 'Darth', 'last_name' => 'Vader'],
//            3 => ['first_name' => 'Super', 'last_name' => 'Man'],
//        ];
//        $header = [
//            'first_name' => t('First Name'),
//            'last_name' => t('Last Name'),
//        ];
//        $form['table'] = [
//            '#type' => 'tableselect',
//            '#title' => $this->t('Users'),
//            '#title_display' => 'visible',
//            '#header' => $header,
//            '#options' => $options,
//            '#empty' => t('No users found'),
//        ];

        $form['actions'] = [
            '#type' => 'actions',
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
            '#description' => $this->t('Submit, #type = submit'),
        ];


        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {

//        $first_name = $this->getValidFieldValue('first_name', $form_state);
//        $regex = "/^[^<,\"@/*$%?=>:|;#]*$/i";
//        if (preg_match($regex, trim($first_name))) {
//            $form_state->setErrorByName('first_name', $this->t('Please enter a valid name.'));
//        }

        $phone = $this->getValidFieldValue('phone', $form_state);
        $regex = '/^[0-9\-\(\)\/\+\s]*$/';
        if ($phone != '' && !preg_match($regex, trim($phone))) {
            $form_state->setErrorByName('phone', $this->t('Please enter a valid phone number.'));
        }

        $email = $this->getValidFieldValue('email', $form_state);
        $regex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
        if ($email != '' && !preg_match($regex, trim($email))) {
            $form_state->setErrorByName('email', $this->t('Please enter a valid email address.'));
        }

        $this->kashing_api = new KashingAPI();

        //check if kashing API is not succesfully created
        //TODO show only to admins?
        if ($this->kashing_api->hasErrors()) {

            $errors = $this->kashing_api->getErrors();

            foreach ($errors as $error) {

                $form_state->setErrorByName($error['field'], $error['msg']);
            }
        } else {
            $this->kashing_api = null;
        }
    }

    /**
     * Form submission handler.
     *
     * @param array $form
     *   An associative array containing the structure of the form.
     * @param \Drupal\Core\Form\FormStateInterface $form_state
     *   The current state of the form.
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {

        //TODO fields validation

        $first_name = $this->getValidFieldValue('first_name', $form_state);
        $last_name = $this->getValidFieldValue('last_name', $form_state);
        $address1 = $this->getValidFieldValue('address1', $form_state);
        $city = $this->getValidFieldValue('city', $form_state);
        $postcode = $this->getValidFieldValue('postcode', $form_state);
        $country = $this->getValidFieldValue('country', $form_state);

        $transaction_data = [
            'amount' => $this->form_amount,
            'description' => $this->form_description,
            'firstname' => $first_name,
            'lastname' => $last_name,
            'address1' => $address1,
            'city' => $city,
            'postcode' => $postcode,
            'country' => $country
        ];

        $email = $this->getValidFieldValue('email', $form_state);
        if(isset($email)) {
            $transaction_data['email'] = $email;
        }

        $phone = $this->getValidFieldValue('phone', $form_state);
        if(isset($phone)) {
            $transaction_data['phone'] = $phone;
        }

        $address2 = $this->getValidFieldValue('address2', $form_state);
        if(isset($address2)) {
            $transaction_data['address2'] = $address2;
        }


        //if kashing api is successfully created
        if ($this->kashing_api) {
            $redirect_url = $this->kashing_api->process($transaction_data);
            $form_state->setResponse(new TrustedRedirectResponse($redirect_url, 302));
        } else {
            //TODO if cant send POST reqest to kashing due to configuration errors e.g. no keys or return pages
        }

    }


    private function getValidFieldValue($field_name, FormStateInterface $form_state){
        return  Html::escape($form_state->getValue($field_name));;
    }


    public static function create(ContainerInterface $container) {
        return new static(
           new KashingCountries()
        );
    }
}