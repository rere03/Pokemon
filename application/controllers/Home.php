<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pokemon_model');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('awal');
	}
	public function mylist()
	{
		$this->load->model('pokemon_model');
		$data['pokemon_array'] = $this->pokemon_model->getPokemonQueryArray();
		$this->load->view('mylist',$data);
	}
	public function create( ){
		$this->load->helper('url','form');
		$this->load->model('pokemon_model');
		
			$this->pokemon_model->insertPokemon();
			$this->load->view('awal');
				
		
	}
	
	public function delete($id){
		$this->pokemon_model->delete($id);
		$this->load->view('mylist');
	}
	public function charmander()
	{
		$this->load->view('charmander');
	}
	public function ulat()
	{
		$this->load->view('ulat');
	}
	public function pidgey()
	{
		$this->load->view('pidgey');
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}
	
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */