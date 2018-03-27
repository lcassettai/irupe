<?php
defined('BASEPATH') or exit('No se permite el ingreso directo');

class DondeVoto extends CI_controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('donde_voto/index');
        $this->load->view('templates/footer');
    }
}
