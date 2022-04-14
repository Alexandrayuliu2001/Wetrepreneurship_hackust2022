<?php
 print("HOME PAGE");?></br><?php
 print("Fetch all of the remaining rows in the result set:\n");?></br></br><?php 
    require 'connection.php';
    session_start();
    //require 'header.php';
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/cart.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }


   	$item_id=$_GET['id'];
	$item_num=$_POST['AMOUNT'];
    print_r($item_num);
    $db = ierg4210_DB();
    $user_id=1;
    $id=1;
    print("checking, itemid= ");
	print_r($item_id);
	print("itemnum= ");
	print_r($item_num);
    $update_query="UPDATE users_items SET item_num = ".$item_num." WHERE item_id = ".$item_id.";";
    $q=$db->prepare($update_query);    
    $q->execute();
    if($q) print("Product number has been updated from cart successfully");    
    //header('location: cart.php');
	
?>