<?php
defined('BASEPATH') or exit('No se permite el ingreso directo');

class DondeVoto extends CI_controller
{
    public function index()
    {
        $head_data = array('title' => 'Donde Voto?');

        $this->load->view('templates/header',$head_data);
        $this->load->view('donde_voto/index');
        $this->load->view('templates/footer');
    }
}
