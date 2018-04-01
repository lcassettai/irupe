<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Contacto extends CI_Controller{
		public function index(){
			$head_data = array('title' => 'Contacto');
			$this->load->helper('form');
   		$this->load->library('form_validation');

			$this->load->view('templates/header',$head_data);
			$this->load->view('contacto/index');
			$this->load->view('templates/footer');
		}

		public function enviar(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nombre', 'nombre', 'required');

			var_dump($this->form_validation->run());

			$datos_recibidos = array(
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'email' => $this->input->post('email'),
				'mensaje' => $this->input->post('mensaje'),
			);


			var_dump($datos_recibidos);
		}
	}
?>
