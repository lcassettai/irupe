<?php
defined('BASEPATH') or exit('No script allowed');

class Candidatos extends CI_Controller
{
    public function index()
    {
        $head_data = array(
          'title' => 'Candidatos'
        );

        $respuesta_rest = $this->rest('votos/listas');

        $listas = array('listas' =>json_decode($respuesta_rest));

        $this->load->view('templates/header', $head_data);
        $this->load->view('candidatos/index', $listas);
        $this->load->view('templates/footer');
    }

    public function rest($params = null)
    {
        $this->load->library('guzzle');

        $rest_client = $this->config->item('rest_client');

        # guzzle client define
        $client     = new GuzzleHttp\Client();

        #This url define speific Target for guzzle
        $url        = $rest_client['irupe']['url'].$params;

        #guzzle
        try {
            # guzzle post request example with form parameter
            $response = $client->get($url, [
                  'auth' => [
                      $rest_client['irupe']['user'],
                      $rest_client['irupe']['pass']
                  ]
              ]);
            $responseBodyAsString = $response->getBody()->getContents();
            
            return $responseBodyAsString;
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            #guzzle repose for future use
            $response = $e->getResponse();
        }
    }
}
