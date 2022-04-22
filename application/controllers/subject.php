<?php

class subject extends CI_Controller{
    public function index(){
        $data['title'] = 'Subject Page';
        $this->load->view('templates/header', $data);
        $this->load->view('subject/index');
        $this->load->view('templates/footer');
        
    }
}