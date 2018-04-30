 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

   public function create()
    {
        $this->load->model('category_model');
        $data = array();
        $this->load->library('form_validation');
        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules('cat_name', 'cat_name', 'required', array('required' => '%s harus diisi '));
        $this->form_validation->set_rules('cat_description', 'description', 'required', array('required' => '%s harus diisi '));

        if($this->form_validation->run() === FALSE){
            $this->load->view('cat_create', $data);
        } else {
            $this->category_model->create_category();
            redirect('category');
        }
    }
    public function index()
    {
        $this->load->model('category_model');
           // Dapatkan semua kategori
        $data['categories'] = $this->category_model->get_all_categories();

        $this->load->view('cat_view', $data);
    }

    public function delete($id){
        $this->load->model('category_model');
        $this->category_model->hapus($id);
        redirect('category');
    }

    public function edit($id){
        $this->load->model('category_model');

        $data['single'] = $this->category_model->get_single($id);

        if($this->input->post('edit')){
            $this->category_model->update($id);
            redirect('category');
        }
        $this->load->view('update_category', $data);
    }
}