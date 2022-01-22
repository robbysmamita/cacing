<?php


class Dotoday extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dotoday_model');
    }

    public function index()
    {
        $data['gettoday'] = $this->Dotoday_model->getAlldotoday();
        var_dump($data['gettoday']);
        die;
    }

    public function tambah()
    {
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
