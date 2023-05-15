<?php 
require_once 'ecommerce.php';
require_once 'tamplates/topbar.php';
require_once 'tamplates/header.php';
require_once 'tamplates/sidebar.php';

?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    
?>
<h2 align="center" style="font-family:georgia">Detail Pesanan</h2>
<hr>
<br>
<table class="table table-striped">
    <tbody>
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Nama Produk</td><td><?=$row['nama_produk']?></td></tr>
        <tr>  <td>Qty</td><td><?=$row['qty']?></td></tr>
        <tr>  <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>  <td>Total Harga</td><td><?=$row['total_harga']?></td></tr>
        <tr>  <td>Nama Pemesan</td><td><?=$row['nama_pemesan']?></td></tr>
        <tr>  <td>Alamat Pemesan</td><td><?=$row['alamat_pemesan']?></td></tr>
        
    </tbody>
</table>
<?php
require_once 'tamplates/footer.php';
?>
