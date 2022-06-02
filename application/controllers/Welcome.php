<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public $group;

    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('default_layout');
        $this->db = $this->load->database('default', true);
        $this->load->model('Basic_model', 'crud');
        $this->load->model('Dashboard_model', 'dash');
        $this->group = $this->config->item('group_id');
    }

    public function index()
    {
        //$data['all_employee'] = $this->db->from('employee')->where('active',1)->count_all_results();
        
        $data['news1'] = $rs = $this->dash->get_news(1,$this->group);
        $data['news2'] = $rs = $this->dash->get_news(2,$this->group);
        $data['news3'] = $rs = $this->dash->get_news(3,$this->group);
        $boss = $this->crud->get_boss();
        $this->session->set_userdata($boss);
        $this->layout->view('dashboard/index_view', $data);
    }
    public function test(){
        $data[]='';
        $this->layout->view('test/index_view', $data);
    }
    public function get_ita(){
        $year=$this->input->post('year');
        $rs = $this->dash->get_ita_ebit($year);


        $arr_result = array();
        foreach($rs as $r)
        {
            $obj = new stdClass();
            $obj->id        = $r->id;
            $obj->name      = $r->name;
            $obj->ita_index = $r->ita_index;
            $obj->n_year    = $r->n_year;
            $obj->ita_items    = $this->dash->get_ita_items($r->id);
            $arr_result[] = $obj;
        }
        $json = $rs ? '{"success": "true", "rows": ' . json_encode($arr_result) . '}' : '{"success": false, "msg": "ไม่พบข้อมูล"}';
        render_json($json);
    }
    public function save_n_year(){
        $n_year=$this->input->post('n_year');
        $this->session->set_userdata('n_year',$n_year);
        $json ='{"success": "true"}';
        render_json($json);
    }
}
