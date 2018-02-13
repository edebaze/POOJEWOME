<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 12:33
 */

namespace Core\Controller;


    class AppController {

            private $_viewparams;

         /* ****************************************************************** *
         *  -->   Permet de générer l'affichage de la vue passée en paramètre  *
         *  ================================================================== *
         * @param $view             : Vue à afficher                           *
         * @param array $viewparam  : Données à passer à la vue                *
         * ****************************************************************** */
            protected function render($view, $viewparams = []) {
                // Récupération et Affectation des params de la vue
                $this->_viewparams = $viewparams;

                // Permet d'accéder au tableau directement dans la variable
                extract($this->_viewparams);

                // Chargement du header
                include_once PATH_HEADER;

                // Chargement de la vue
                include_once PATH_VIEWS . '/' . $view . '.php';

                // Chargement du footer
                include_once PATH_FOOTER;

            }

        /**
         * @return mixed
         */
        public function getViewparams()
        {
            $object = new\ArrayObject($this->_viewparams);
            $object->setFlags(\ArrayObject::ARRAY_AS_PROPS); # On passe le tableau en objet
            return $object;
        }

    }