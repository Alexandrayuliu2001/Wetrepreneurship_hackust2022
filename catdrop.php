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
        
        global $db;
        $name=$_POST['NAME'];        
        $catid=$_POST['CATID'];
        print_r($name);
        $db = ierg4210_DB();
        print("[mk 3] Fetch all of the remaining rows in the result set:\n");

        $sql = "DELETE FROM CATEGORIES WHERE NAME = '".$name."';";
        if ($db->query($sql) === TRUE) {
            echo "deleted succefully";
            return 1;
        }        
        //$q=$db->prepare($sql);
        //$q->bindValue[(':NAME'=>$name)];
        //$q->bindValue(':CATID', :$catid);
        //$q->bindValue(':NAME', :$name);$sql = 'DELETE FROM tasks '
        //$stmt->execute([':NAME' => $name]);        
        }

        ierg4210_cat_insert();
        print("[mk 5] Fetch all of the remaining rows in the result set:\n");
?>