<?php if (!$this->session->userdata('logged_in')) {
    redirect('User/login');
} ?>

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