<?php if (!$this->session->userdata('logged_in')) {
    redirect('User/login');
} ?>


<?php 
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('paging/header.php')
 ?>
 <?php $this->load->view('paging/navbar') ?>
  <br><br><br><br>
<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
      <a href="<?php echo base_url() ?>V_blog/tambah" class="btn btn-primary">Add Artikel</a><br><br>
      <?php foreach ($all_artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h3><?php echo $key->judul ?></h3>
              <br>
              <img src="<?php echo base_url() ?>gambar/<?php echo $key->gambar;?>" alt="Image" width="500">
              <p>
                diupload tanggal : <?php echo $key->tanggal ?><br>
                <a href="<?php echo site_url()?>V_blog/detail/<?php echo $key->id ?>">Read More ...</a>

                 <a href='<?php echo base_url() ?>V_blog/edit/<?php echo $key->id?>' class='btn btn-sm btn-info'> Update</a>
                  <a href='<?php echo base_url() ?>V_blog/delete/<?php echo $key->id;?>' class='btn btn-sm btn-danger'>Delete</a>                
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
     
    <br><br><br><br>
<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
        if (isset($links)) {
            echo $links;
        }
        ?>

    <br><br>
  </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script>

   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <!-- Style tambahan
        Note: Jika menginginkan style CSS tambahan, gunakan file custom.css sehingga file CSS asli milik Bootstrap tetap orisinil. Tujuannya, agar nantinya jika ada update baru dari Bootstrap dan ingin kita implementasikan, maka custom style kita tidak tertimpa.
        -->
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

        <script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>


        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/js/holder.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
  </body>
</html>