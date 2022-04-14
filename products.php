<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                    <a href="cart.php" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">MY SHOPPINGCART</a>
                </div>
            </div>
            <div class="container">
                <div class="row">

<?php

$db = new PDO('sqlite:/var/www/cart.db');
    $q = $db->prepare("SELECT * FROM categories LIMIT 100;");
    if ($q->execute())
         $result=$q->fetchAll();
$query_all=$db->query("SELECT PID, CATID, NAME, PRICE, DESCRIPTION, FILE FROM PRODUCTS;");
$prod_res=$query_all->fetchAll();
foreach($prod_res as $prod_elm)
{
    $num=$num+1;
    $pid=$prod_elm['PID'];
    $catid=$prod_elm['CATID'];
    $prod_name=$prod_elm['NAME'];
    $prod_price=$prod_elm['PRICE'];
    $prod_description=$prod_elm['DESCRIPTION'];
    $prod_file=$prod_elm['FILE'];
    $proimg ="<img src=".$prod_file.' width="200" height="200" />';
    $proprice ="price:".$prod_price.'hkd'."<br>";
    $probutton = '<button class="button" id="'.$pid.'" name="'.$prod_name.'" onclick="add(this)">AddToCart</button><br>';
    $smallbutton='<div class="add_btn">Add to Shopping Cart</div>';

                  print' <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=<?php echo $pid ?>">
                                <img src="'.$prod_file.'" alt="'.$prod_name.'">
                                </a>
                                <center>
                                    <div class="caption">
                                        <h3>'.$prod_name.'</h3>
                                        <p>Price: HKD. '.$prod_price.'</p>
                                        <a href="cart_add.php?id='.$pid.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        </div>
                                    </center>
                                </div>
                            </div>';
}
                
?>     
         </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>


