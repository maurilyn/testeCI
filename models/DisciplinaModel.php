<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DisciplinaModel extends CI_Model {
    private $nome, $desc, $id;
    
    public function init($nome, $desc){
        $this->nome = $nome;
        $this->desc = $desc;
    }
    
    public function mostrar(){
        echo $this->nome;
        echo $this->desc;
    }
    
    public function toArray(){
        return get_object_vars($this);
        
        /* Maneira manual de passar para array
        $data = array();
        $data["nome"] = $this->nome;
        $data["desc"] = $this->desc;
        return $data;
        */
    }
}

?>