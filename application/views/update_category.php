<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div class="container">
      <?php foreach($single as $key): ?>
        <?php echo form_open('category/edit/' .$key->id_category, array('enctype'=>'multipart/form-data')); ?>
     
      <table>
        <tr>
          <td>ID Category</td>
          <td>:</td>
          <td><input type="text" name="id_category" readonly value="<?php echo $key->id_category; ?>"></td>
        </tr>
        <tr>
          <td>NAME Category</td>
          <td>:</td>
          <td><input type="text" name="cat_name" value="<?php echo $key->cat_name; ?>"></td>
        </tr>
        <tr>
          <td>DESKRIPSI</td>
          <td>:</td>
          <td><input type="text" name="cat_description" value="<?php echo $key->cat_description; ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
        </tr>
      </table>
      <?php endforeach ?>
    </div>

</body>
</html>