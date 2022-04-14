<?php
$db = new PDO('sqlite:/var/www/cart.db');

// enable foreign key support
$db->query('PRAGMA foreign_keys = ON;');

// FETCH_ASSOC:
// Specifies that the fetch method shall return each row as an
// array indexed by column name as returned in the corresponding
// result set. If the result set contains multiple columns with
// the same name, PDO::FETCH_ASSOC returns only a single value
// per column name.
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
?>
