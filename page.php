<?php 
// here we wanna get the information about the slug that we got from url

    require 'app/start.php';

    if(empty($_GET['page'])){
        $page = false;
    }else {
        // grabbing the page content.

        $slug = $_GET['page'];

        // should set a palse holder for slug to avoid the sql injection like this :palseholder

        $page = $db->prepare("
            select *
            FROM pages 
            WHERE slug= :slug
        ");

        $page->execute(['slug' => $slug ]);

        $page = $page->fetch(PDO::FETCH_ASSOC);
        
        //this is for showing time and date in the right way

        if($page){
            $page['created'] = new DateTime($page['created']);
        }
        
        if($page['updated']){
            $page['updated'] = new DateTime($page['updated']);
        }

    }
    // so now we gonna show this page
 require VIEW_ROOT . '/page/show.php';

