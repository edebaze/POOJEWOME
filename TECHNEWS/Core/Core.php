<?php

    namespace Core;

    use Core\Controller\AppController;

    class Core extends AppController {
       
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
                        $this->render('news/404Error', [
                            'message' => '404 Not Found !'
                        ]);
                    endif;
                else :
                    $this->render('news/404Error', [
                        'message' => '404 Not Found !'
                    ]);
                endif;
            }
    
    }