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
      <?php foreach ($single as $key): ?>
      <?php echo validation_errors(); ?>
      <?php echo form_open('V_blog/edit/'.$key->id, array('enctype'=>'multipart/form-data')); ?>
      <table>
        <tr>
          <td>ID BLOG</td>
          <td>:</td>
          <td><input type="text" name="id" readonly value="<?php echo $key->id_blog; ?>"></td>
        </tr>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="judul" value="<?php echo set_value('judul'); ?>"></td>
        </tr>
        <tr>
          <label>Kategori</label>
            <select name="id_kategori" class="form-control" required>
              <option value="">Choose Category</option>
              <?php foreach($Category as $Category): ?>
              <option value="<?php echo $categories->id_category; ?>"><?php echo $categories->Category; ?></option>
              <?php endforeach; ?>
            </select>
        </tr>
        <tr>
          <td>Konten</td>
          <td>:</td>
          <td><input type="text" name="konten" value="<?php echo set_value('konten'); ?>"></td>
        </tr>
         <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="date" name="tanggal" value="<?php echo set_value('tanggal'); ?>"></td>
        </tr>
       <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="gambar" value="<?php echo set_value('gambar'); ?>"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td>:</td>
          <td><input type="text" name="penerbit" value="<?php echo set_value('penerbit'); ?>"></td>
        </tr>
        <tr>
          <td>Penyunting</td>
          <td>:</td>
          <td><input type="text" name="penyunting" value="<?php echo set_value('penyunting'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber</td>
          <td>:</td>
          <td><input type="text" name="sumber" value="<?php echo set_value('sumber'); ?>"></td>
        </tr>

        <tr>
          <td colspan="3"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>

<div id="bottom-footer" class="row">

          <!-- social -->
          <div class="col-md-4 col-md-push-8">
            <ul class="footer-social">

            </ul>
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