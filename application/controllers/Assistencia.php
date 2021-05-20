<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assistencia extends CI_Controller {

    public function index() {
        $this->load->view('assistencia');       
    }

    public function socorro_mecanico_eletrico() {
        $this->load->view('assistencia-detalhes/socorro-mecanico-eletrico');
    }

}