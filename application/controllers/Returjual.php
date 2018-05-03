<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Returjual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "returjual/page-retur";
		$data['title'] = 'Data Retur Penjualan';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "returjual/tambah-retur";
		$data['title'] = 'Tambah Data Retur Penjualan';
		$this->load->view('layout',$data);	
	}
}
