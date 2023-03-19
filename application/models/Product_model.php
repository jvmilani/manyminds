<?php

class Product_model extends CI_Model {

    public function index()
    {
        return $this->db->get("products")->result_array();
    }

    public function store($product)
    {
        return $this->db->insert("products", $product);
    }
}

