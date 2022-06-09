<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 *

 */
class Admin_vision_model extends CI_Model
{
    var $table = "vision";
    var $order_column = array('id', 'name', 'file',);

    function make_query($group)
    {
        $this->db->from($this->table);
        $this->db->where('group', $group);

        if (isset($_POST["order"])) {
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('', '');
        }
    }

    function make_datatables($group)
    {
        $this->make_query($group);
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function get_filtered_data($group)
    {
        $this->make_query($group);
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
    public function del_admin_vision($id)
    {
        $rs = $this->db
            ->where('id', $id)
            ->delete('vision');
        return $rs;
    }


    public function save_admin_vision($data, $group)
    {

        $rs = $this->db
            ->set("id", $data["id"])->set("name", $data["name"])
            ->set("file", $data["file"])
            ->set("group", $group)
            ->set("last_update", date("Y-m-dm H:m:s"))
            ->set("user_id", $this->session->userdata('id'))
            ->insert('vision');

        return $this->db->insert_id();
    }

    public function update_admin_vision($data, $group)
    {
        $rs = $this->db
            ->set("id", $data["id"])
            ->set("name", $data["name"])
            ->set("file", $data["file"])
            ->set("group", $group)
            ->set("last_update", date("Y-m-d H:m:s"))
            ->set("user_id", $this->session->userdata('id'))
            ->where("id", $data["id"])
            ->update('vision');

        return $rs;
    }

    public function get_admin_vision($id)
    {
        $rs = $this->db
            ->where('id', $id)
            ->get("vision")
            ->row();
        return $rs;
    }
}
