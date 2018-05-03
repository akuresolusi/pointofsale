<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "penjualan/page-penjualan";
		$data['title'] = 'Data Penjualan';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "penjualan/tambah-penjualan";
		$data['title'] = 'Tambah Data Penjualan';
		$this->load->view('layout',$data);	
	}
}
