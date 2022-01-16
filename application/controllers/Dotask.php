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

    public function add()
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
            $this->load->view('dotask/add', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $this->Dotask_model->add();
            $this->session->set_flashdata('dotask', 'Added');
            redirect('Dotask');
        }
    }

    public function edit($id)
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
            // $data['dotask'] = $this->Dotask_model->getTodo();
            $data['dotaskid'] = $this->Dotask_model->getTodoById($id);
            $this->load->view('layout/header', $data);
            $this->load->view('layout/navbar', $data);
            $this->load->view('dotask/edit', $data);
            $this->load->view('layout/footer', $data);
        } else {
            $this->Dotask_model->edit($id);
            $this->session->set_flashdata('dotask', 'Changed');
            redirect('Dotask');
        }
    }

    public function delete($id)
    {
        $this->Dotask_model->delete($id);
        $this->session->set_flashdata('dotask', 'Deleted');
        redirect('Dotask');
    }
}
