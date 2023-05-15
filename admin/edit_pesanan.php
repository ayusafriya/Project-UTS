<?php
require_once 'ecommerce.php';
include_once 'tamplates/header.php';
include_once 'tamplates/topbar.php';
include_once 'tamplates/sidebar.php';


?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pesanan WHERE id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>

<h2 align="center" style="font-family:georgia">Edit Pesanan</h2>
<hr>
<br>
<form method="POST" action="proses_pesanan.php">
  <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">

  <div class="form-group row">
    <label for="nama_produk" class="col-4 col-form-label">Nama Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama_produk" name="nama_produk" type="text" class="form-control" value="<?php echo $hasil['nama_produk']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="qty" class="col-4 col-form-label">Qty</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="qty" name="qty" type="number" class="form-control" value="<?php echo $hasil['qty']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?php echo $hasil['tanggal']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="total_harga" class="col-4 col-form-label">Total Harga</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="total_harga" name="total_harga" type="double" class="form-control" value="<?php echo $hasil['total_harga']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="<?php echo $hasil['nama_pemesan']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="<?php echo $hasil['alamat_pemesan']; ?>">
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