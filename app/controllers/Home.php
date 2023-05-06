<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BASE_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
    {
        $this->data['pg_title'] = "Home";
        $this->data['page_content'] = 'home/index';
        $this->load->view('layout/template', $this->data);
    }

    public function userPhone()
    {
        $this->load->view('home/userPhone');
    }

    public function spinner()
    {
        $this->load->view('home/spinner');
    }
}
