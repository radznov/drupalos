<?php

namespace Drupal\kashing\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\user\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a user details block.
 *
 * @Block(
 *     id = "kashing_block",
 *     admin_label=@Translation("Kashing block"),
 *     deriver = "Drupal\kashing\Plugin\Derivative\ExampleBlock"
 * )
 *
 */

class ExampleBlock extends BlockBase implements  ContainerFactoryPluginInterface, BlockPluginInterface {

    /**
     * Builds and returns the renderable array for this block plugin.
     *
     * If a block should not be rendered because it has no content, then this
     * method must also ensure to return no content: it must then only return an
     * empty array, or an empty array with #cache set (with cacheability metadata
     * indicating the circumstances for it being empty).
     *
     * @return array
     *   A renderable array representing the content of the block.
     *
     * @see \Drupal\block\BlockViewBuilder
     */



    public function __construct(array $configuration, $plugin_id, $plugin_definition, $data) {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
    }


    public function build() {

        $build = array();

        $config = $this->getConfiguration();
        $argument = $config['kashing_form_settings'];

//        $config = \Drupal::config('kashing.settings');
//        $amount = $config->get('key')['test']['merchant'];

        $build['#markup'] = '' . t('My Custom Form') . '';
        $build['form'] = \Drupal::formBuilder()->getForm('\Drupal\kashing\Form\ExampleForm', $argument);

        return $build;
    }


    public function blockForm($form, FormStateInterface $form_state)
    {
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();


        $form['kashing_form_settings'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('General'),
        ];

//        $form['kashing_form_settings']['kashing_form_title'] = [
//            '#type' => 'textfield',
//            '#title' => $this->t('Form title'),
//            '#default_value' => isset($config['label']) ? $config['label'] : '?',
//            '#description' => $this->t('The form title.'),
//        ];

        $form['kashing_form_settings']['kashing_form_amount'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Amount'),
            '#default_value' => isset($config['kashing_form_settings']['kashing_form_amount']) ? $config['kashing_form_settings']['kashing_form_amount'] : '?',
            '#description' => $this->t('Enter the form amount that will be processed with the payment system.'),
        ];

        $form['kashing_form_settings']['kashing_form_description'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Description'),
            '#default_value' => isset($config['kashing_form_settings']['kashing_form_description']) ? $config['kashing_form_settings']['kashing_form_description'] : '',
            '#description' => $this->t('The form transaction description.'),
        ];


        $form['kashing_form_settings']['checkboxes'] = [
            '#type' => 'fieldset',
            '#title' => $this->t('Optional Form Fields'),
        ];

        $form['kashing_form_settings']['checkboxes']['kashing_form_checkboxes'] = [
            '#type' => 'checkboxes',
            '#options' => [
                'address2' => t('Address 2'),
                'email' => t('Email'),
                'phone' => t('Phone')
            ],
            'address2' => [
                '#default_value' => $config['kashing_form_settings']['kashing_form_checkboxes']['address2'],
            ],
            'email' => [
                '#default_value' => $config['kashing_form_settings']['kashing_form_checkboxes']['email'],
            ],
            'phone' => [
                '#default_value' => $config['kashing_form_settings']['kashing_form_checkboxes']['phone'],
            ],
            '#description' => 'Enable selected form fields.',
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {

        $this->configuration['kashing_form_settings']['kashing_form_amount'] =
            $form_state->getValue(['kashing_form_settings', 'kashing_form_amount']);

        $this->configuration['kashing_form_settings']['kashing_form_description'] =
            $form_state->getValue(['kashing_form_settings', 'kashing_form_description']);

        $this->configuration['kashing_form_settings']['kashing_form_checkboxes']['address2'] =
           $form_state->getValue(['kashing_form_settings', 'checkboxes', 'kashing_form_checkboxes', 'address2']);

        $this->configuration['kashing_form_settings']['kashing_form_checkboxes']['email'] =
            $form_state->getValue(['kashing_form_settings', 'checkboxes', 'kashing_form_checkboxes'])['email'];

        $this->configuration['kashing_form_settings']['kashing_form_checkboxes']['phone'] =
            $form_state->getValue(['kashing_form_settings', 'checkboxes', 'kashing_form_checkboxes', 'phone']);


        parent::blockSubmit($form, $form_state);
    }

    /**
     * Creates an instance of the plugin.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     *   The container to pull out services used in the plugin.
     * @param array $configuration
     *   A configuration array containing information about the plugin instance.
     * @param string $plugin_id
     *   The plugin ID for the plugin instance.
     * @param mixed $plugin_definition
     *   The plugin implementation definition.
     *
     * @return static
     *   Returns an instance of this plugin.
     */


    public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition)
    {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->get('entity.manager')
        );
    }
}