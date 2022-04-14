<?php
    print("[mk 1] Fetch all of the remaining rows in the result set:\n");
	//print_r($db);
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/cart.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }
    print("[mk 2] Fetch all of the remaining rows in the result set:\n");

	function ierg4210_cat_insert() {
        // input validation or sanitization
        //if (!preg_match('/^[\w\-, ]+$/', $_POST['NAME']))
        //throw new Exception("invalid-name"); // DB manipulation
        global $db;
        $pid=$_POST["PID"];
        $catid = $_POST["CATID"];
        $name = $_POST["NAME"];
        $price = $_POST["PRICE"];
        $desc = $_POST["DESCRIPTION"];
        print_r($name);
        $db = ierg4210_DB();
        print("[mk 3] Fetch all of the remaining rows in the result set:\n");
        //move_uploaded_file($_FILES["FILE"]["tmp_name"], "/var/www/html/admin/lib/images/" . $pid . ".jpg")

        $sql = "UPDATE PRODUCTS SET CATID = '$catid', NAME = '".$name."', PRICE = '$price', DESCRIPTION = '".$desc."' WHERE PID = ".$pid.";";
        $q = $db->prepare($sql);
        $q->execute();
        }

        ierg4210_cat_insert();
        print("[mk 5] Fetch all of the remaining rows in the result set:\n");
?>