<?php
  Class Model_CRUD extends CI_Model {
    public function Create() {
      $Values = array(
        'Employee' => $this->input-post('Employee'),
        'Email'    => $this->input->post('Email'),
        'Number'   => $this->input->post('Number'),
      );

      $this->db->insert('Employees');
    }

    public function Read() {
      $Query = $this->db->get('Employees');
      return $Query->result();
    }

    public function Update() {
      $Values = array(
        'Employee' => $this->input-post('Employee'),
        'Email'    => $this->input->post('Email'),
        'Number'   => $this->input->post('Number'),
      );

      $this->db->where('Employee', $this->uri->segment(3))
               ->update('Employees', $Values);
    }

    public function Delete() {
      $this->db->where('Employee', $this->uri->segment(3))
               ->delete('Employees');
    }
  }
