<?php
require_once 'ecommerce.php';

$id = $_GET['id'];
$sql = "DELETE FROM pesanan WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:table_pesanan.php');

?>