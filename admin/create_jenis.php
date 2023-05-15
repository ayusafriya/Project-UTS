<?php
require_once 'ecommerce.php';
include_once 'tamplates/header.php';
include_once 'tamplates/topbar.php';
include_once 'tamplates/sidebar.php';


?>

<form method="POST" action="proses_jenis.php">
  <h2 align="center" style="font-family:georgia">Form Jenis Produk</h2>
  <hr>
  <br>

  <div class="form-group row">
    <label for="nama" class="col-6 col-form-label">Nama</label>
    <div class="col-6">
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
  </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
    </div>
  </div>

</form>
<?php
require_once 'tamplates/footer.php';
?>