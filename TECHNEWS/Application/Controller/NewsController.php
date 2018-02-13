<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 11:18
 */

namespace Application\Controller;
use Core\Controller\AppController;

class NewsController extends AppController {

            public function indexAction() {
                $this->render('news/index', [
                    'titre' => 'Webforce 3 Rouen !'
                ]);
            }

            public function categorieAction() {
                $this->render('news/categorie', [
                    'titre' => 'Categories !'
                ]);
            }

            public function articleAction() {
                $this->render('news/article', [
                    'titre' => 'Articles !'
                ]);
            }

            /*
            public function action($action = 'index') {
                 $this->render('news/' . $action);
            }
            */
}