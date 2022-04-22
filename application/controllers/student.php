<?php

class student extends CI_Controller{
    public function index(){
        $data['title'] = 'Student Page';
        $this->load->view('templates/header', $data);
        $this->load->view('student/index');
        $this->load->view('templates/footer');
    }
}