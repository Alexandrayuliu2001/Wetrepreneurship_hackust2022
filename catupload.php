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
        if (!preg_match('/^[\w\-, ]+$/', $_POST['NAME']))
        throw new Exception("invalid-name"); // DB manipulation
        global $db;
        $name=$_POST['NAME'];        
        $catid=$_POST['CATID'];
        print_r($name);
        $db = ierg4210_DB();
        //$sql = "INSERT INTO CATEGORIES (CATID, NAME) VALUES ('$catid','$name')";
        $sql="INSERT INTO CATEGORIES (NAME) VALUES ('".$name."');";

        $q=$db->prepare($sql);
        //$q->bindValue(':CATID', :$catid);
        //$q->bindValue(':NAME', :$name);
        $q->execute();
        if($q) print("成功添加 条数据");
        else print("fAIZLUREHBFED");
                   // will return True/False - whether it is success
           print("Categories Inserted\n");
        }

        ierg4210_cat_insert();
        print("[mk 3] Fetch all of the remaining rows in the result set:\n");
?>