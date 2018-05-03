<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelunasanjual extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['isi'] = "pelunasanjual/page-pelunasan";
		$data['title'] = 'Data Pelunasan';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "pelunasanjual/tambah-pelunasan";
		$data['title'] = 'Tambah Data Pelunasan';
		$this->load->view('layout',$data);	
	}
}
