<?php 
require_once 'ecommerce.php';
?>
<?php 
   
   $_nama_produk = $_POST['nama_produk'];
   $_qty = $_POST['qty'];
   $_tanggal = $_POST['tanggal'];
   $_total_harga = $_POST['total_harga'];
   $_nama_pemesan = $_POST['nama_pemesan'];
   $_alamat_pemesan = $_POST['alamat_pemesan'];

   $_proses = $_POST['proses'];

   
   
   $ar_data[]=$_nama_produk;
   $ar_data[]=$_qty; 
   $ar_data[]=$_tanggal;
   $ar_data[]=$_total_harga;
   $ar_data[]=$_nama_pemesan; 
   $ar_data[]=$_alamat_pemesan; 
  
 

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (nama_produk,qty,tanggal,total_harga,nama_pemesan,alamat_pemesan) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET nama_produk=?,qty=?,tanggal=?,total_harga=?,nama_pemesan=?,alamat_pemesan=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_pesanan.php');
?>

   
   
   