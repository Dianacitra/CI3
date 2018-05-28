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
          <li><a class="page-scroll" href="<?php echo site_url()?>V_blog">Blog</a></li>
          <li><a class="page-scroll" href="<?php echo site_url()?>Category">Category</a></li>
          <li><a class="page-scroll" href="<?php echo site_url()?>datatables">Datatables</a></li>
        </ul>

                <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="btn-group" role="group" aria-label="Data baru">
                        <?php echo anchor('user/register', 'Register', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/login', 'Login', array('class' => 'btn btn-outline-light')); ?>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="btn-group" role="group" aria-label="Data baru">

                        <?php echo anchor('V_blog/tambah', 'Artikel Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('Category/create', 'Kategori Baru', array('class' => 'btn btn-outline-light')); ?>
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
                    </div>
                <?php endif; ?>

      </div>   
    </div>
  </nav>  