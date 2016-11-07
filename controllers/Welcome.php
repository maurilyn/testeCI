<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//O SEGUNDO PARAMETRO REPRESENTA O NOME DO
		//OBJETO QUE POSSUI REFERENCIA DE MEMORIA
		//DO TIPO NomeModel, ou seja, O SEGUNDO
		//EH O NOME DO OBJETO DO TIPO NomeModel.
		$this->load->model('NomeModel','nome');
        $this->nome->init("Teste!");
		$this->nome->mostrar();
		$this->load->view('welcome_message');
	}

	public function jureg(){
		$this->load->model('NomeModel','nome');
		$this->nome->init("Junio");
		//ORM - Object-Relational Mapping
		$b = $this->db->insert("Nomes",$this->nome->toArray());
		echo "Acabou! 1-Foi, 0-Não foi";
		echo "<br>";
		echo $b;
		//echo "nosa jureg";
	}
	
	public function ola(){
		$this->load->view('ola');
	}
	
	public function form(){
		$this->load->view('form');
	}

	public function wform(){
		$this->load->view('wform');
	}
	
	public function postar(){
		//Não utilizar variavel global!!
		//$nome = $_POST['nome'];
		$nome = $this->input->post('nome');
		echo "Nosa " . $nome;
	}
	
	public function somar(){
		$n1 = $this->input->post('n1');
		$n2 = $this->input->post('n2');
		$soma = $n1 + $n2;
		echo "A soma é: " . $soma;
	}
	
	public function salvar(){
		$nome = $this->input->post('nome');
		$dado["nome"] = $nome;
		$this->db->insert('Nomes',$dado);
		echo "Cabô";
	}
	
	public function outro($nome){
		$nome = $this->input->post('nome');
		$this->session->set_userdata("sessao",$data)
	}
}
