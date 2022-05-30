<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 *

 */
class Admin_link_model extends CI_Model
{
    var $table = "link";
    var $order_column = Array('id','id','name','link',);

    function make_query()
    {
        $this->db->from($this->table);
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

    function make_datatables()
    {
        $this->make_query();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function get_filtered_data()
    {
        $this->make_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function get_all_data()
    {
        $this->db->select("*");
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    /* End Datatable*/
    public function del_admin_link($id)
        {
        $rs = $this->db
            ->where('id', $id)
            ->delete('link');
        return $rs;
        }

        

    public function save_admin_link($data)
            {

                $rs = $this->db
                    ->set("id", $data["id"])->set("name", $data["name"])->set("link", $data["link"])
                    ->insert('link');

                return $this->db->insert_id();

            }
    public function update_admin_link($data)
            {
                $rs = $this->db
                    ->set("id", $data["id"])->set("name", $data["name"])->set("link", $data["link"])->where("id",$data["id"])
                    ->update('link');

                return $rs;

            }
    public function get_admin_link($id)
                {
                    $rs = $this->db
                        ->where('id',$id)
                        ->get("link")
                        ->row();
                    return $rs;
                }
}