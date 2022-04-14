<?php
    require 'connection.php';
    session_start();
    //session_start();
    $name=$_POST['name'];
    //$regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    //if(!preg_match($regex_email,$email)){
    //    echo "Incorrect email. Redirecting you back to login page...";
   //     ?>
      <!-- <meta http-equiv="refresh" content="2;url=login.php" />-->
       <?php
   // }
    $password_unhashed=$_POST['password'];
    //// hashing...
    $db_hash = new PDO('sqlite:/var/www/cart.db');
    $sql_hash="SELECT key FROM hash_function WHERE id=1;";
    $query_all_hash=$db_hash->query($sql_hash);
    $hash_key = $query_all_hash->fetchAll();
    foreach($hash_key as $_hash_key_elm){
        $key = $_hash_key_elm['key'];
        print("这是一个key:");print_r($key);print("这是一个key");
    }
    $password=hash($key, $password_unhashed);
    /// hashing...
    if(strlen($password_unhashed)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }

    $db = new PDO('sqlite:/var/www/sourcecodester_store.db');
    $query_all=$db->query("SELECT id, email, password FROM users WHERE name = '".$name."';");
    $prod_res=$query_all->fetchAll();
    foreach($prod_res as $prod_elm){
        $id=$prod_elm['id'];
        $password_get=$prod_elm['password'];
        $email=$prod_elm['email'];
        print_r($email);
        if($password_get==$password) {
            if($id==0){
                header('location: admin.php');
            }
            //$row=mysqli_fetch_array($user_authentication_result);
           else{ $_SESSION['email']=$email;
            $_SESSION['id']=$id;  //user id
            header('location: products.php');}
        }
        else{
            ?>
            <script>
                window.alert("Wrong username or password");
            </script>
            <meta http-equiv="refresh" content="1;url=login.php" />
            <?php
        }
    }
 ?>

