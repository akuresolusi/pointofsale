<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

		
	public function add_barang(){
		$data =  array( 'kode' => $this->input->post('kode'),
						'nama' => $this->input->post('nama'),
						'idkategori' => $this->input->post('kategori'),
						'idsatuan' => $this->input->post('satuan'),
						'idwarna' => $this->input->post('warna'),
						'kontrolstok' => $this->input->post('kontrol'),
						'ukuran' => $this->input->post('ukuran'),
						'harga1' => $this->input->post('harga1'),
						'harga2' => $this->input->post('harga2'),
						'harga3' => $this->input->post('harga3'),
						'harga4' => $this->input->post('harga4'),
						'harga5' => $this->input->post('harga5'),
						'status' => "Aktif"
					);
		$this->db->insert('barang',$data);
		return;
	}

	public function update_barang(){
		$data =  array( 'nama' => $this->input->post('nama'),
						'idkategori' => $this->input->post('kategori'),
						'idsatuan' => $this->input->post('satuan'),
						'idwarna' => $this->input->post('warna'),
						'ukuran' => $this->input->post('ukuran'),
						'harga1' => $this->input->post('harga1'),
						'harga2' => $this->input->post('harga2'),
						'harga3' => $this->input->post('harga3'),
						'harga4' => $this->input->post('harga4'),
						'harga5' => $this->input->post('harga5')
					);
		$this->db->where('id',$this->input->post_get('id'));
		$this->db->update('barang',$data);
		return;
	}

	public function detail_barang($id){
		$this->db->where('id',$id);
		return $this->db->get('barang')->row_array();
	}

	public function list_barang(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('kode',$like);
			$this->db->or_like('ukuran',$like);
			$this->db->or_like('status',$like);
		}

		$this->db->order_by('id','DESC');
		$this->db->limit(50);
		return $this->db->get('barang')->result_array();
	}

	public function on_barang($id){
		$data =  array( 'status' => "Aktif");
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function off_barang($id){
		$data =  array( 'status' => "Tidak Aktif");
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function delete_barang($id){
		$this->db->where('id',$id);
		$this->db->delete('barang');
		return;
	}

	public function add_foto($idbarang){
		$data = array('idbarang'=> $idbarang,
					  'file'=>$this->upload->data('file_name')
					);
		$this->db->insert('foto',$data);
		return;
	}

	public function list_foto($id){
		$this->db->where('idbarang',$id);
		return $this->db->get('foto')->result_array();
	}

	public function hapus_foto($id){
		$this->db->where('id',$id);
		$this->db->delete('foto');
		return;
	}

	public function detail_foto($id){
		$this->db->where('id',$id);
		return $this->db->get('foto')->row_array();
	}

	public function jlh_foto($idbarang){
		$this->db->where('idbarang',$idbarang);
		return $this->db->get('foto')->num_rows();
	}

	public function update_stok($id,$stok){
		$data = array('stok' => $stok);
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

	public function update_modal($id,$modal){
		$data = array('modal' => $modal);
		$this->db->where('id',$id);
		$this->db->update('barang',$data);
		return;
	}

}