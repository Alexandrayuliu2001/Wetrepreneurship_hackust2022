<?php
    require 'connection.php';
    session_start();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    //if(!preg_match($regex_email,$email)){
    //    echo "Incorrect email. Redirecting you back to registration page...";
        ?>
    <!--    <meta http-equiv="refresh" content="2;url=signup.php" /> -->
        <?php
    //}
    $password=$_POST['password'];
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $id=$_POST['id'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    //$duplicate_user_query="SELECTE id FROM users WHERE email='$email'";
    //$duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));

    $num=0;
    $db = new PDO('sqlite:/var/www/sourcecodester_store.db');
    $query_all=$db->query("SELECT name FROM users WHERE name = '$name';");
    $prod_res=$query_all->fetchAll();
    foreach($prod_res as $prod_elm)
    {
        $num=$num+1;
    }
    print_r($num);

    if($num==0){

    ////////////
    $db = new PDO('sqlite:/var/www/sourcecodester_store.db');
    print_r($db);
    //////////////
    $db_hash = new PDO('sqlite:/var/www/cart.db');
    $sql_hash="SELECT key FROM hash_function WHERE id=1;";
    $query_all_hash=$db_hash->query($sql_hash);
    $hash_key = $query_all_hash->fetchAll();
    foreach($hash_key as $_hash_key_elm){
        $key = $_hash_key_elm['key'];
        print("这是一个key:");print_r($key);print("这是一个key");
    }
    //$num=1;
    $password_hash=hash($key, $password);
    $sql="INSERT INTO users(name,email,password,contact,city,address) VALUES ('".$name."','".$email."','".$password_hash."','".$contact."','".$city."','".$address."');";
        
        //die($user_registration_query);
       //$user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        $q = $db->prepare($sql);
        $q->execute();   
        
        echo "User successfully registered";
        print_r($name);        
        print_r($email);
        print_r($password);
        print_r($contact);
        print_r($city);
        print("hhhhh1");
        $_SESSION['email']=$email;
        
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        //$_SESSION['id']=mysqli_insert_id($con); 
        //header('location: products.php');  //for redirecting?>
                <meta http-equiv="refresh" content="3;url=products.php" />

        

<?php
    }else {
        echo "username already registered";
        ?><script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" /><?php
    }
?>
       