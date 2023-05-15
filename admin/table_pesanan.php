<?php
include_once 'ecommerce.php';
require_once 'tamplates/topbar.php';
require_once 'tamplates/header.php';
require_once 'tamplates/sidebar.php';


?>
<?php 

   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    </div>
                </div>
                
            </div><!-- /.container-fluid -->
        </section>
        
        
        <!-- Main content -->
        <section class="content">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">
                                
                                <main>
                            <section id="data_pesanan" class="data_pesanan">
                                <div class="container" data-aos="fade-up">

                                    <div class="section-title">
                                        <h2 style="font-family:georgia">Data Pesanan</h2>
                                    </div>

                                    <div class="row content">
                                        <div class="col-lg-12">
                                            <a href="create_pesanan.php" class="btn btn-primary mb-2 ">Create Pesanan</a>


                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Nama Produk</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Tanggal</th>
                                                        <th scope="col">Total Harga</th>
                                                        <th scope="col">Nama Pemesan</th>
                                                        <th scope="col">Alamat Pemesan</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($rs as $prod) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $prod['id']; ?></td>
                                                            <td><?= $prod['nama_produk']; ?></td>
                                                            <td><?= $prod['qty']?></td>
                                                            <td><?= $prod['tanggal']?></td>
                                                            <td><?= $prod['total_harga']?></td>
                                                            <td><?= $prod['nama_pemesan']?></td>
                                                            <td><?= $prod['alamat_pemesan']?></td>
                                                            <td>
                                                                <a href="view_pesanan.php?id=<?= $prod['id'] ?>" class="btn btn-info">View</a>
                                                                <a href="edit_pesanan.php?id=<?= $prod['id'] ?>" class="btn btn-warning">Edit</a>
                                                                <a class="btn btn-danger" href="delete_pesanan.php?id=<?= $prod['id'] ?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $no++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </section><!-- End About Us Section -->
                        </div>
                        <!-- /.card-body -->
                        
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  </main>

<?php
require_once 'tamplates/footer.php';
?>

      

