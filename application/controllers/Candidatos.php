<?php
defined('BASEPATH') OR exit('No script allowed');

class Candidatos extends CI_Controller{

	function index(){
		$head_data = array(
            'title' => 'Candidatos'
            );

        $listas = file_get_contents('http://admin:admin@10.10.10.19:2022/irupe/rest/votos/listas');
        $listas = array('listas' =>json_decode($listas));


		$this->load->view('templates/header',$head_data);
		$this->load->view('candidatos/index',$listas);
		$this->load->view('templates/footer');
	}

}

?>
