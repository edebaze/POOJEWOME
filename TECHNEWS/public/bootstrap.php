<?php
    
    # Quelques constantes utiles
define('PATH_ROOT', dirname(__DIR__));
define('PATH_PUBLIC', '/html-css-js/POO/TECHNEWS/public');
define('PATH_APPLICATION', PATH_ROOT . '/Application');
define('PATH_VIEWS', PATH_APPLICATION . '/Views');
define('PATH_LAYOUT', PATH_APPLICATION . '/Layout');
define('PATH_HEADER', PATH_LAYOUT . '/header.inc.php');
define('PATH_FOOTER', PATH_LAYOUT . '/footer.inc.php');

    # Connexion à la BDD
define('DBHOST', 'localhost');
define('DBNAME', 'technews');
define('DBUSER', 'root');
define('DBPASS', '');

    # Chargement de l'autoload
require_once 'Autoloader.php';
Autoloader::register();