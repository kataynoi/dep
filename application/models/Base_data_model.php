<?php

defined('BASEPATH') or exit('No direct script access allowed');


/**
 *

 */
class Base_data_model extends CI_Model
{

    public function get_boss($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("boss")
            ->row();
        return $rs;
    }

    public function get_boss_list($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("boss_list")
            ->row();
        return $rs;
    }
    public function get_authority($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("authority")
            ->row();
        return $rs;
    }
    public function get_policy($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("policy")
            ->row();
        return $rs;
    }
    public function get_structure($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("structure")
            ->row();
        return $rs;
    }
    public function get_vision($group)
    {
        $rs = $this->db
            ->where('group', $group)
            ->limit(1)
            ->get("vision")
            ->row();
        return $rs;
    }
}
