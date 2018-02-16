<?php

namespace Drupal\kashing_button\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\ckeditor\CKEditorPluginConfigurableInterface;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "kashing" plugin.
 *
 * @CKEditorPlugin(
 *   id = "kashing_button",
 *   label = @Translation("CKEditor Kashing Button")
 * )
 */

//the class only provides CKEditor settings page configuration and items visibility
class KashingButton extends CKEditorPluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface, CKEditorPluginConfigurableInterface {


    public function getLibraries(Editor $editor){
        return array();
    }

    public function isInternal()
    {
        return FALSE;
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies(Editor $editor) {
        return ['panelbutton'];
    }

    /**
     * {@inheritdoc}
     */
    public function getFile() {

        $path = drupal_get_path('module', 'kashing_button') . '/js/plugins/layoutmanager/plugin.js';



        return $path;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(Editor $editor) {

        $ids = \Drupal::entityQuery('block')
            ->condition('plugin', 'kashing_block')
            ->execute();

        $shortcode_ids = array([t('Code template'), '']);

        foreach ($ids as $id){
            $shortcode_ids[] = array( $id, $id);
        }


        return [
            'kashing_block_ids' => $shortcode_ids
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getButtons() {
       // $path = $this->getLibraryPath();

        $path =  $path = drupal_get_path('module', 'kashing_button') . '/js/plugins/layoutmanager/icons';
        return [
            'kashing_button' => [
                'label' => t('Kashing shortcode'),
                'image' => $path . '/kashing_button.png',
            ],
        ];
    }

    /**
     * Adds a CKEditor plugins settings panel
     */
    public function settingsForm(array $form, FormStateInterface $form_state, Editor $editor) {

        //here all plugin related data is saved
        $settings = $editor->getSettings();

        $form['Kashing'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Text title'),
            '#description' => $this->t('Here is an exemplary  description.'),
        ];

       // $form['colors']['#element_validate'][] = [$this, 'validateInput'];
        return $form;
    }

    /**
     * Example field validation
     */
    public function validateInput(array $element, FormStateInterface $form_state) {
        $input = $form_state->getValue([
            'editor',
            'settings',
            'plugins',
            'kashing_button',
            'Kashing',
        ]);

        if (preg_match('/([^A-F0-9,])/i', $input)) {
            $form_state->setError($element, 'Only valid hex values are allowed (A-F, 0-9). No other symbols or letters are allowed. Please check your settings and try again.');
        }
    }

}
