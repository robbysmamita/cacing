<?php


class Dotoday extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dotoday_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['gettoday'] = $this->Dotoday_model->getAlldotoday();
        var_dump($data['gettoday']);
        die;
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'name_task',
            'Name task',
            'required'
        );
        $this->form_validation->set_rules(
            'content',
            'Content',
            'required'
        );
        $this->form_validation->set_rules(
            'start_date',
            'Start Date',
            'required'
        );
        $this->form_validation->set_rules(
            'start_time',
            'Start Time',
            'required'
        );
        $this->form_validation->set_rules(
            'due_date',
            'Due Date',
            'required'
        );
        $this->form_validation->set_rules(
            'due_time',
            'Due Time',
            'required'
        );
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required'
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "CACING - Baca Catat Ingat";
            $data['dotask'] = $this->Dotask_model->getTodo();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar', $data);
            $this->load->view('dotoday/add', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $this->Dotask_model->add();
            $this->session->set_flashdata('dotask', 'Added');
            redirect('Dotask');
        }
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
