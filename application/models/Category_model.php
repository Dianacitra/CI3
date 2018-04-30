<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

  public function get_single($id)
  {
    $query = $this->db->query('select * from categories where id_category='.$id);
    return $query->result();
  }

public function create_category()
   {
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );

       return $this->db->insert('categories', $data);
   }
 // Tambahkan fungsi get data seperti berikut ini
   public function get_all_categories()
   {
       $query = $this->db->get('categories');
       return $query->result();
   }

   public function hapus($id){
      $query = $this->db->query('DELETE FROM categories WHERE id_category='.$id);
   }


  public function update($id){
    $data = array(
      'cat_name' => $this->input->post('cat_name'),
      'cat_description' => $this->input->post('cat_description')
    );
    $this->db->where('id_category', $id);
    $this->db->update('categories', $data);
  }
 }
 