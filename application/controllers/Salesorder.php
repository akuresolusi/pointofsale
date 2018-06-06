<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesorder extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['content'] = "salesorder/home-salesorder";
		$data['title'] = 'Sales Order';
		$this->load->view('layout-so',$data);
	}

	public function tambahso(){
		$data['content'] = "salesorder/tambah-salesorder";
		$data['title'] = 'Tambah Sales Order';
		$this->load->view('layout-so',$data);
	}
	public function history(){
		$data['content'] = "salesorder/history-salesorder";
		$data['title'] = 'History Sales Order';
		$this->load->view('layout-so',$data);
	}
	public function pendapatan(){
		$data['content'] = "salesorder/profit-salesorder";
		$data['title'] = 'Pendapatan Sales Order';
		$this->load->view('layout-so',$data);
	}
	public function so(){
		$data['content'] = "salesorder/page-salesorder";
		$data['title'] = 'Sales Order';
		$this->load->view('layout-so',$data);
	}
}
