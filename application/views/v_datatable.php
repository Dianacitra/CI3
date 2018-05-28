<?php if (!$this->session->userdata('logged_in')) {
    redirect('User/login');
} ?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/jquery.dataTables.min.css'?>">

<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Blog DataTables</h1>
            
        </div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-basic" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Penerbit</th>
                            <th>Penyunting</th>
                            <th>Sumber</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id ?></td>
                            <td><?php echo $d->judul ?></td>
                            <td><?php echo $d->tanggal ?></td>
                            <td><?php echo $d->penerbit ?></td>
                            <td><?php echo $d->penyunting ?></td>
                            <td><?php echo $d->sumber ?></td>
                            <td>
                                <a href="<?php echo base_url('/blog/edit/') . $d->id ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
</main>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function(){

          // Contoh inisialisasi Datatable tanpa konfigurasi apapun
          // #dt-basic adalah id html dari tabel yang diinisialisasi
          $('#dt-basic').DataTable();
      });

  </script>


</body>
</html>