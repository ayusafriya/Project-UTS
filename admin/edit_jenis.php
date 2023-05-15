<?php
require_once 'ecommerce.php';
include_once 'tamplates/header.php';
include_once 'tamplates/topbar.php';
include_once 'tamplates/sidebar.php';


?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM jenis_produk WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>
<h2 align="center" style="font-family:georgia">Edit Jenis Produk</h2>
<hr>
<br>
<form method="POST" action="proses_jenis.php">
  <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="<?php echo $hasil['nama']; ?>">
      </div>
    </div>
  </div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
    </div>
  </div>
</form>
<?php
require_once 'tamplates/footer.php';
?>