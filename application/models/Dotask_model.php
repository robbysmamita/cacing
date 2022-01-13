<?php

class Dotask_model extends CI_Model
{
    public function getTodo()
    {
        return $this->db->get('todo')->result_array();
    }

    public function getTodoById($id = null)
    {
        if ($id == null) {
            return $this->db->get('todo')->result_array();
        } else {
            return $this->db->get_where('todo', ['id' => $id])->row_array();
        }
    }
}
