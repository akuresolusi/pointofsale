<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['title'] = 'Catalog';
		$this->load->view('catalog/page-catalog',$data);
	}
}
