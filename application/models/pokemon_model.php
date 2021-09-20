<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pokemon_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function getPokemonQueryArray(){
		$query = $this->db->query("select id, nama, tipe from mylist");
		return $query->result();
	}

	public function getPokemon($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mylist',1);
		return $query->result();
	}
	public function insertPokemon()
	{
		$object = array
		('nama'=>$this->input->post('nama'),'tipe'=>$this->input->post('tipe'));
		$this->db->insert('mylist',$object);
	}

	public function updateById($id){
		$data = array
		('nama'=>$this->input->post('nama'),'tanggal'=>$this->input->post('tanggal'),'alamat'=>$this->input->post('alamat'),'no_tlp'=>$this->input->post('no_tlp'),'foto' => $this->upload->data('file_name'),);
		$this->db->where('id', $id);
		$this->db->update('mylist',$data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('mylist');
	}

}

/* End of file member_model.php */
/* Location: ./application/models/member_model.php */