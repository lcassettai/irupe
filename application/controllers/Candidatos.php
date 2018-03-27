<?php
defined('BASEPATH') OR exit('No script allowed');

class Candidatos extends CI_Controller{

	function index(){
		$this->load->view('templates/header');
		$this->load->view('candidatos/index');
		$this->load->view('templates/footer');
	}

}

?>
