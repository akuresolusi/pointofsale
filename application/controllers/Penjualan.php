<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->model('penjualan_model');
		$this->load->model('master_model');
	}

	public function index(){
		$data['list_penjualan'] = $this->penjualan_model->list_penjualan();
		$data['isi'] = "penjualan/page-penjualan";
		$data['title'] = 'Data Penjualan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['faktur'] = @$this->penjualan_model->faktur_terakhir() + 1;
		$data['list_syarat_bayar'] = $this->master_model->list_syaratbayar();
		$data['isi'] =  "penjualan/tambah-penjualan";
		$data['title'] = 'Tambah Data Penjualan';
		$this->load->view('layout',$data);	
	}

	public function cari_pelanggan(){
			$pelanggan = $this->penjualan_model->cari_pelanggan();
			$json["datanya"] = "";
			if(count($pelanggan) >= 1){
				$i=0;
				foreach($pelanggan as $value){
					$i++;
					$kategori = $this->master_model->detail_kategori_pelanggan($value['idkategori']);
					$json["datanya"] .= "
						<tr>
			  				<td>".$i."</td>
			  				<td>".$value['nama']."</td>
			  				<td>".$value['jeniskelamin']."</td>
			  				<td>".$value['alamat']."</td>
			  				<td>".$value['nohp']."</td>
			  				<td>".$kategori['kategori']."</td>
			  				<td><button class='btn btn-primary btn-xs pilih-pelanggan' data-dismiss='modal'
			  				value_id='".$value['id']."'
			  				value_nama='".$value['nama']."'
			  				value_alamat='".$value['alamat']."'
			  				value_kategori='".$kategori['kategori']."'
			  				value_kategoriharga='".$kategori['harga']."'
			  				>Pilih</button></td>
			  			</tr>";
				}
			}else{
				$json["datanya"] = "";
			}
			echo json_encode($json);
		
	}

	public function ambil_harga(){
		$harga = $this->input->post_get('harga');
		$barang = $this->barang_model->detail_barang($this->input->post_get('id'));
		if($harga == 1){
			echo $barang['harga1'];
		}else if($harga == 2){
			echo $barang['harga2'];
		}else if($harga == 3){
			echo $barang['harga3'];
		}else if($harga == 4){
			echo $barang['harga4'];
		}else if($harga == 5){
			echo $barang['harga5'];
		}
	}

	public function input_item(){
		$this->penjualan_model->input_item();
	}

	public function list_items(){
		$data  = $this->penjualan_model->list_items($this->input->post_get('faktur'));
		foreach ($data as $value) {
			$barang = $this->barang_model->detail_barang($value['idbarang']);
			$subtotal = $value['harga'] * $value['qty'];
			echo "<tr>
	  				<td>".$barang['kode']."</td>
	  				<td style='padding-left: 0px;'>".$barang['nama']."</td>
	  				<td>".$value['qty']."</td>
	  				<td>Rp ".$value['harga']."</td>
	  				<td style='text-align: right;'>Rp ".$subtotal."</td>
	  				<td>
	  					<span class='fa fa-remove hapus-item' id-item='".$value['id']."' style='font-size: 20px; color: red;'></span>
	  				</td>
	  			</tr>";
		}
	}

	public function hapus_items(){
		$this->penjualan_model->hapus_item($this->input->post('id'));
	}

	public function get_total_harga(){
		$faktur = $this->input->post_get('faktur');
		$items = $this->penjualan_model->list_items($faktur);
		$total = 0;
		foreach ($items as $value) {
			$total = ( $value['qty'] * $value['harga'] ) + $total;
		}
		echo $total;
	}

	public function selesai(){
		//Membuat tanggal tempo
		$syaratbayar = $this->master_model->detail_syaratbayar($this->input->post('syaratbayar'));
		$tanggal=strtotime(date($this->input->post('tanggal')));
		$jumlah=$syaratbayar['tempo'];
		$new = 86400 * $jumlah;
		$hasil = $tanggal + $new;
		$tempo = date('Y-m-d', $hasil);

		$this->penjualan_model->selesai($tempo);
		redirect('penjualan');
	}

	public function hapus_penjualan(){
		$this->penjualan_model->hapus_penjualan($this->input->get('faktur'));
		$this->penjualan_model->hapus_penjualan_items($this->input->get('faktur'));
		redirect('penjualan');	
	}


}
