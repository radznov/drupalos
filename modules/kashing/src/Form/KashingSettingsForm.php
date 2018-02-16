<?php

namespace Drupal\kashing\form;

use Drupal\block\Entity\Block;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax;
use Drupal\Core\Ajax\OpenModalDialogCommand;

class KashingSettingsForm extends ConfigFormBase {

    /**
     * Gets the configuration names that will be editable.
     *
     * @return array
     *   An array of configuration object names that are editable if called in
     *   conjunction with the trait's config() method.
     */
    protected function getEditableConfigNames()
    {
        return [
            'kashing.settings', 'kashing.blocks.forms'
        ];
    }

    /**
     * Returns a unique string identifying the form.
     *
     * @return string
     *   The unique string identifying the form.
     */
    public function getFormId()
    {
        return 'kashing_settings';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {

        $config = $this->config('kashing.settings');

        $form['kashing_settings'] = array(
            '#type' => 'vertical_tabs',
        );


        $form['settings_mode'] = [
            '#type' => 'details',
            '#group' => 'kashing_settings',
            '#title' => $this->t('Configuration'),
            '#description' => $this->t('<a href=":uri">Retrieve your Kashing API Keys</a>', [':uri' => 'https://www.kashing.co.uk/docs/#how-do-i']),
        ];

        $form['settings_mode']['test_mode'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Test Mode'),
        ];


        $form['settings_mode']['test_mode']['radio_buttons'] = [
            '#type' => 'radios',
            '#options' => ['test' => $this->t('Yes'), 'live' => $this->t('No')],
            '#title' => $this->t('Test Mode'),
            '#default_value' => $config->get('settings_mode'),
            //'#required' => TRUE,
            '#description' => $this->t('Activate or deactivate the plugin Test Mode. When Test Mode is activated, no credit card payments are processed.'),
        ];

        $form['settings_mode']['test_mode_keys'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Test'),
        ];

        $form['settings_mode']['test_mode_keys']['test_merchant_id'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Test Merchant ID'),
            '#default_value' => $config->get('key')['test']['merchant'],
            '#description' => $this->t('Enter your testing Merchant ID.')
        ];

        $form['settings_mode']['test_mode_keys']['test_secret_key'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Test Secret Key'),
            '#placeholder' => $config->get('key')['test']['secret'],//? str_repeat('●', 32) : '',
            '#description' => $this->t('Enter your testing Kashing Secret Key.')
        ];


        $form['settings_mode']['live_mode_keys'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Live'),
         ];

        $form['settings_mode']['live_mode_keys']['live_merchant_id'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Live Merchant ID'),
          //  '#default_value' => $config->get('key')['live']['merchant'],
            '#description' => $this->t('Enter your live Merchant ID.')
        ];

        $form['settings_mode']['live_mode_keys']['live_secret_key'] = [
            '#type' => 'password',
            '#title' => $this->t('Live Secret Key'),
            '#placeholder' => $config->get('key')['live']['secret'] ? str_repeat('●', 32) : '',
            '#description' => $this->t('Enter your live Kashing Secret Key.')
        ];

        $form['settings_mode']['actions'] = [
            '#type' => 'actions',
        ];
        // Add a submit button that handles the submission of the form.
        $form['settings_mode']['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save changes'),
            '#description' => $this->t('Submitos, #submit_configuration'),
        ];


        /**********************************************/

        $form['general_mode'] = [
            '#type' => 'details',
            '#group' => 'kashing_settings',
            '#title' => $this->t('General')
        ];

        $form['general_mode']['currency'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Choose Currency'),
            '#description' => $this->t('Choose a currency for your payments.'),
        ];

        $form['general_mode']['currency']['currency_select'] = [
            '#type' => 'select',
            '#options' => [
                'red' => $this->t('Red'),
                'blue' => $this->t('Blue'),
                'green' => $this->t('Green'),
            ],
            '#empty_option' => $this->t('-select-'),
        ];

        $form['general_mode']['success_page'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Success Page'),
            '#description' => $this->t('Choose the page your clients will be redirected to after the payment is successful.'),
        ];

        $form['general_mode']['success_page']['currency_select'] = [
            '#type' => 'select',
            '#options' => [
                'red' => $this->t('Red'),
                'blue' => $this->t('Blue'),
                'green' => $this->t('Green'),
            ],
            '#empty_option' => $this->t('-select-'),
        ];


        $form['general_mode']['failure_page'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Failure Page'),
            '#description' => $this->t('Choose the page your clients will be redirected to after the payment failed.'),
        ];

        $form['general_mode']['failure_page']['currency_select'] = [
            '#type' => 'select',
            '#options' => [
                'red' => $this->t('Red'),
                'blue' => $this->t('Blue'),
                'green' => $this->t('Green'),
            ],
            '#empty_option' => $this->t('-select-'),
        ];

        $form['#attached']['library'][] = 'core/drupal.dialog.ajax';
        $form['general_mode']['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save changes'),
            '#description' => $this->t('Submitosos, #submit_configuration'),
            //'#submit' => array('::submitGeneral')
            '#ajax' => array(
                'callback' => '::submitGeneral',  // the data that came from the form and that we
                // will receive as a result in the modal window
               // 'event' => 'change',
                '#wrapper' => 'ajax_placeholder',
                'progress' => array(
                    'type' => 'throbber',
                    'message' => NULL,
                )
            ),

        ];


