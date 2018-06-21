<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['isi'] = "laporan/page-laporan";
		$data['title'] = 'Data Laporan';
		$this->load->view('layout',$data);
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
	public function labarugi(){
		$data['isi'] =  "laporan/laporan-labarugi";
		$data['title'] = 'Laporan Laba Rugi';
		$this->load->view('layout',$data);
	}
	public function stok(){
		$data['isi'] =  "laporan/laporan-stok";
		$data['title'] = 'Laporan Stok';
		$this->load->view('layout',$data);
	}
	public function opnamestok(){
		$data['isi'] =  "laporan/laporan-opnamestok";
		$data['title'] = 'Laporan OpStok';
		$this->load->view('layout',$data);
	}
	public function hutang(){
		$data['isi'] =  "laporan/laporan-hutang";
		$data['title'] = 'Laporan Hutang';
		$this->load->view('layout',$data);
	}
	public function piutang(){
		$data['isi'] =  "laporan/laporan-piutang";
		$data['title'] = 'Laporan Piutang';
		$this->load->view('layout',$data);
	}
	public function returbeli(){
		$data['isi'] =  "laporan/laporan-returpembelian";
		$data['title'] = 'Laporan Retur Pembelian';
		$this->load->view('layout',$data);
	}
	public function returjual(){
		$data['isi'] =  "laporan/laporan-returpenjualan";
		$data['title'] = 'Laporan Retur Penjualan';
		$this->load->view('layout',$data);
	}
	public function lunasbeli(){
		$data['isi'] =  "laporan/laporan-lunasbeli";
		$data['title'] = 'Retur Pelunasan Pembelian';
		$this->load->view('layout',$data);
	}
	public function lunasjual(){
		$data['isi'] =  "laporan/laporan-lunasjual";
		$data['title'] = 'Retur Pelunasan Penjualan';
		$this->load->view('layout',$data);
	}
}
