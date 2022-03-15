<?php

class Crud_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }
    public function createData()
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'birthdate' => $this->input->post('birthdate'),
        );
        $this->db->insert('tbl_name', $data);
    }
    function getData($id)
    {
        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' . $id);
        return $query->row();
    }
    function updateData($id)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'birthdate' => $this->input->post('birthdate'),

        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }
    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
    }
}
