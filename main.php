<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main-1.css">
        <link rel="stylesheet" type="text/css" href="/4210/4210/css/category.css">

		</head>

        </html>
        <body>
            <div id="box">
				<h2 id="h5" class="box_head"></h2>
				<ul>
				</ul>
			</div>
        </body>

<?php 
            $catid = $_POST["CATID"];
           ?>
           
           <style>
p.wide{margin:10px;padding:5px} p.border,p.wide{border:3px solid #CCC} p.LRonly{border-top:0;border-bottom:0} p.lifted{margin-top:-50px}
</style>
<p class="wide">Displaying Products of Category <?php echo $catid; ?></p>
        

<hr>

        <ul class="table">
        <?php
    

    $db = new PDO('sqlite:/var/www/cart.db');
    $q = $db->prepare("SELECT * FROM categories LIMIT 100;");
    if ($q->execute())
         $result=$q->fetchAll();

    $query_all=$db->query("SELECT PID, NAME, PRICE, DESCRIPTION, FILE FROM PRODUCTS WHERE CATID = '$catid';");
    $prod_res=$query_all->fetchAll();
    $num=0;
//$count=$result['count']; 
    foreach($prod_res as $prod_elm)
    {
        $num=$num+1;
        $pid=$prod_elm['PID'];
        $catid=$prod_elm['CATID'];
        $prod_name=$prod_elm['NAME'];
        $prod_price=$prod_elm['PRICE'];
        $prod_description=$prod_elm['DESCRIPTION'];
        $prod_file=$prod_elm['FILE'];
        //print("hhhhhhhhhhhhhhhhh将就");
        //print_r($num);print("你那hhhhhhhhhhhhhhhhh");
		$proimg ="<img src=".$prod_file.' width="200" height="200" />';
		$proprice ="price:".$prod_price.'hkd'."<br>";
		$probutton = '<button class="button" id="'.$pid.'" name="'.$prod_name.'" onclick="add(this)">AddToCart</button><br>';
        $smallbutton='<div class="add_btn">Add to Shopping Cart</div>';
		//print "<li><div>".$proimg."</a><br>".$prod_name."</a><br>".$prod_price."</br>".$probutton."</div></li>   ";
		print "<li><div>".$proimg."</a><br>".$prod_name."</a><br>".$prod_price."</br>".$smallbutton."</div></li>   ";
        //print "<li><div class='pro_img'><img src=".$prod_file.' width="150" height="150"></a></div>';
        //print '<h3 id="h3" class="pro_name"><a rel="nofollow" href="#">'.$prod_name.'</a></h3>';
        //print'<p class="pro_price">'.$prod_price.'$</p>';
        //print '<div class="add_btn">Add to Shopping Cart</div></li>';
    }
        
        
?>
</ul>


<div style="margin-left:0%;" id="car" class="car">

				<div class="head_row hid">
					<div class="check left"> <i onclick="checkAll()">√</i></div>
					<div class="img left">  select all</div>
					<div class="name left">Name</div>
					<div class="price left">Price</div>
					<div class="number left">Amount</div>
					<div class="subtotal left">Sum</div>
				<!--<div class="ctrl left">操作</div>-->	
				</div>


			</div>
            <!--<i class="a-icon a-icon-star-small a-star-small-5 aok-align-bottom"><span class="a-icon-alt">4.8 out of 5 stars</span></i>-->
			<div style="margin-left:0%;" id="sum_area">
				<div id="pay">Checkout</div>
				<div id="pay_amout">Total：<span id="price_num">0</span>$</div>                
			</div>
            <div id="box">
				<h2 id="h5" class="box_head"></h2>
				<ul>
				</ul>
			</div>

