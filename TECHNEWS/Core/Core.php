<?php

    namespace Core;

    class Core {
       
            public function __construct($params) {
                #print_r($params);
                
                if(empty($params)) :
                    $params['controller'] = 'news';
                    $params['action']     = 'index';
                endif;
                
                $controller = 'Application\Controller\\' . ucfirst($params['controller']) . 'Controller';
                $action     = $params['action'] . 'Action';

                # On vérifie si le dossier existe
                if(file_exists(PATH_ROOT.'\\'. $controller .'.php')) :
                    $obj = new $controller;
                    if(method_exists($obj, $action)) :
                        $obj->$action();
                    else :
                        echo 'Aucune action ne correspond';
                    endif;
                else :
                    echo '<h1> Ce controller n\'existe pas</h1>';
                endif;

                if($controller == 'news' && $action == 'index') {
                    echo '<h1> JE SUIS LA PAGE D\'ACCUEIL </h1>';
                }
            }
    
    }