<?php
require_once 'ecommerce.php';

$id = $_GET['id'];
$sql = "DELETE FROM produk WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:table_produk.php');

?>