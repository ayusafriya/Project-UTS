<?php
require_once 'ecommerce.php';


$id = $_GET['id'];
$sql = "DELETE FROM jenis_produk WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:table_jenis.php');

?>