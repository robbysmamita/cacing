<?php

class Dotask extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "CACING - Baca Catat Ingat";
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('dotask/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
