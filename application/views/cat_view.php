<?php if (!$this->session->userdata('logged_in')) {
    redirect('User/login');
} ?>

<?php 
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('paging/header.php')
 ?>
 <?php $this->load->view('paging/navbar') ?>
  	<br>
  	<h1 class="black-text">READ CATEGORY</h1>
  	<br><br><br>
  	<br><br>
  	<td><a href='Category/create/' class='btn btn-sm btn-info'>ADD CATEGORY</a></td>


	
    <div class="card-content table-responsive">
            <div class="col-sm-12 col-md-12">
             <table class="table">
             	<thead class="text-primary">
             		<th>ID Category</th>
             		<th>Category Name</th>
             		<th>Category Description</th>
             		<th>Action</th>
             	</thead>

             	<tbody>
             		<?php
        				foreach ($categories as $key) :  
        			?>
             		<tr>
				        <td><?php echo $key->id_category ?></td>
	          			<td><?php echo $key->cat_name ?></td>
	          			<td><?php echo $key->cat_description ?></td>
	          			<td>
	          				<a href="Category/edit/<?php echo $key->id_category ?>" class="btn btn-primary">UPDATE</a>
	          				<a href="Category/delete/<?php echo $key->id_category ?>" class="btn btn-danger">DELETE</a>
	          			</td>
    				</tr>
             	</tbody>
             	<?php endforeach;?>

             </table>

           
          </div>
      </div>


</body>
</html>