        $form['general_mode']['field']['field'] = [
            '#type' => 'textfield',
            '#attributes' => array(
                'class' => array('hidden'),
                'id' => array('ajax_placeholder'),
            ),
            '#title' => $this->t('Live Merchant ID'),
            //  '#default_value' => $config->get('key')['live']['merchant'],
            '#description' => $this->t('Enter your live Merchant ID.')
        ];



        //-------------------------------------------------------


        $form['add_mode'] = [
            '#type' => 'details',
            '#group' => 'kashing_settings',
            '#title' => $this->t('Add New Form')
        ];

        $form['add_mode']['general_field'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('General'),
        ];

        $form['add_mode']['general_field']['kashing_form_title'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Form title'),
            '#description' => $this->t('The form title.'),
        ];

        $form['add_mode']['general_field']['kashing_form_amount'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Amount'),
            '#description' => $this->t('Enter the form amount that will be processed with the payment system.'),
        ];

        $form['add_mode']['general_field']['kashing_form_description'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Description'),
            '#description' => $this->t('The form transaction description.'),
        ];

        $form['add_mode']['form_field'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Form Fields'),
        ];

        $form['add_mode']['form_field']['checkboxes'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Form Fields'),
        ];

        $form['add_mode']['form_field']['checkboxes']['kashing_form_checkboxes'] = [
            '#type' => 'checkboxes',
            '#options' => [
                'address2' => t('Address 2'),
                'email' => t('Email'),
                'phone' => t('Phone')
            ],
            //'#title' => $this->t('Form Fields'),
            '#description' => 'Enable selected form fields.',
        ];

        $form['add_mode']['kashing_form_submit'] = [
            '#type' => 'button',
            '#value' => $this->t('Add New Form'),
            //'#submit' => array('::submitGeneral')
            '#ajax' => array(
                'callback' => '::addNewForm',  // the data that came from the form and that we
                // will receive as a result in the modal window
                // 'event' => 'change',
                'wrapper' => 'kashing-new-form-results',
                'method' => 'append',
            ),
            '#suffix' => '<div id="kashing-new-form-results"></div>',

        ];


        //-------------------------------------------------------

        $form['delete_mode'] = [
            '#type' => 'details',
            '#group' => 'kashing_settings',
            '#title' => $this->t('Delete Form')
        ];


        $form['delete_mode']['kashing_form_delete_text'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Form title'),
            '#description' => $this->t('The form title to delete.'),
        ];

        $form['delete_mode']['kashing_form_delete_button'] = [
            '#type' => 'button',
            '#value' => $this->t('Delete Form'),
            //'#submit' => array('::submitGeneral')
            '#ajax' => array(
                'callback' => '::deleteForm',  // the data that came from the form and that we
                // will receive as a result in the modal window
                // 'event' => 'change',
                'wrapper' => 'kashing-delete-form-results',
                'method' => 'append',
            ),
            '#suffix' => '<div id="kashing-delete-form-results"></div>',

        ];


