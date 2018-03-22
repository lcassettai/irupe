<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Contacto extends CI_Controller{
		public function index(){
			$this->load->helper('form');
   			$this->load->library('form_validation');

			$this->load->view('templates/header');
			$this->load->view('contacto/index');
			$this->load->view('templates/footer');
		}
	}
?>
