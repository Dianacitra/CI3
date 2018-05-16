<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_blog extends CI_Controller {


	public function index()
	{
		$this->load->model('List_Blog');
		
		// Dapatkan data dari model Blog dengan pagination
		// Jumlah artikel per halaman
		$limit_per_page = 3;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->List_Blog->get_total();
		
		if ($total_records > 0) {
			// Dapatkan data pada halaman yg dituju
			$data["all_artikel"] = $this->List_Blog->get_all_artikel($limit_per_page, $start_index);
			
			// Konfigurasi pagination
			$config['base_url'] = base_url() . 'V_blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config["uri_segment"] = 3;
			
			$this->pagination->initialize($config);
				
			// Buat link pagination
			$data["links"] = $this->pagination->create_links();
		}

		$this->load->view("paging/header");
		// Passing data ke view
		$this->load->view('home_view', $data);
		$this->load->view("paging/footer");
	}

	public function detail($id)
	{
		$this->load->model('List_Blog');
		$data['detail'] = $this->List_Blog->get_single($id);
		$this->load->view('home_detail', $data);
	}


	public function tambah()
	{
		$this->load->model('List_Blog');
		$this->load->model('category_model');
		$data['categories'] = $this->category_model->get_all_categories();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'isi judul terlebih dahulu!!!', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('konten', 'isi konten terlebih dahulu!!!', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('penerbit', 'isi penerbit terlebih dahulu!!!', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('penyunting', 'isi penyunting terlebih dahulu!!!', 'required', array('required' => 'isi %s, '));
		$this->form_validation->set_rules('sumber', 'isi sumber terlebih dahulu!!!', 'required', array('required' => 'isi %s, '));



		if($this->form_validation->run() === FALSE){
			$this->load->view('tambah', $data);
		}
		else{
			if ($this->input->post('simpan')) {
				$upload = $this->List_Blog->upload();

				if ($upload['result'] == 'success') {
				$this->List_Blog->insert($upload);
				redirect('V_blog');
				}else{
				$data['message'] = $upload['error'];
				}
			}
		$this->load->view('tambah', $data);
		}

	}

	public function edit($id){
		$this->load->model('List_Blog');
		$this->load->model('Category_model');
		$data['category'] = $this->Category_model->get_all_categories();
		$data['single'] = $this->List_Blog->get_single($id);

		if($this->input->post('edit')){
			$upload=$this->List_Blog->upload();
			$this->List_Blog->update($upload ,$id);
			redirect('V_blog');
		}
		$this->load->view('update_blog',$data);
	}

	public function delete($id){
		$this->load->model('List_Blog');
		$this->List_Blog->delete($id);
		redirect('V_blog');
	}
}