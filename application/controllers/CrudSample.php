<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudSample extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'CRUD Operation';
        $data['crudsample'] = $this->crud_model->getAllData();

        $this->load->view('templates/header');
        $this->load->view('crudsample/index', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->crud_model->createData();
        redirect("CrudSample");
    }
}
