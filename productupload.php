<?php 
    print("[mk 1] Fetch all of the remaining rows in the result set:\n");
	//print_r($db);
    function ierg4210_DB() {
        $db = new PDO('sqlite:/var/www/cart.db');
        $db->query('PRAGMA foreign_keys = ON;');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $db;
    }
    ?></br><?php 
    print("[mk 2] Fetch all of the remaining rows in the result set:\n");

	function ierg4210_prod_insert() {
        // input validation or sanitization
        // DB manipulation
        print("[mk 2.1] Fetch all of the remaining rows in the result set:\n");

        global $db;
        $db = ierg4210_DB();
        print("[mk 2.2] Fetch all of the remaining rows in the result set:\n");

        // TODO: complete the rest of the INSERT command
        //if (!preg_match('/^\d*$/', $_POST['catid']))
          //  throw new Exception("invalid-catid");
       // $_POST['catid'] = (int) $_POST['catid'];
        //if (!preg_match('/^[\w\- ]+$/', $_POST['name']))
           // throw new Exception("invalid-name");
        //if (!preg_match('/^[\d\.]+$/', $_POST['price']))
           // throw new Exception("invalid-price");
        //if (!preg_match('/^[\w\- ]+$/', $_POST['description']))
          //  throw new Exception("invalid-textt");
    
    //    $sql="INSERT INTO products (catid, name, price, description) VALUES (?, ?, ?, ?)";
    //    $q = $db->prepare($sql);
    
        // Copy the uploaded file to a folder which can be publicly accessible at incl/img/[pid].jpg
        //if ($_FILES["file"]["error"] == 0 && $_FILES["file"]["type"] == "image/jpeg/jpg/gif/png" && mime_content_type($_FILES["file"]["tmp_name"]) == "image/jpeg/jpg/gif/png" && $_FILES["file"]["size"] < 5000000) {
                print("[mk 3] Fetch all of the remaining rows in the result set:\n");
            $catid = $_POST["CATID"];
            $name = $_POST["NAME"];
            $price = $_POST["PRICE"];
            $desc = $_POST["DESCRIPTION"];?></br><?php 
            print_r($catid); ?></br><?php 
            print_r($name); ?></br><?php 
            print_r($price); ?></br><?php 
            print_r($desc); ?></br><?php 
            $sql="INSERT INTO PRODUCTS (CATID, NAME, PRICE, DESCRIPTION) VALUES (".$catid.", '".$name."', ".$price.", '".$desc."');";
            $q = $db->prepare($sql);
            //$q->bindParam(1, $catid);
            //$q->bindParam(2, $name);
            //$q->bindParam(3, $price);
            //$q->bindParam(4, $desc);
            $q->execute();
            $lastId = $db->lastInsertId();
            print("[mk 4] Fetch all of the remaining rows in the result set:\n");
            ?></br><?php 
            print_r($lastId);
            ?></br><?php 
            print("[mk 5] Fetch all of the remaining rows in the result set:\n");

            // Note: Take care of the permission of destination folder (hints: current user is apache)
            move_uploaded_file($_FILES["FILE"]["tmp_name"], "admin/lib/images/" . $lastId . ".jpg")
                // redirect back to original page; you may comment it during debug /var/www/html/admin/lib/images
                ?></br><?php 
                print("[mk 6] Fetch all of the remaining rows in the result set:\n");  
            $sql="UPDATE PRODUCTS SET FILE = '/admin/lib/images/".$lastId.".jpg' WHERE PID = ".$lastId.";";   
            $q = $db->prepare($sql);
            //$q->bindParam(1, $catid);
            //$q->bindParam(2, $name);
            //$q->bindParam(3, $price);
            //$q->bindParam(4, $desc);
            $q->execute();
            ?></br><?php 
            print("[mk 7] Fetch all of the remaining rows in the result set:\n");
        }
        ierg4210_prod_insert();
        header('Content-Type: text/html; charset=utf-8');
    
?>