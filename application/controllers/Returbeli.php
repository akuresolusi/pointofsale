<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returbeli extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "returbeli/page-retur";
		$data['title'] = 'Data Retur Pembelian';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "returbeli/tambah-retur";
		$data['title'] = 'Tambah Data Retur Pembelian';
		$this->load->view('layout',$data);	
	}
}
