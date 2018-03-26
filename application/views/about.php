<?php 
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('paging/header.php')
 ?>
 <?php $this->load->view('paging/navbar') ?>

      <div class="jumbotron p-3 p-md-5 text-white rounded alert-success">
        <div class="col-md-6 px-0 text-success">
          <h1 class="display-4 font-italic">Welcome to Diana's About Page</h1>
          <p class="lead my-3">Nama saya Diana Citra Panjaitan.</p>
        </div>
      </div>

    <footer class="blog-footer">
      <center><p>Diana Citra Panjaitan [1631710025]</p>
   	</center>
    </footer>
<?php 
$this->load->view('paging/footer.php')
 ?>