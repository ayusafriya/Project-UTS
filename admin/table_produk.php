<?php
include_once 'ecommerce.php';
require_once 'tamplates/topbar.php';
require_once 'tamplates/header.php';
require_once 'tamplates/sidebar.php';


?>
<?php

$sql = "SELECT p.id, p.kode, p.nama, p.harga, p.stok, j.nama as jenis_produk from produk p left join jenis_produk j on j.id = p.jenis_produk_id";
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
                                <section id="data_produk" class="data_produk">
                                    <div class="container" data-aos="fade-up">

                                        <div class="section-title">
                                            <h2 style="font-family:georgia">Data Produk</h2>
                                        </div>

                                        <div class="row content">
                                            <div class="col-lg-12">
                                                <a href="create_produk.php" class="btn btn-primary mb-2 ">Create Produk</a>


                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Id</th>
                                                            <th scope="col">Kode</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Harga</th>
                                                            <th scope="col">Stok</th>
                                                            <th scope="col">Jenis Produk</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($rs as $prod) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $prod['id'] ?></td>
                                                                <td><?= $prod['kode'] ?></td>
                                                                <td><?= $prod['nama'] ?></td>
                                                                <td><?= $prod['harga'] ?></td>
                                                                <td><?= $prod['stok'] ?></td>
                                                                <td><?= $prod['jenis_produk'] ?></td>
                                                                <td>
                                                                    <a href="view_produk.php?id=<?= $prod['id'] ?>" class="btn btn-info">View</a>
                                                                    <a href="edit_produk.php?id=<?= $prod['id'] ?>" class="btn btn-warning">Edit</a>
                                                                    <a class="btn btn-danger" href="delete_produk.php?id=<?= $prod['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $prod['nama'] ?>?')) {return false}">Delete</a>
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