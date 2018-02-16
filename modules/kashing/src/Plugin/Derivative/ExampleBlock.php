<?php

namespace Drupal\kashing\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExampleBlock extends DeriverBase implements ContainerDeriverInterface {

    /**
     * Creates a new class instance.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     *   The container to pull out services used in the fetcher.
     * @param string $base_plugin_id
     *   The base plugin ID for the plugin ID.
     *
     * @return static
     *   Returns an instance of this fetcher.
     */


    public function __construct(EntityStorageInterface $node_storage) {
        $this->nodeStorage = $node_storage;
    }

    public static function create(ContainerInterface $container, $base_plugin_id)
    {
        // TODO: Implement create() method.
    }

    public function getDerivativeDefinitions($base_plugin_definition) {

        print_r('O CHOELSADASD');

        $myblocks = array(
            'mymodule_block_first' => t('MyModule Block: First'),
            'mymodule_block_second' => t('MyModule Block: Second'),
        );
        foreach ($myblocks as $block_id => $block_label) {
            $this->derivatives[$block_id] = $base_plugin_definition;
            $this->derivatives[$block_id]['admin_label'] = $block_label;
            $this->derivatives[$block_id]['cache'] = DRUPAL_NO_CACHE;
        }
        return $this->derivatives;

        $nodes = $this->nodeStorage->loadByProperties(['type' => 'article']);
        foreach ($nodes as $node) {
            $this->derivatives[$node->id()] = $base_plugin_definition;
            $this->derivatives[$node->id()]['admin_label'] = t('Node block: ') . $node->label();
        }
        return $this->derivatives;
    }
}