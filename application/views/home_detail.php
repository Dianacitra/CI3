<?php if (!$this->session->userdata('logged_in')) {
    redirect('User/login');
} ?>


<!DOCTYPE html>
<html lang="en">
  <head>
 	 <title>DIANA CITRA</title>

    <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.css" type="text/css">   -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    </head>
  <body>
 
  <nav class="navbar navbar-inverse">
  <a class= "navbar-brand" href="#">Beauty Blogger</a> 
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                     
        </button>
      </div>   
      <div class="single-page-nav sticky-wrapper" id="tmNavbar">
        <ul class="nav navbar-nav">
          <li><a class="page-scroll" href="<?php echo site_url()?>Home/">Home</a></li>
          <li><a class="page-scroll" href="<?php echo site_url()?>About/">About</a></li>
          <li><a class="page-scroll" href="../../V_Blog">Blog</a></li>
          <li><a class="page-scroll" href="Category">Category</a></li>
        </ul>
      </div>   
    </div>
  </nav>   
	<br><br><br><br>
<div class="container">
    	<div class="col-xs-12 col-sm-9 col-md-9">

         <?php foreach ($detail as $key): ?>
          <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul; ?></b><h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="../../gambar/<?php echo $key->gambar;?>" alt="Image" width="500" >
            </td>
          </tr>
          <tr>
            <td class="text-center">
              Diupload tanggal : <?php echo $key->tanggal; ?><br><br>
            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <?php echo $key->konten; ?>
            </td>
          </tr>
        </table>
         <?php endforeach ?>

      </div>
    </div>

	
    <script src="assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>