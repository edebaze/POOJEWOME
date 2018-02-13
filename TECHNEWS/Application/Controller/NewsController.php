<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 11:18
 */

namespace Application\Controller;
use Application\Model\Categorie\CategorieDb;
use Core\Controller\AppController;

class NewsController extends AppController {

            public function indexAction() {
                # Connexion à la BDD
                $categorieDb = new CategorieDb;
                $categorie = $categorieDb->fetchAll();

                # Affichage de la vue
                $this->render('news/index', [
                    'titre' => 'Webforce 3 Rouen !',
                    'categorie' => $categorie
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