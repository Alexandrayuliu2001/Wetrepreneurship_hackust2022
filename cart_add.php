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


   
print_r($check);
    $item_id=$_GET['id'];
    print_r($item_id);
    $db = ierg4210_DB();
    $user_id=1;
    $id=1;
    print("checking");

    $db = new PDO('sqlite:/var/www/cart.db');
    $check=0;
                        $query_all=$db->query("SELECT id,user_id,item_id, item_num FROM users_items WHERE item_id=".$item_id.";");
                        $prod_res=$query_all->fetchAll();
                        foreach($prod_res as $prod_elm)
                        {
                            $check=$check+1;
                        }print("variable check is: ");
                        print_r($check);
                        print("variable pid is: ");
                        print_r($item_id);
    if($check==0){
    //
    $add_to_cart_query="INSERT INTO users_items(id,user_id,item_id) VALUES (".$id.",".$user_id.",".$item_id.");";
    $q=$db->prepare($add_to_cart_query);    
    $q->execute();
    if($q) sleep(1);
    echo '<script>alert("Product has been added successfully, returning in 3 seconds")</script>';
    sleep(1);}
    header('location: products.php');
?>