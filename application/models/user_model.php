<?php

class user_model extends ci_model {

    public function getList()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    public function getUser($id)
    {
        $query = $this->db->get_where('user', ['id' => $id]);
        return $query->result();
    }

    public function add($user)
    {
        $this->db->insert('user', $user);
    }

    public function edit($user)
    {
        $this->db->replace('user', $user);
    }

    public function delete($user)
    {
        $this->db->delete('user', $user);
    }
}
