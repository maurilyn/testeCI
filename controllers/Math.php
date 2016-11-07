<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Math extends CI_Controller {


	public function form(){
		$this->load->view('form');
	}
	
	public function somar(){
		$n1 = $this->input->post('n1');
		$n2 = $this->input->post('n2');
		$soma = $n1 + $n2;
		$data["n1"] = $n1;
		$data["n2"] = $n2;
		$data["soma"] = $soma;
		$this->load->view('sucesso.php',$data);
	}
}
