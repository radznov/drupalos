<?php

namespace Drupal\kashing\Entity;

use Drupal\Core\Url;

class KashingAPI
{

    private $mode;

    private $test_mode;

    private $merchant_id;

    private $secret_key;

    private $currency;

    private $success_page;

    private $failure_page;

    private $api_url;

    private $has_errors;

    private $errors;

    private $config;


    function __construct() {

        $this->has_errors = false;
        $this->errors = array();
        //TODO check if settings exists
        $this->config = \Drupal::config('kashing.settings');

        $this->init_configuration();

    }


    private function init_configuration() {

        $this->mode = $this->config->get('mode');

        //determine api mode (test default)

        if ($this->mode == 'live') {
            $option_mode = 'live';
            $this->api_url = 'https://api.kashing.co.uk/';
        } else {
            $option_mode = 'test';
            $this->api_url = 'https://development-backend.kashing.co.uk/';
        }

        //Merchant ID

        $merchant_id = $this->config->get('key')[$option_mode]['merchant'];

        if (isset($merchant_id)) {
            $this->merchant_id = $merchant_id;
        } else {
            $this->add_error(array(
                'field' => 'merchant_id',
                'type' => 'missing_field',
                'msg' => t('The merchant ID is missing.')
            ));
        }

        //Secret Key

        $secret_key = $this->config->get('key')[$option_mode]['secret'];

        if (isset($secret_key)) {
            $this->secret_key = $secret_key;
        } else {
            $this->add_error(array(
                'field' => 'secret_key',
                'type' => 'missing_field',
                'msg' => t('The secret key is missing.')
            ));
        }

        //Currency

        $currency = $this->config->get('currency');

        if (isset($currency)) {
            $this->currency = $currency;
        } else {
            $this->add_error(array(
                'field' => 'currency',
                'type' => 'missing_field',
                'msg' => t('The currency ISO code is missing.')
            ));
        }

        //TODO returning pages

        //Success Page

        $success_page = $this->config->get('success_page');

        if (isset($success_page) && $success_page != '') {
            $this->success_page = $success_page;
        } else {
            $this->add_error(array(
                'field' => 'success_page',
                'type' => 'missing_field',
                'msg' => t('The success page is missing.')
            ));
        }

        $failure_page = $this->config->get('failure_page');

        if (isset($failure_page) && $failure_page != '') {
            $this->failure_page = $failure_page;
        } else {
            $this->add_error(array(
                'field' => 'failure_page',
                'type' => 'missing_field',
                'msg' => t('The failure page is missing.')
            ));
        }

        // Errors

        global $kashing_configuration_errors;

        if ($this->has_errors === false) {
            $kashing_configuration_errors = false; // There are no configuration errors
            return true; // Configuration is successful
        }

        // There are errors in the plugin configuration

        $kashing_configuration_errors = true;

        return false;
    }

    private function add_error($error) {

        if ($this->has_errors == false) {
            $this->has_errors = true;
        }

        if (is_array($error)) {
            $this->errors[] = $error;
            return true;
        }

        return false;
    }

    public function hasErrors() {
        return $this->has_errors;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function process($transaction_data) {

        $url = $this->api_url . 'transaction/init';

        // Return URL
//        if ( isset( $_POST[ 'origin' ] ) && get_post_status( $_POST[ 'origin' ] ) ) {
//            $return_url = get_permalink( $_POST[ 'origin' ] );
//        } else {
//            $return_url = get_home_url(); // If no return page found, we need to redirect somewhere else.
//        }
        //TODO return url - currently returning to previous page
        $return_url = $this->get_current_url();
        $transaction_data['returnurl'] = $return_url;

        $transaction_data['merchantid'] = $this->merchant_id;
        $transaction_data['currency'] = $this->currency;

        $data_string = '';
        foreach ( $transaction_data as $data_key => $data_value ) {
            $data_string .= $data_value;
        }

        $transaction_psign = $this->get_psign($transaction_data);

        $final_transaction_array = array(
            'transactions' => array(
                array_merge(
                    $transaction_data,
                    array(
                        'psign' => $transaction_psign
                    )
                )
            )
        );

        $body = json_encode($final_transaction_array);

        $request = \Drupal::httpClient()->post($url, [
            'method' => 'POST',
            'body' => $body,
            'timeout' => 10,
            'headers' => [
                'Content-type' => 'application/json',
            ],
        ])->getBody()->getContents();

        $response_body = json_decode($request);

        //TODO response errors handling

        $redirect_url = $response_body->results[0]->redirect;

        return $redirect_url;
    }

    private function get_current_url() {

        $current_path = \Drupal::service('path.current')->getPath();
        $current_path_alias = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);
        $url = Url::fromUserInput($current_path_alias, array('absolute' => TRUE))->toString();

        return $url;
    }

    private function get_psign($data_array) {

        $data_string = $this->secret_key . $this->extract_transaction_data($data_array);

        $psign = sha1($data_string);

        return $psign;
    }

    private function extract_transaction_data($data_array){

        $data_string = '';
        foreach ( $data_array as $data_key => $data_value ) {
            $data_string .= $data_value;
        }

        return $data_string;
    }



}