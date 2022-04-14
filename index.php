<?php
session_start();
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">

               <style>
                   h1 {
  text-align: center;
}
p.wide{margin:10px;padding:5px} p.border,p.wide{border:3px solid #CCC} p.LRonly{border-top:0;border-bottom:0} p.lifted{margin-top:-50px}
</style>
               <h1><p class="wide">Shop by Categories</p></h1>




<?php
require __DIR__.'/lib/db.inc.php';
$res = ierg4210_cat_fetchall();
$options = '';

foreach ($res as $value){
    $options .= '<option value="'.$value["CATID"].'"> '.$value["NAME"].' </option>';
}

$query_all=$db->query("SELECT CATID, NAME FROM CATEGORIES;");
$prod_res=$query_all->fetchAll();
foreach($prod_res as $prod_elm)
{
    $catid=$prod_elm['CATID'];
    $name=$prod_elm['NAME'];

    print'<div class="col-xs-4">
    <div  class="thumbnail">
        <a href="products-by-categories.php?id='.$catid.'">
             <img src="img/camera.jpg" alt="Camera">
        </a>
        <center>
             <div class="caption">
                     <p id="autoResize">'.$name.'</p>
                     <p>Choose among the best available in the world.</p>
             </div>
        </center>
    </div>
</div>';
}

?>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center> 
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>