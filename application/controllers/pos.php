<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['title'] = 'Point Of Sale';
		$this->load->view('pos/page-pos',$data);
	}
}
