<?php

namespace Drupal\kashing\Controller;

use Drupal\Core\Controller\ControllerBase;

class KashingController extends ControllerBase {

    public function test() {
        return array(
          '#type' => 'markup',
          '#markup' => hello_create_node(),
        );
    }

    public function create_node() {
        return array(
            '#markup' => hello_create_node(),
        );
    }

}
