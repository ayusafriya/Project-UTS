<?php 
require_once 'ecommerce.php';
?>
<?php 
   $_id = $_POST['id'];
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_jenis = $_POST['jenis'];

   $_proses = $_POST['proses'];

   
   $ar_data[]=$_id; 
   $ar_data[]=$_kode; 
   $ar_data[]=$_nama; 
   $ar_data[]=$_harga; 
   $ar_data[]=$_stok; 
   $ar_data[]=$_jenis; 

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,kode,nama,harga,stok,jenis_produk_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE produk SET id=?,kode=?,nama=?,harga=?,stok=?,jenis_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_produk.php');
?>