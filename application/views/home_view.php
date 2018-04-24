<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Diana</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

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
          <li><a class="page-scroll" href="../V_Blog">Blog</a></li>
          <li><a class="page-scroll" href="Category">Category</a></li>
        </ul>
      </div>   
    </div>
  </nav>  
  <br><br><br><br>
<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
      <a href="V_blog/tambah" class="btn btn-primary">Add Artikel</a><br><br>
      <?php foreach ($List_Blog as $key): ?>

        <div class="well well-sm">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <h3><?php echo $key->judul ?></h3>
              <br>
              <img src="gambar/<?php echo $key->gambar;?>" alt="Image" width="500">
              <p>
                diupload tanggal : <?php echo $key->tanggal ?><br>
                <a href="<?php echo site_url()?>V_blog/detail/<?php echo $key->id ?>">Read More ...</a>

                 <a href='V_blog/edit/<?php echo $key->id?>' class='btn btn-sm btn-info'> Update</a>
                  <a href='V_blog/delete/<?php echo $key->id;?>' class='btn btn-sm btn-danger'>Delete</a>                
              </p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        <!--<div class="container">
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php //echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td colspan="3"><a href="tambah" class="btn-sm btn-danger"> Tambah</a></td>
        </tr>
        <tr>
      </table>
    </div>-->
    <br><br><br><br><br><br>

  
  <?php echo form_open( 'Category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
   <label for="cat_name">Nama Kategori</label>
   <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name') ?>" required>
   <div class="invalid-feedback">Isi judul dulu gan</div>
</div>

<div class="form-group">
   <label for="text">Deskripsi</label>
   <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback">Isi deskripsinya dulu gan</div>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>

    <script src="assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
  </body>
</html>