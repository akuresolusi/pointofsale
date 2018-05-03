<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('master_model');
		$this->load->model('barang_model');
	}

	public function index(){
		$data['list'] = $this->barang_model->list_barang();
		$data['isi'] = "barang/page-barang";
		$data['title'] = 'Data Barang';
		$this->load->view('layout',$data);
	}
	public function lihatdata(){
		$data['isi'] = "barang/view-barang";
		$data['title'] = 'Lihat Data Barang';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_kategori'] = $this->master_model->list_kategori();
		$data['list_satuan'] = $this->master_model->list_satuan();
		$data['list_warna'] = $this->master_model->list_warna();
		$data['isi'] =  "barang/tambah-barang";
		$data['title'] = 'Tambah Data Barang';
		$this->load->view('layout',$data);
	}

	public function tambah2(){
		$data['list_kategori'] = $this->master_model->list_kategori();
		$data['list_satuan'] = $this->master_model->list_satuan();
		$data['list_warna'] = $this->master_model->list_warna();
		$this->load->view('barang/tambah2-barang',$data);
	}

	public function proses_tambah(){
		$this->barang_model->add_barang();
		redirect('barang');	
	}

	public function proses_tambah2(){
		$this->barang_model->add_barang();
		echo "Data Barang Berhasil Ditambahkan
		<meta http-equiv='refresh' content=4;URL='".base_url('barang/tambah2')."' /> 
		";
	}

	public function edit(){
		$data['detail'] = $this->barang_model->detail_barang($this->input->get('id'));
		$data['list_kategori'] = $this->master_model->list_kategori();
		$data['list_satuan'] = $this->master_model->list_satuan();
		$data['list_warna'] = $this->master_model->list_warna();
		$data['isi'] =  "barang/update-barang";
		$data['title'] = 'Perbarui Data Barang';
		$this->load->view('layout',$data);
	}

	public function proses_edit(){
		$this->barang_model->update_barang();
		redirect('barang');
	}

	public function on_barang(){
		$this->barang_model->on_barang($this->input->get('id'));
		redirect('barang');
	}

	public function off_barang(){
		$this->barang_model->off_barang($this->input->get('id'));
		redirect('barang');
	}

	public function hapus_barang(){
		$this->barang_model->delete_barang($this->input->get('id'));
		redirect('barang');
	}

	public function foto_barang(){
		$data['list_foto'] = $this->barang_model->list_foto($this->input->get('id'));
		$data['detail'] = $this->barang_model->detail_barang($this->input->get('id'));
		$data['isi'] =  "barang/foto-barang";
		$data['title'] = 'Upload Foto Barang';
		$this->load->view('layout',$data);
	}

	public function upload_foto(){
		$id = $this->input->get('id');
		
		$config['upload_path']          = 'assets/foto/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 5000;
    	$new_name = $id."-".$_FILES["foto"]['name'];
		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('foto')){
        	redirect('barang/foto_barang?id='.$id);
        }else{
        	$this->barang_model->add_foto($id);
        	redirect('barang/foto_barang?id='.$id);
        }
	}

	public function hapus_foto(){
		$idfoto = $this->input->get('idfoto');
		$id = $this->input->get('id'); 
		
		$foto = $this->barang_model->detail_foto($idfoto);
		echo $file = './assets/foto/'.$foto['file'];
		@unlink($file);
		
		$this->barang_model->hapus_foto($idfoto);

		redirect('barang/foto_barang?id='.$id);
	}


	public function cari_barang(){
		if($this->input->is_ajax_request()){
			
			$barang = $this->barang_model->list_barang();

			if( count($barang) >= 1){
			
				$json["status"] = 1;
				$json["datanya"] = "<ul id='daftar-autocomplete'>";
				foreach($barang as $row){
					$stok = $row['stok'];
					if($stok == ""){
						$stok = "0";
					}
					$json["datanya"] .= "
						<li>
							<span id='id' style='display:none;'>".$row['id']."</span>
							<span id='kode' style='display:none;'>".$row['kode']."</span>
							<span id='barang'>".$row['nama']."</span></br>
							<span>Stok :</span>
							<span><b>".$stok."</b></span><br>
							<span id='hargamodal' style='display:none;'>".$row['harga1']."</span>
						</li>
					";
				}
				$json["datanya"] .= "</ul>";

			}else{
			
				$json["status"] = 0;
				$json["datanya"] = "<ul id='daftar-autocomplete-supplier'>";
				$json["datanya"] .= "<li data-toggle='modal' data-target='#modal-tambah-barang'>
										<span> + Data tidak ditemukan, Klik Untuk Tambah Baru +</span>
									</li>";
				$json["datanya"] .= "</ul>";
			
			}
			echo json_encode($json);
		}
	}

}
