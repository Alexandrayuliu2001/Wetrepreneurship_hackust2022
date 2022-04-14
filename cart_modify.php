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
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th>Amount</th><th></th>
                        </tr>
                       <?php 
                        $sum=0;
                        //$user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        //$no_of_user_products= mysqli_num_rows($user_products_result);
                        //$counter=1;
                        $row=0;

                    //////////////////////////////////////////////
                    $db = new PDO('sqlite:/var/www/cart.db');
                    $q = $db->prepare("SELECT * FROM users_items LIMIT 100;");
                    if ($q->execute())
                         $result=$q->fetchAll();
                       
                    $query_all=$db->query("SELECT id,user_id,item_id, item_num FROM users_items;");
                    $prod_res=$query_all->fetchAll();
                    $num=0;
                    foreach($prod_res as $prod_elm)
                    {
                        $id=$prod_elm['id'];
                        $user_id=$prod_elm['user_id'];
                        $item_id=$prod_elm['item_id'];
                        $item_num=$prod_elm['item_num'];
                        $num=$num+1;
                    //////////////////////////////////////////////
                       while($row<=$num){
                        $row=$row+1;
                        //////////////
                        $db = new PDO('sqlite:/var/www/cart.db');
                        $query_all=$db->query("SELECT PID, NAME, PRICE, DESCRIPTION, FILE FROM PRODUCTS WHERE PID = '$item_id';");
                        $prod_res=$query_all->fetchAll();
                        foreach($prod_res as $prod_elm)
                        {
                            //$pid=$prod_elm['PID'];
                            $catid=$prod_elm['CATID'];
                            $prod_name=$prod_elm['NAME'];
                            $prod_price=$prod_elm['PRICE'];
                            $prod_description=$prod_elm['DESCRIPTION'];
                            $prod_file=$prod_elm['FILE'];
                            $sum=$sum+$prod_price;
                            //print_r($sum);
                        }
                        //////////////////////////////////////////////////////////////////////////////////
                         ?>
<html>
<h1><?php echo $prod_name; ?></h1>
<fieldset>
        <legend> New Amount</legend>
        <form id="cat_insert" method="POST" action="cart_modify_execute.php?id=<?php echo $item_id?>"
        enctype="multipart/form-data">

            <div> <input id="cate_name" type="text" name="AMOUNT" required="required" pattern="\d*"/></div>
            <!--<label for="cate_name"> Catidgory *</label>-->
            <!--<div> <input id="cate_name" type="text" name="CATID" required="required"/></div>-->
<!--            <label for="prod_image"> Image * </label>   -->
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>

                        <tr>
                            <th><?php echo $row ?></th><th><?php echo $prod_name?></th><th><?php echo $prod_price?></th><th><?php echo $item_num?></th>
                            <th><a href='cart_remove.php?id=<?php echo $item_id ?>'>Remove <?php echo $item_id ?></a></th>
                        </tr>
                       <?php $counter=$counter+1;
                        }
                    }
                    
                    if($num==0){
                        ?>
                        <script>
                        window.alert("No items in the cart");
                        </script>
                    <?php
                    }
                    
                    
                    ?>
                        <tr>
                            <th></th><th>Total [HKD]</th><th> <?php echo $sum?></th><th><a href="cart_modify.php?id=<?php echo $user_id?>" class="btn btn-primary">Amount Modify</a></th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
