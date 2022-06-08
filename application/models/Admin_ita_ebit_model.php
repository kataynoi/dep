<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 *

 */
class Admin_ita_ebit_model extends CI_Model
{
    var $table = "ita_ebit";
    var $order_column = array('id', 'name', 'ita_index', 'n_year',);

    function make_query($id, $group)
    {
        $this->db->from($this->table);
        $this->db->where('group', $group);
        if (isset($_POST["search"]["value"])) {
            $this->db->group_start();
            $this->db->like("name", $_POST["search"]["value"]);
            $this->db->group_end();
        }

        if (isset($_POST["order"])) {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('', '');
        }
    }

    function make_datatables($id = '', $group)
    {
        $n_year = $this->session->userdata('n_year');
        $this->make_query($id = '', $group);
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->where('n_year', $n_year)->get();
        return $query->result();
    }
    function get_filtered_data($group)
    {
        $this->make_query('', $group);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_all_data($group)
    {
        $this->db->select("*");
        $this->db->where('group', $group);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    /* End Datatable*/
    public function del_admin_ita_ebit($id)
    {
        $rs = $this->db
            ->where('id', $id)
            ->delete('ita_ebit');
        return $rs;
    }

    public function get_ita_index()
    {
        $rs = $this->db
            ->get("ita_index")
            ->result();
        return $rs;
    }
    public function get_ita_index_name($id)
    {
        $rs = $this->db
            ->where("id", $id)
            ->get("ita_index")
            ->row();
        return $rs ? $rs->name : "";
    }

    public function save_admin_ita_ebit($data, $group)
    {
        $rs = $this->db
            ->set("id", $data["id"])
            ->set("name", $data["name"])
            ->set("ita_index", $data["ita_index"])
            ->set("group", $group)
            ->set("n_year", $data["n_year"])
            ->insert('ita_ebit');
        return $this->db->insert_id();
    }

    public function update_admin_ita_ebit($data)
    {
        $rs = $this->db
            ->set("id", $data["id"])->set("name", $data["name"])->set("ita_index", $data["ita_index"])->set("n_year", $data["n_year"])->where("id", $data["id"])
            ->update('ita_ebit');
        return $rs;
    }
    public function get_admin_ita_ebit($id)
    {
        $rs = $this->db
            ->where('id', $id)
            ->get("ita_ebit")
            ->row();
        return $rs;
    }
}
