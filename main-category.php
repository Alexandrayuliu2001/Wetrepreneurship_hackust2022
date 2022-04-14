<?php
require __DIR__.'/lib/db.inc.php';
$res = ierg4210_cat_fetchall();
$options = '';

foreach ($res as $value){
    $options .= '<option value="'.$value["CATID"].'"> '.$value["NAME"].' </option>';
}
?>


<html>
    <fieldset>
        <legend> Shop by Category </legend>
        <form id="prod_insert" method="POST" action="main.php"
        enctype="multipart/form-data">
            <label for="prod_catid"> Category *</label>
            <div> <select id="prod_catid" name="CATID"><?php echo $options; ?></select></div>
            <input type="submit" value="Submit"/>
        </form>
    </fieldset>
</html>
