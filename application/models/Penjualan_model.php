<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function cari_pelanggan(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('alamat',$like);
			$this->db->or_like('nohp',$like);
			$this->db->or_like('email',$like);
			$this->db->or_like('jeniskelamin',$like);
		}
		$this->db->where('status', 1);
		$this->db->order_by('id','ASC');
		$this->db->limit(5);
		return $this->db->get('pelanggan')->result_array();	
	}

	public function faktur_terakhir(){
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		return $this->db->get('penjualan')->row()->id;
	}

	public function input_item(){
		$data = array('faktur'=> $this->input->post('faktur'),
					  'idbarang'=> $this->input->post('idbarang'),
					  'qty'=> $this->input->post('qty'),
					  'modal'=> $this->input->post('modal'),
					  'harga'=> $this->input->post('harga')
				);
		$this->db->insert('penjualan_items',$data);
		return;
	}

	public function list_items($faktur){
		$this->db->where('faktur', $faktur);
		$this->db->order_by('id','DESC');
		return $this->db->get('penjualan_items')->result_array();
	}

	public function hapus_item($id){
		$this->db->where('id', $id);
		$this->db->delete('penjualan_items');
		return;
	}

	
}