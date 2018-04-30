<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_blog extends CI_Controller {

	public function index()
	{
		$this->load->model('List_Blog');
		$data['List_Blog'] = $this->List_Blog->get_artikels();
		$this->load->view('home_view', $data);
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
		$data['category'] = $this->Category_model->get_all_category();
		$data['single'] = $this->List_Blog->get_single($id);

		if($this->input->post('edit')){
			$upload=$this->List_Blog->upload();
			$this->List_Blog->update($upload,$id);
			redirect('V_blog');
		}
		$this->load->view('update_blog');
	}

	public function delete($id){
		$this->load->model('List_Blog');
		$this->List_Blog->delete($id);
		redirect('V_blog');
	}
}