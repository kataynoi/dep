<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 *

 */
class Base_data_model extends CI_Model
{

    public function get_boss()
    {
        $rs = $this->db
            ->limit(1)
            ->get("boss")
            ->row();
        return $rs;
    }

    public function get_boss_list()
    {
        $rs = $this->db
            ->limit(1)
            ->get("boss_list")
            ->row();
        return $rs;
    }
    public function get_authority()
    {
        $rs = $this->db
            ->limit(1)
            ->get("authority")
            ->row();
        return $rs;
    }
    public function get_policy()
    {
        $rs = $this->db
            ->limit(1)
            ->get("policy")
            ->row();
        return $rs;
    }
    public function get_structure()
    {
        $rs = $this->db
            ->limit(1)
            ->get("structure")
            ->row();
        return $rs;
    } public function get_vision()
    {
        $rs = $this->db
            ->limit(1)
            ->get("vision")
            ->row();
        return $rs;
    }
}