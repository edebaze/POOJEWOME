<?php

            /** *************************************************************
             *      Nous sommes ici sur le point d'entrée de notre app      *
             *                                                              *
             *      En mvc, c'est ce que l'on appel un FrontController      *
             *                                                              *
             *      L'ensemble des actions / requètes de notre site         *
             *      internet passera i,oqieùe,t âr ce fichier. Il a         *
             *      pour mission de transférer au bon controller la         *
             *      demande de l'utilisateur                                *
             * *********************************************************** **/

use Core\Core;

    # Chargement du bootstrap
    require_once 'bootstrap.php';

    # Chargement de mon site
    $core = new Core($_GET);
