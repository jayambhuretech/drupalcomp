<?php
    namespace Drupal\libraries\Controller;
    use Drupal\Core\Controller\ControllerBase;

    Class librariesController extends ControllerBase{
        public function librariesPage(){
            $data = array(
                'name'=> 'Dhananjay Ambhure',
                'email'=> 'test@test.com'
            );

            return[
                '#title' => 'libraries Page',
                '#theme' => 'libraries_page',
                '#items' => $data
            ];
        }
    }