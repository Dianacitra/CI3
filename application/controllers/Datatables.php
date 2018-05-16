<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatables extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('list_blog');
	}

	public function index()
	{
		// Dapatkan data artikel dari model
		$artikel['data'] = $this->list_blog->get_artikels();

		$this->load->view("paging/header");
		$this->load->view("paging/navbar");
		$this->load->view('v_datatable', $artikel);
		$this->load->view("paging/footer");
	}

	public function get_json()
	{
		$artikel['data'] = $this->list_blog->get_artikels();
		
		// Tampilkan dalam bentuk format
		echo json_encode($artikel);
	}

	public function view_json()
	{
		$this->load->view("paging/header");
		$this->load->view('datatables/dt_json');
		$this->load->view("paging/footer");
	}

}
