<?php

class Dotask extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dotask_model');
    }

    public function index()
    {
        $data['title'] = "CACING - Baca Catat Ingat";
        $data['dotask'] = $this->Dotask_model->getTodo();
        // $data['dotasid'] = $this->Dotask_model->getTodoById($id);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('dotask/index', $data);
        $this->load->view('layout/footer', $data);
    }
    public function edit($id)
    {
        $data['title'] = "CACING - Baca Catat Ingat";
        // $data['dotask'] = $this->Dotask_model->getTodo();
        $data['dotaskid'] = $this->Dotask_model->getTodoById($id);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/navbar', $data);
        $this->load->view('dotask/edit', $data);
        $this->load->view('layout/footer', $data);
    }
}
