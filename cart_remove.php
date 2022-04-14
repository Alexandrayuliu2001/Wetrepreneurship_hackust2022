<?php
    require 'connection.php';
    session_start();
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/cart.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }


    $item_id=$_GET['id'];
    print_r($item_id);
    $db = ierg4210_DB();
    $user_id=1;
    $id=1;
    print("checking");
    $delete_query="DELETE FROM users_items WHERE user_id=".$user_id." and item_id='".$item_id."';";
    $q=$db->prepare($delete_query);    
    $q->execute();
    if($q) print("Product has been deleted from cart successfully");    
    header('location: cart.php');
?>
