<?php
require __DIR__.'/lib/db.inc.php';
$res = ierg4210_cat_fetchall();
$options = '';

foreach ($res as $value){
    $options .= '<option value="'.$value["CATID"].'"> '.$value["NAME"].' </option>';
}

///////////////////////////////////////////////
//$db_hash = new PDO('sqlite:/var/www/cart.db');
//    $sql_hash="SELECT key FROM hash_function WHERE id=1;";
//    $query_all_hash=$db_hash->query($sql_hash);
//    $hash_key = $query_all_hash->fetchAll();
//    foreach($hash_key as $_hash_key_elm){
//        $key = $_hash_key_elm['key'];
//        print("这是一个key:");print_r($key);print("这是一个key");
//    }   
//echo "The hash of Welcome to Tutorialspoint is - ". hash('md5', 'Welcome to Tutorialspoint');
//$ppr=hash('md5', 'Welcome to Tutorialspoint');
//print_r($ppr);
////////////////////////////////

?>

<?php
$res_user = ierg4210_user_fetchall();
$options_user = '';

foreach ($res_user as $value_user){
    $options_user .= '<option value="'.$value_user["id"].'"> '.$value_user["name"].' </option>';
}
?>

<?php
$db = new PDO('sqlite:/var/www/cart.db');
    $q = $db->prepare("SELECT * FROM categories LIMIT 100;");
    if ($q->execute())
         $result=$q->fetchAll();
         print("HOME PAGE");?></br><?php
         print("Fetch all of the remaining rows in the result set:\n");?></br></br><?php 

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
        <form>
        <a href='details.php?itn=<?php echo htmlspecialchars($prod_name) ?>&catid=<?php echo htmlspecialchars($catid) ?> '>
        <?php //echo $catid.'-'.$pid.'.png';?>
        <?php echo "$prod_file"?></br>
        <img src="<?php echo $prod_file;?>"> 
   


    </a></br>
    <?php echo $prod_name."</br>price: $".$prod_price; ?><a href=#>[add]</a>
    </form>
    <?php
    }
?>


<html>
<h1>Shop Management</h1>
<fieldset>
        <legend> New Category</legend>
        <form id="cat_insert" method="POST" action="catupload.php"
        enctype="multipart/form-data">

            <label for="cate_name"> Name *</label>
            <div> <input id="cate_name" type="text" name="NAME" required="required" pattern="^[\w\-]+$"/></div>
            <!--<label for="cate_name"> Catidgory *</label>-->
            <!--<div> <input id="cate_name" type="text" name="CATID" required="required"/></div>-->
<!--            <label for="prod_image"> Image * </label>   -->
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
<html>
<fieldset>
            <legend>Modify Category</legend>
            <form id="cate_edit" method="POST" action="catmodify.php"
                  enctype="multipart/form-data">
                <label for="cate_id"> Input CatID to be modified *</label>
                <div> <input id="cate_id" type="text" name="CATID" required="required" pattern="^\d+\.?\d*$"/></div>
                <label for="cate_name">Input New CatName</label>
                <div><input id="cate_name" type="text" name="NAME" required="true" pattern="^[\w\- ]+$" /></div>
                <input type="submit" value="Submit" />
            </form>
        </fieldset>
</html>
<html>
<fieldset>
        <legend> Drop Category</legend>
        <form id="cat_insert" method="POST" action="catdrop.php"
        enctype="multipart/form-data">

            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="NAME" required="required" pattern="^[\w\-]+$"/></div>
<!--            <label for="prod_image"> Image * </label>   -->
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
<html>
    <fieldset>
        <legend> New Product </legend>
        <form id="prod_insert" method="POST" action="productupload.php"
        enctype="multipart/form-data">
            <label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="CATID"><?php echo $options; ?></select></div>
            <label for="prod_name"> Name *</label>
            <div> <input id="prod_name" type="text" name="NAME" required="required" pattern="^[\w\-]+$"/></div>
            <label for="prod_price"> Price *</label>
            <div> <input id="prod_price" type="text" name="PRICE" required="required" pattern="^\d+\.?\d*$"/></div>
            <label for="prod_desc"> Description *</label>
            <div> <input id="prod_desc" type="text" name="DESCRIPTION"/> </div>
            <label for="prod_image"> Image [size limit: 20MB]* </label>
            [drag and drop is in "drag-and-drop-demo.php"]
            <div> <input type="file" name="FILE" required="true" accept="image/jpeg/jpg/gif/png"/> </div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
<html>
    <fieldset>
        <legend> Modify Product </legend>
        <form id="prod_modify" method="POST" action="productmodify.php"
        enctype="multipart/form-data">
            <label for="prod_name"> Enter PID of product to be modified *</label>
            <div> <input id="prod_name" type="text" name="PID" required="required" pattern="^[\w\-]+$"/></div>
            <label for="prod_catid"> New Category *</label>
            <div> <select id="prod_catid" name="CATID"><?php echo $options; ?></select></div>
            <label for="prod_name"> New Name *</label>
            <div> <input id="prod_name" type="text" name="NAME" required="required" pattern="^[\w\-]+$"/></div>
            <label for="prod_price"> New Price *</label>
            <div> <input id="prod_price" type="text" name="PRICE" required="required" pattern="^\d+\.?\d*$"/></div>
            <label for="prod_desc"> New Description *</label>
            <div> <input id="prod_desc" type="text" name="DESCRIPTION"/> </div>
            <!--<label for="prod_image"> New Image [size limit: 20MB]* </label>
            <div> <input type="file" name="FILE" required="true" accept="image/jpeg/jpg/gif/png"/> </div>-->
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
<html>
    <fieldset>
        <legend> Drop Product </legend>
        <form id="prod_drop" method="POST" action="productdrop.php"
        enctype="multipart/form-data">
            <label for="prod_pid"> Input PID of product to be dropped *</label>
            <div> <input id="prod_pid" type="text" name="PID" required="required" pattern="^\d+\.?\d*$"/></div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>


<html>
<h1>Account Management</h1>
<fieldset>
        <legend> Delete Account </legend>
        <form id="account_delete" method="POST" action="account_delete.php"
        enctype="multipart/form-data">
            <label for="user_id"> All usernames *</label>
            <div> <select id="pre_name" name="pre_name"><?php echo $options_user; ?></select></div>
            <label for="user_name"> Input username of account to be deleted *</label>
            <div> <input id="user_name" type="text" name="name" required="required"/></div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>