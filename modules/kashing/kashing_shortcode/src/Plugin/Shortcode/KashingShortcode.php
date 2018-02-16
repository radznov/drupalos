<?php

namespace Drupal\kashing_shortcode\Plugin\Shortcode;


use Drupal\block\Entity\Block;
use Drupal\block_content\Entity\BlockContent;
use Drupal\Component\Utility\Html;
use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Language\Language;
use Drupal\kashing\Form\ExampleForm;
use Drupal\kashing\Plugin\Block\ExampleBlock;
use Drupal\shortcode\Plugin\ShortcodeBase;

/**
 * Provides a shortcode for Kashing.
 *
 * @Shortcode(
 *   id = "kashing",
 *   title = @Translation("Kashing"),
 *   description = @Translation("Add Kashing payment method")
 * )
 */

class KashingShortcode extends ShortcodeBase {

    /**
     * {@inheritdoc}
     */
    public function process($attributes, $text, $langcode = Language::LANGCODE_NOT_SPECIFIED) {

        $attributes = $this->getAttributes(array('id' => ''), $attributes);

        $block_id = $attributes['id'];

        //print_r('?????:' . $block_id);


        $controller = \Drupal::entityManager()->getStorage('block')->load($block_id);

        //load block entity and render it
        if ($block = entity_load('block', $block_id)) {

            //$render_controller = \Drupal::entityManager()->getViewBuilder($block->getEntityTypeId());

           // $render_controller->buildComponents()

            $view = entity_view($block, 'block');

        }

        $render = drupal_render($view);




        //place new kashing type block

//        $placed_block = Block::create([
//            'id' => 'kashingowe_testowe2',
//            'weight' => 0,
//            'status' => TRUE,
//            'region' => 'footer',
//            'plugin' => 'kashing_block',
//            'settings' => [
//                'label' => 'Test kashing setting',
//            ],
//            'theme' => 'seven',
//            'visibility' => [
//                'request_path' => [
//                    'id' => 'request_path',
//                    'negate' => FALSE,
//                    'pages' => '/path',
//                ],
//            ],
//        ]);
       //$placed_block->save();

        //to get all blocks meta data
//        $block_manager = \Drupal::service('plugin.manager.block');
//        $context_repository = \Drupal::service('context.repository');
//        $definitions = $block_manager->getDefinitionsForContexts($context_repository->getAvailableContexts());

        //get all created kashing blocks ids
//        $ids = \Drupal::entityQuery('block')
//            ->condition('plugin', 'kashing_block')
//            ->execute();

        //----------

        //----------


        //delete block entity by name
//        $plugin_name = 'kashing_block';
//        $block_entity = 'kashingowe_testowe2';
//        foreach (entity_load_multiple_by_properties('block', array('plugin' => $plugin_name)) as $block) {
//            if ($block->id() == $block_entity) {
//                $block->delete();
//            }
//        }

        $userData = \Drupal::service('user.data');


        return $render;
    }

    /**
     * {@inheritdoc}
     */
    public function tips($long = FALSE) {

        $output = array();
        $output[] = '<strong>' . t('[kashing/]') . '</strong> ';

        if ($long) {
            $output[] = t('Insert Kashing payment method. (long description)');
        } else {
            $output[] = t('Insert Kashing payment method.');
        }

        return implode(' ', $output);

    }

}
