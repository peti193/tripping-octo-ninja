<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class User_editor extends CI_Controller {

    function __construct() {
        
        parent::__construct();

    }

    public function index() {

        if ($this->session->userdata('logged_in')) {
            $data['userdata'] = $this->session->userdata('logged_in');
            //echo(json_encode($data['userdata']));
            $data['content'] = 'admin/user_editor';
            $this->load->view('admin/layout', $data);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
    public function getCurrentUser() {

            $data['userdata'] = $this->session->userdata('logged_in');
            foreach ($data['userdata'] as $value) {
                $nickname = $value;
            }
            echo $nickname;

    }
    public function getUsers() {

        if ($this->session->userdata('logged_in')) {
            $this->load->model("User");
            echo json_encode($this->User->getUsers());
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function addUsers() {
        $this->load->model("User");
        echo json_encode($this->User->addUser($this->input->post()));
    }

    public function editUsers() {
        $this->load->model("User");
        echo json_encode($this->User->editUser($this->input->post()));
    }

    public function delUsers() {
        $this->load->model("User");
        echo json_encode($this->User->delUser($this->input->post()));
    }

}

?>
