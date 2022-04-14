<?php
	//print_r($db);
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/sourcecodester_store.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }

	function ierg4210_cat_insert() {
        // input validation or sanitization
       
        $name=$_POST['name'];
        print("[ "); print_r($name); print(" ]deleted successfully");
        $db = ierg4210_DB();

        $sql = "DELETE FROM users WHERE name = '".$name."';";
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
?>