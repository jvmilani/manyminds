<?php

class Orders_model extends CI_Model {

    public function index()
    {
        return $this->db->get("orders")->result_array();
    }
}

