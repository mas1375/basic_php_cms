<?php
//where all things setting up i.e:database

require 'app/start.php';

//creating query 

    $pages = $db->query("
        SELECT *
        FROM pages
    ")->fetchALL(PDO::FETCH_ASSOC);

//creating view

    require VIEW_ROOT . '\home.php';