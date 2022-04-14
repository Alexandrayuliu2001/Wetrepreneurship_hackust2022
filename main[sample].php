<?php
print("checking\n");
?>
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

?>

<?php
print("checking 2\n");
?>