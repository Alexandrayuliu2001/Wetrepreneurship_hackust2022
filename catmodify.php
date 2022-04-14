<?php
	//print_r($db);
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/cart.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }
	function ierg4210_cat_insert() {
        // input validation or sanitization
        if (!preg_match('/^[\w\-, ]+$/', $_POST['NAME']))
        throw new Exception("invalid-name"); // DB manipulation
        global $db;
        $name=$_POST['NAME'];        
        $catid=$_POST['CATID'];
        print_r($name);
        $db = ierg4210_DB();
        $sql = "UPDATE CATEGORIES SET NAME = '".$name."' WHERE CATID = ".$catid.";";
        if ($db->query($sql) === TRUE) {
            return 1;
        }        
        print("\nupdated succefully");
        //$q=$db->prepare($sql);
        //$q->bindValue[(':NAME'=>$name)];
        //$q->bindValue(':CATID', :$catid);
        //$q->bindValue(':NAME', :$name);$sql = 'DELETE FROM tasks '
        //$stmt->execute([':NAME' => $name]);        
        }
        ierg4210_cat_insert();
?>