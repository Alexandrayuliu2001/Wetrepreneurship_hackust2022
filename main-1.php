<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TONG Xindi's website</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    

</head>




<body>
  <?php
   $catid = $_GET['catid'];
   $url = '/main.php?catid='.$catid;
   require __DIR__.'/lib/db.inc.php';
   $cat = ierg4210_cat_fetchall();
   $pro = ierg4210_prod_fetchAll($catid);
   //var_dump($pro);
   $name = '';
    foreach ($cat as $value){
	if($catid == ''.$value["CATID"].''){
		$name = ''.$value["NAME"].'';
		
	}
	
	
}   
   $urln = "<a href=".$url.">".$name."</a>";
  ?>
   

   


    <div class="uvl">
	<?php 
	
	foreach ($cat as $value){
	$name = ''.$value["NAME"].'';
	$catid = ''.$value["CATID"].'';
	$url = '/main.php?catid='.$catid;
	
    print "<li><a href=".$url.">".$name."</a></li>";
    }
	
	?>
	
	</div>

    <div class="bodypart">
        <nav>
            <ul class="menu">
                <li id="xxx"> ><a id="yyy" href="home.php">Home</a></li>
                <li>><?php echo $urln ?></li>

            </ul>
        </nav>
        <hr>

        <nav>
            <h4>Shopping list</h4>
            <ol>
			   <form method="POST" id="shoppinglist">
			   <button type="submit">Checkout</button>
				</form>
                <br>
            </ol>
        </nav>
		
        <hr>

        <ul class="table">
		<?php
		
		foreach($pro as $value){
			$proname = ''.$value["NAME"].'';
			$catid = ''.$value["CATID"].'';
			$price = ''.$value["PRICE"].'';
			$id = ''.$value["ID"].'';
			$pid = ''.$value["PID"].'';
			$prourl ='/product.php?catid='.$catid.'&id='.$id;
			$imglocation = '/admin/lib/image/'.$id.'.jpg';
			$proimg ="<img src=".$imglocation.' width="200" height="200" />';
			$proprice ="price:".$price.'hkd'."<br>";
			$probutton = '<button class="button" id="'.$pid.'" name="'.$proname.'" onclick="add(this)">AddToCart</button><br>';
			print "<li><a href=".$prourl.">".$proimg."</a><br>"."<a href=".$prourl.">".$proname."</a><br>".$proprice.$probutton."</li>   ";
			
			
		}
		
		
		?>
    

        </ul>


    </div>
</html>