<?php

class about extends CI_Controller{
    public function index(){
        $data['title'] = 'About Page';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}