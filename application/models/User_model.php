<?php

class User_model extends CI_Model {
    
    public function index() {
        return $this->db->get("users")->result_array();
    }

    public function store($user) {
        return $this->db->insert("users", $user);
    }
    
    public function show($id)
    {
        return $this->db->get_where("users", array('id' => $id))->row_array();
    }

    public function update($id, $user)
    {
        $this->db->where('id', $id);
        return $this->db->update("users", $user);
    }

    public function destroy($id)
    {
        $user = $this->db->get_where("users", array('id' => $id))->row_array();
        $data = array( 'active' => ($user['active']) ? 0 : 1);
        $this->db->where('id', $id);
        return $this->db->update("users", $data);
    }
}

