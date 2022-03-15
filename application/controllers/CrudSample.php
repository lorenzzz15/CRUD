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
        redirect("crudsample");
    }
    public function update($id)
    {
        $this->crud_model->updateData($id);
        redirect('crudsample');
    }
    public function edit($id)
    {
        $data['title'] = 'CRUD Edit';
        $data['row'] = $this->crud_model->getData($id);
        $this->load->view('templates/header');
        $this->load->view('crudsample/crudedit', $data);
        $this->load->view('templates/footer');
    }
    public function delete($id)
    {
        $this->crud_model->deleteData($id);
        redirect('crudsample');
    }
}