        return parent::buildForm($form, $form_state);

    }


    public function submitForm(array &$form, FormStateInterface $form_state) {
        //parent::submitForm($form, $form_state);

        //$config = $this->config('kashing.settings');
        $config = $this->configFactory->getEditable('kashing.settings');

        $test_merchant_id  = $form_state->getValue('test_merchant_id');
        if ($test_merchant_id) {
            $config->set('key.test.merchant', $test_merchant_id);
        }

        $test_secret_key = $form_state->getValue('test_secret_key');
        if ($test_secret_key) {
            $config->set('key.test.secret', $test_secret_key);
        }

        $live_merchant_id = $form_state->getValue('live_merchant_id');
        if ($live_merchant_id) {
            $config->set('key.live.merchant', $live_merchant_id);
        }

        $live_secret_key = $form_state->getValue('live_secret_key');
        if ($live_secret_key) {
            $config->set('key.live.secret', $live_secret_key);
        }

        $config->save();

    }

    public function addNewForm(array &$form, FormStateInterface $form_state) {

        $values = $form_state->getValues();

        //"kashing_form_title":"aa","kashing_form_amount":"bb","kashing_form_description":"cc",
        //"kashing_form_checkboxes":{"address2":"address2","email":"email","phone":0},

        $config_name = 'kashing.blocks.forms';

        $config = $this->configFactory->getEditable($config_name);

        $form_title  = $form_state->getValue('kashing_form_title');
        $form_amount  = $form_state->getValue('kashing_form_amount');
        $form_description  = $form_state->getValue('kashing_form_description');
        $form_checkboxes  = $form_state->getValue('kashing_form_checkboxes');

//        $data = json_encode($form_amount);
//        return ['#markup' => $this->t('Success! Data %data', ['%data' => $data])];

        if ($form_title) {

            try{

//                $config->set($form_title, $form_title);
//
//                $config->set($form_title . '.amount', $form_amount);
//                $config->set($form_title . '.description', $form_description);
//
//                if ($form_checkboxes['phone'] == 'phone') {
//                    $config->set($form_title . '.phone', 'true');
//                } else {
//                    $config->set($form_title . '.phone', 'false');
//                }
//
//                if ($form_checkboxes['address2'] == 'address2') {
//                    $config->set($form_title . '.address2', 'true');
//                } else {
//                    $config->set($form_title . '.address2', 'false');
//                }
//
//                if ($form_checkboxes['email'] == 'email') {
//                    $config->set($form_title . '.email', 'true');
//                } else {
//                    $config->set($form_title . '.email', 'false');
//                }
//
//               $config->save();


                $kashing_block = Block::create([
                    'id' => $form_title,
                    'weight' => 0,
                    'status' => TRUE,
                    'region' => 'footer',
                    'plugin' => 'kashing_block',
                    'settings' => [
                        'label' => $form_title,
                        'kashing_form_settings' => [
                            'kashing_form_amount' => $form_amount,
                            'kashing_form_description' => $form_description,
                            'kashing_form_checkboxes' => $form_checkboxes
                        ]
                    ],
                    'theme' => 'seven',
                    'visibility' => [
                        'request_path' => [
                            'id' => 'request_path',
                            'negate' => FALSE,
                            'pages' => '/path',
                        ],
                    ],
                ]);

                $kashing_block->save();



            } catch (Exception $e) {

            return ['#markup' => $this->t('Error! New form not created! Reason: %reason.',
                ['%reason' => $e->getMessage()])];

            }

        } else {

        }
//

//        try {
//
//            $kashing_block = Block::create([
//                'id' => $form_title,
//                'weight' => 0,
//                'status' => TRUE,
//                'region' => 'footer',
//                'plugin' => 'kashing_block',
//                'settings' => [
//                    'label' => 'Test kashing setting',
//                    'amount' => $form_amount,
//                ],
//                'theme' => 'seven',
//                'visibility' => [
//                    'request_path' => [
//                        'id' => 'request_path',
//                        'negate' => FALSE,
//                        'pages' => '/path',
//                    ],
//                ],
//            ]);
//
//            //$kashing_block->save();
//
//        } catch (Exception $e) {
//
//            return ['#markup' => $this->t('Error! New form not created! Reason: %reason.',
//                ['%reason' => $e->getMessage()])];
//
//        }


        $data = json_encode($values);
        return ['#markup' => $this->t('Success! Data %data', ['%data' => $data])];



//        drupal_set_message(t('Form Submitted Successfully'), 'status', TRUE);
 //       $response = new AjaxResponse();
//        $content = 'Not found record with this title <strong>' . 'hehe' .'</strong>';
//        $options = array(
//            'dialogClass' => 'popup-dialog-class',
//            'width' => '300',
//            'height' => '300',
//        );
//        $response->addCommand(new OpenModalDialogCommand('hehe tytul', $content, $options));
//
        //     return $response;
    }


    public function deleteForm(array &$form, FormStateInterface $form_state){

        $form_title  = $form_state->getValue('kashing_form_delete_text');

        $plugin_name = 'kashing_block';
        $block_entity = $form_title;
        foreach (entity_load_multiple_by_properties('block', array('plugin' => $plugin_name)) as $block) {
            if ($block->id() == $block_entity) {
                $block->delete();
            }
        }

        $config_name = 'kashing.blocks.forms' . $block_entity;
        \Drupal::configFactory()->getEditable($config_name)->delete();

    }

    public function submitGeneral(array &$form, FormStateInterface $form_state) {
        // Get the form values here as $form_state->getValue(array('sample_field'))
        // and process it.
        //$values = $form_state->getValue();
        //print_r($values);

//        drupal_set_message(t('Form Submitted Successfully'), 'status', TRUE);
//
//
//        $response = new AjaxResponse();
//
//        $content = 'Not found record with this title <strong>' . 'hehe' .'</strong>';
//        $options = array(
//            'dialogClass' => 'popup-dialog-class',
//            'width' => '300',
//            'height' => '300',
//        );
//        $response->addCommand(new OpenModalDialogCommand('hehe tytul', $content, $options));
//
//        return $response;

        $response = [
            '#markup' => '<div class="hidden">Saved</div>',
        ];
        return $response;

    }

}

