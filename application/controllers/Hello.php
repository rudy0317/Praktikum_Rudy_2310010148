<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index()
    {
        echo "Hello Perkenalkan Saya Rudy ";
    }

    public function hello_2310010148()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->hello_2310010148();
        echo $data;
    }
    
    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');
        $data['mvc'] = $this->hello_model->hello_mvc();
        $this->load->view('hello_view', $data);
    }
}