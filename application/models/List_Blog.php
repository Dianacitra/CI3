<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Blog extends CI_Model {

	public function get_all_artikel( $limit = FALSE, $offset = FALSE ) 
    {
        // Jika variable $limit ada pada parameter maka kita limit query-nya
        if ( $limit ) {
            $this->db->limit($limit, $offset);
        }
    	// Query Manual
    	// $query = $this->db->query('
    	// 		SELECT * FROM blogs
    	// 	');

        // Memakai Query Builder
        // Urutkan berdasar tanggal
        $this->db->order_by('blog.tanggal', 'DESC');

        // Inner Join dengan table Categories
        $this->db->join('categories', 'blog.id_category = categories.id_category');
	     $query = $this->db->get('blog');

    	// Return dalam bentuk object
    	return $query->result();
    }

    public function get_total() 
    {
        // Dapatkan jumlah total artikel
        return $this->db->count_all("blog");
    }

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id='.$id);
		return $query->result();

		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('categories', 'blog.id_category = categories.id_category');
		$this->db->where('blog.id='.$id);
		return $this->db->get()->result();
	}

	public function upload()
	{
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(	
			'id' => '',
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'gambar' => $upload['file']['file_name'],
			'tanggal' => $this->input->post('tanggal'),
			'penerbit' => $this->input->post('penerbit'),
			'penyunting' => $this->input->post('penyunting'),
			'sumber' => $this->input->post('sumber'),
			'id_category' => $this->input->post('id_category'),
			
		);
		$this->db->insert('blog', $data);
}
		//public function update($post, $id){
	//		$judul= $this->db->escape($post['judul']);
	//		$konten = $this->db->escape($post['konten']);
	//		$tanggal = $this->db->escape($post['tanggal']);
		//
		//	$sql = $this->db->query('UPDATE blog SET judul = $judul, konten = $konten, tanggal = $tanggal WHERE id ='.intval($id));
		//		return TRUE;	 
	//	}
	//}
	public function delete($id){
		$query = $this->db->query('DELETE from blog where id = '.$id);
	}

}