<?php
defined('BASEPATH') OR exit('No script allowed');

class Candidatos extends CI_Controller{

	function index(){
		$head_data = array('title' => 'Candidatos');

		$this->load->view('templates/header',$head_data);
		$this->load->view('candidatos/index');
		$this->load->view('templates/footer');
	}

}

?>
