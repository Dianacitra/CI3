<hr>
Add Artikel
<hr>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart( 'V_blog/tambah', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="judul" value="<?php echo set_value('judul'); ?>"></td>
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
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
  </form>