<body>
			<div style="margin-left:15%;" id="car" class="car">

				<div class="head_row hid">
					<div>Home Page</div></br>
				<!--<div class="ctrl left">操作</div>-->	
				</div>


			</div>
<?php
print("Fetch all of the remaining rows in the result set:\n");?></br></br><?php 
$db = new PDO('sqlite:/var/www/cart.db');
    $q = $db->prepare("SELECT * FROM categories LIMIT 100;");
    if ($q->execute())
         $result=$q->fetchAll();
         print("HOME PAGE");

    $query_all=$db->query("SELECT PID, CATID, NAME, PRICE, DESCRIPTION, FILE FROM products LIMIT 20;");
    $prod_res=$query_all->fetchAll();
    foreach($prod_res as $prod_elm)
    {
        $pid=$prod_elm['PID'];
        $catid=$prod_elm['CATID'];
        $prod_name=$prod_elm['NAME'];
        $prod_price=$prod_elm['PRICE'];
        $prod_description=$prod_elm['DESCRIPTION'];
        $prod_file=$prod_elm['FILE'];

        //print("\n\n[lllllllllalalala]\n");

        //print_r($prod_price);
        //print("[lllllllllalalala]\n");
        ?>
        <li>
        <a href='details.php?itn=<?php echo htmlspecialchars($prod_name) ?>&catid=<?php echo htmlspecialchars($catid) ?> '>
        <img src='./img/thumbnail/<?php echo $catid.'/'.$pid.'.png';?>'>
    </a></br>
    <?php echo $prod_name."</br>price: $".$prod_price; ?><a href=#>[add]</a></br></br></br>
    </li>
    <?php
    }
?>


<html>
<fieldset>
        <legend> New Category</legend>
        <form id="prod_insert" method="POST" action="admin-process.php?action=prod_insert"
        enctype="multipart/form-data">

            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="name" required="required" pattern="^[\w\-]+$"/></div>
<!--            <label for="prod_image"> Image * </label>   -->
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
<html>
    <fieldset>
        <legend> New Product</legend>
        <form id="prod_insert" method="POST" action="admin-process.php?action=prod_insert"
        enctype="multipart/form-data">

        <?php
print("checking 1\n");

require __DIR__.'/lib/db.inc.php';
print("checking 3\n");

$res = ierg4210_cat_fetchall();

$products = '<ul>';

foreach ($res as $value){
    $products .= '<li><a href = "'.$value["file"].'"> '.$value["NAME"].'</a></li>';
}

$products .= '</ul>';

echo '<div id = "maincontent">
<div id = "products">'.$products.'
</div>
</div>';
print("mark 4");
print_r($products);
?>


<label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="CATID"><?php 
            
            
            

            echo $products; ?></select></div>

            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="name" required="required" pattern="^[\w\-]+$"/></div>
            <label for="prod_price"> Price *</label>
            <div> <input id="prod_price" type="text" name="price" required="required" pattern="^\d+\.?\d*$"/></div>
            <label for="prod_desc"> Description *</label>
            <div> <input id="prod_desc" type="text" name="description"/> </div>
            <label for="prod_image"> Image * </label>
            <div> <input type="file" name="file" required="true" accept="image/jpeg/jpg/gif/png"/> </div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>



