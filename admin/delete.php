<?php
require '../app/start.php';

if(isset($_GET['id'])){
    // DELETE
    $delete_page = $db->prepare("
            DELETE FROM pages
            WHERE id = :id
    ");
    
    $delete_page->execute([
        'id' => $_GET['id'],
        ]);
}

header('location: ' . BASE_URL . '/admin/list.php');
