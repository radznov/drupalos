<?php

namespace Drupal\kashing\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {


    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */

    private $form_id = 'kashing_form';

    public function __construct()
    {

    }

    public function getFormId()
    {
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

        $form['first_name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('First Name'),
            '#description' => $this->t('Enter your First Name. It must be at least 5 characters in 
length.'),
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

        $form['City'] = [
            '#type' => 'textfield',
            '#title' => $this->t('City'),
            '#required' => TRUE,
        ];

        $form['country'] = [
            '#type' => 'select',
            '#title' => $this->t('Country'),
            '#options' => [
                'US' => $this->t('United States'),
                'UK' => $this->t('United Kingdom'),
                'PL' => $this->t('Poland'),
            ],
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
                '#type' => 'textfield',
                '#title' => $this->t('Phone'),
            ];
        }

        if ($argument['kashing_form_checkboxes']['email'] === 'email') {
            $form['email'] = [
                '#type' => 'textfield',
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

//        // Email.
//        $form['email'] = [
//            '#type' => 'email',
//            '#title' => $this->t('Email'),
//            '#description' => 'Enter your email address',
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

//        // Tel.
//        $form['phone'] = [
//            '#type' => 'tel',
//            '#title' => $this->t('Phone'),
//            '#description' => $this->t('Enter your phone number, beginning with country code,
//e.g., 1 503 555 1212'),
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
        $first_name = $form_state->getValue('first_name');
        if (strlen($first_name) < 5) {
            // Set an error for the form element with a key of "title".
            $form_state->setErrorByName('first_name', $this->t('Your name must be at least 5 
characters long.'));
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
//        print_r($form['#id']);
//        // Find out what was submitted.
//        $values = $form_state->getValues();
//        foreach ($values as $key => $value) {
//            $label = isset($form[$key]['#title']) ? $form[$key]['#title'] : $key;
//            // Many arrays return 0 for unselected values so lets filter that out.
//            if (is_array($value)) {
//                $value = array_filter($value);
//            }
//            // Only display for controls that have titles and values.
//            if ($value && $label) {
//                $display_value = is_array($value) ? preg_replace('/[\n\r\s]+/', ' ', print_r($value,
//                    1)) : $value;
//
//                $message = $this->t('Value for %title: %value', array('%title' => $label, '%value'
//                => $display_value));
//                drupal_set_message($message);
//            }
//        }


    }
}