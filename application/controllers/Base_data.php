<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('default_layout');
        $this->db = $this->load->database('default', true);
        $this->load->model('Base_data_model', 'crud');
    }

    public function index()
    {
        $this->layout->view('base_data/index');
    }
    public function boss()
    {
        $data['result'] = $rs = $this->crud->get_boss();
        $this->layout->view('base_data/boss',$data);
    }
    public function boss_list()
    {
        $data['result'] = $rs = $this->crud->get_boss_list();
        $this->layout->view('base_data/boss_list',$data);
    }public function vision()
    {
        $data['result'] = $rs = $this->crud->get_vision();
        $this->layout->view('base_data/vision',$data);
    }
    public function policy()
    {
        $data['result'] = $rs = $this->crud->get_policy();
        $this->layout->view('base_data/policy',$data);
    }
    public function structure()
    {
        $data['result'] = $rs = $this->crud->get_structure();
        $this->layout->view('base_data/structure',$data);
    }
    public function authority()
    {
        $data['result'] = $rs = $this->crud->get_authority();
        $this->layout->view('base_data/authority',$data);
    }
}
