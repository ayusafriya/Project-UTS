<?php
require_once 'ecommerce.php';
include_once 'tamplates/header.php';
include_once 'tamplates/topbar.php';
include_once 'tamplates/sidebar.php';

?>
<?php
$id = $_GET['id'];
$sql = "SELECT p.id, p.kode, p.nama, p.harga, p.stok, j.id as jenis_produk from produk p left join jenis_produk j on j.id = p.jenis_produk_id WHERE p.id = ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
$hasil = $r->fetch();
?>

<h2 align="center" style="font-family:georgia">Edit Produk</h2>
<hr>
<br>
<form method="POST" action="proses_produk.php">
  <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">

  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="kode" name="kode" type="text" class="form-control" value="<?php echo $hasil['kode']; ?>">
      </div>
    </div>
  </div>

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
    <label for="harga" class="col-4 col-form-label">Harga</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="harga" name="harga" type="double" class="form-control" value="<?php echo $hasil['harga']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div>
        <input id="stok" name="stok" type="number" class="form-control" value="<?php echo $hasil['stok']; ?>">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4 col-form-label">Jenis Produk</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
            <?php
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);

            ?>
            </div>
            </div>
            <select id="jenis" name="jenis" class="form-control">
              <?php foreach ($rsjenis as $rowjenis) { ?>
                <option value="<?php echo $rowjenis['id'] ?>" <?= $hasil['jenis_produk'] == $rowjenis['id'] ? 'selected' : '' ?>> <?php echo $rowjenis['nama'] ?>
                  <?php ?>
                </option>
              <?php } ?>
            </select>
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
include_once 'tamplates/footer.php';
?>