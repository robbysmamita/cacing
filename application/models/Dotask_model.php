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

    public function add()
    {
        $data = [
            'nama_task' => htmlspecialchars($this->input->post('name_task')),
            'content' => htmlspecialchars($this->input->post('content')),
            'start_date' => htmlspecialchars($this->input->post('start_date')),
            'start_time' => htmlspecialchars($this->input->post('start_time')),
            'due_date' => htmlspecialchars($this->input->post('due_date')),
            'due_time' => htmlspecialchars($this->input->post('due_time')),
            'status' => htmlspecialchars($this->input->post('status')),
        ];
        $this->db->insert('todo', $data);
    }
}
