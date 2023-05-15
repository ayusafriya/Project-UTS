<?php
require_once 'ecommerce.php';
include_once 'tamplates/header.php';
include_once 'tamplates/topbar.php';
include_once 'tamplates/sidebar.php';

?>

<div class="content-wrapper">
  <form method="POST" action="proses_produk.php">
    <h2 align="center" style="font-family:georgia">Form Produk</h2>
    <hr>
    <br>
    <div class="form-group row">
      <label for="kode" class="col-4 col-form-label">Kode</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div>
          <input id="kode" name="kode" type="text" class="form-control" value="">
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
          <input id="nama" name="nama" type="text" class="form-control" value="">
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
          <input id="harga" name="harga" type="double" class="form-control" value="">
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
          <input id="stok" name="stok" type="number" class="form-control" value="">
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
            </div>
            <?php
            $sqljenis = "SELECT * FROM jenis_produk";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select class="form-control" name="jenis" id="jenis">
              <?php
              foreach ($rsjenis as $rowjenis) {
              ?>
                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
              <?php
              }
              ?>

          </div>
        </div>

      </div>
    </div>


    <div class="form-group row">
      <div class="offset-4 col-8">
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
      </div>
    </div>
</div>
</div>

</div>

</form>


<?php
include_once 'tamplates/footer.php';
?>