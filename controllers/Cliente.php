<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {


	public function cadastro(){
		$this->load->view('CadCli');
	}
	
	public function inserir(){
		$data["nome"] = $this->input->post('nome');
		$data["idade"] = $this->input->post('idade');
		$data["cpf"] = $this->input->post('cpf');
		$this->db->insert('cliente',$data);
		$this->load->view('CadCliok',$data);
	}
}
