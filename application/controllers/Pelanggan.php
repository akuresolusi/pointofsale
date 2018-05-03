<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index(){
		$data['list_pelanggan'] = $this->master_model->list_pelanggan();
		$data['isi'] = "pelanggan/page-pelanggan";
		$data['title'] = 'Data Pelanggan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_kategori_pelanggan'] = $this->master_model->list_kategori_pelanggan();
		$data['isi'] =  "pelanggan/tambah-pelanggan";
		$data['title'] = 'Tambah Data Pelanggan';
		$this->load->view('layout',$data);	
	}

	public function edit(){
		$data['detail'] = $this->master_model->detail_pelanggan($this->input->post_get('id'));
		$data['list_kota'] = $this->master_model->list_kota();
		$data['list_kategori_pelanggan'] = $this->master_model->list_kategori_pelanggan();
		$data['isi'] =  "pelanggan/edit-pelanggan";
		$data['title'] = 'Perbarui Data Pelanggan';
		$this->load->view('layout',$data);	
	}

	public function tambah_pelanggan(){
		$this->master_model->add_pelanggan();
		redirect('pelanggan');
	}

	public function edit_pelanggan(){
		$this->master_model->update_pelanggan($this->input->post_get('id'));
		redirect('pelanggan');
	}

	public function hapus_pelanggan(){
		$this->master_model->delete_pelanggan($this->input->post_get('id'));
		redirect('pelanggan');
	}


}
