<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disciplina extends CI_Controller {


	public function cadastro(){
		$this->load->view('CadDisciplina');
	}
	
	public function inserir(){
        /*
		$this->load->model('NomeModel','nome');
		$this->nome->init("Junio");
		//ORM - Object-Relational Mapping
		$b = $this->db->insert("Nomes",$this->nome->toArray());
        */
        $nm = $this->input->post('nome');
        $ds = $this->input->post('desc');
        $this->load->model('DisciplinaModel','disc');
        $this->disc->init($nm,$ds);
        $b = $this->db->insert('disciplina',$this->disc->toArray());
		$this->load->view('CadDiscOk',$this->disc->toArray());
	}
	
	public function perfil($id){
	    $q = $this->db->query("SELECT * FROM `disciplina` WHERE `id`=$id");
	    $dis = $q->result('disciplina');
        $data["nome"] = $dis[0]->nome;
        $data["desc"] = $dis[0]->desc;
        $this->load->view('Perfil',$data);
	}
	
}
