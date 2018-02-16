<?php

namespace Drupal\kashing_shortcode_button\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginConfigurableInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "kashing" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colorbutton",
 *   label = @Translation("CKEditor Color Button")
 * )
 */

//the class only provides CKEditor settings page configuration and items visibility
class ColorButton extends CKEditorPluginBase implements CKEditorPluginConfigurableInterface {

    /**
     * Get path to library folder.
     */
    public function getLibraryPath() {
        $path = '/libraries/colorbutton';
        if (\Drupal::moduleHandler()->moduleExists('libraries')) {
            $path = libraries_get_path('colorbutton');
        }

        return $path;
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
        return $this->getLibraryPath() . '/plugin.js';
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(Editor $editor) {
        $settings = $editor->getSettings();

        // enableMore can only be supported if the Color Dialog plugin is present.
        $config = [
            'colorButton_enableMore' => FALSE,
            'colorButton_enableAutomatic' => TRUE,
        ];

        if (!empty($settings['plugins']['colorbutton']['colors'])) {
            $config['colorButton_colors'] = $settings['plugins']['colorbutton']['colors'];
        }

        return $config;
    }

    /**
     * {@inheritdoc}
     */
    public function getButtons() {
        $path = $this->getLibraryPath();
        return [
            'TextColor' => [
                'label' => $this->t('Text Color'),
                'image' => $path . '/icons/textcolor.png',
            ],
            'BGColor' => [
                'label' => $this->t('Background Color'),
                'image' => $path . '/icons/bgcolor.png',
            ],
            'KashingShortcode' => [
                'label' => $this->t('Kashing shortcode'),
                'image' => $path . '/icons/kashing_icon.png',
            ],
        ];
    }

    /**
     * Adds a CKEditor plugins settings panel
     */
    public function settingsForm(array $form, FormStateInterface $form_state, Editor $editor) {

        //here all plugin related data is saved
        $settings = $editor->getSettings();

        $form['colors'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Text title'),
            '#description' => $this->t('Here is an exemplary  description.'),
            '#default_value' => !empty($settings['plugins']['colorbutton']['colors']) ? $settings['plugins']['colorbutton']['colors'] : '',
        ];

        $form['colors']['#element_validate'][] = [$this, 'validateInput'];
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
            'colorbutton',
            'colors',
        ]);

        if (preg_match('/([^A-F0-9,])/i', $input)) {
            $form_state->setError($element, 'Only valid hex values are allowed (A-F, 0-9). No other symbols or letters are allowed. Please check your settings and try again.');
        }
    }

}
