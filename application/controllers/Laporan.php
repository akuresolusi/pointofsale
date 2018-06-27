<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	}

	public function today(){
		$data['isi'] =  "laporan/laporan-today";
		$data['title'] = 'Pendapatan Hari Ini';
		$this->load->view('layout',$data);
	}
	public function pembelian(){
		$data['isi'] =  "laporan/laporan-pembelian";
		$data['title'] = 'Laporan Pembelian';
		$this->load->view('layout',$data);
	}
	public function penjualan(){
		$data['isi'] =  "laporan/laporan-penjualan";
		$data['title'] = 'Laporan Penjualan';
		$this->load->view('layout',$data);
	}
	public function produk(){
		$data['isi'] =  "laporan/laporan-produk";
		$data['title'] = 'Laporan Produk';
		$this->load->view('layout',$data);
	}
	public function etc(){
		$data['isi'] =  "laporan/laporan-etc";
		$data['title'] = 'Laporan Lainnya';
		$this->load->view('layout',$data);
	}
}
