<?php
    use Core\Core;

    # Chargement du bootstrap
    require_once 'bootstrap.php';
    
    # Chargement du header
    include_once PATH_HEADER;
    
    # Chargement de mon site
    $core = new Core($_GET);
    
    # Chargement du footer
    include_once PATH_FOOTER;