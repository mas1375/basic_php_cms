<?php

require '../app/start.php';

    if(!empty($_POST)){
        $id    = $_POST['id'];
        $label = $_POST['label'];
        $title = $_POST['title'];
        $slug  = $_POST['slug'];
        $body  = $_POST['body'];

        $update_page = $db->prepare("
                UPDATE pages 
                SET
                    label = :label,
                    title = :title,
                    slug = :slug,
                    body = :body,
                    updated = NOW()

                WHERE id = :id

        ");

        $update_page->execute([
            'id' => $id,
            'label' => $label,
            'title' => $title,
            'slug'  => $slug,
            'body'  => $body,
        ]);

        header('location:' . BASE_URL . '/admin/list.php');
    }

        if(!isset($_GET['id'])){
            header('location: ' . BASE_URL . '/admin/list.php' );
            die();
        }

        $page = $db->prepare("
            SELECT * 
            FROM pages
            WHERE id = :id
        ");

        $page->execute([
                'id' => $_GET['id'],
        ]);

        $page = $page->fetch(PDO::FETCH_ASSOC);



require VIEW_ROOT . "/admin/edit.php";