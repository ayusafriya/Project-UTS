<?php 
require_once 'ecommerce.php';
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];

   $_proses = $_POST['proses'];

   
   $ar_data[]=$_id; 
   $ar_data[]=$_nama; 

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO jenis_produk (id,nama) VALUES (?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE jenis_produk SET id=?,nama=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: table_jenis.php');
?>