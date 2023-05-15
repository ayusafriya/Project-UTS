<?php 
require_once 'ecommerce.php';
require_once 'tamplates/topbar.php';
require_once 'tamplates/header.php';
require_once 'tamplates/sidebar.php';



?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM jenis_produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<h2 align="center" style="font-family:georgia">Detail Jenis Produk</h2>
<hr>
<br>
<table class="table table-striped">
    <tbody>
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Nama</td><td><?=$row['nama']?></td></tr>
        
    </tbody>
</table>
<?php
require_once 'tamplates/footer.php';
?>
