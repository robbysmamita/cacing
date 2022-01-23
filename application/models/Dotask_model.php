<?php

class Dotask_model extends CI_Model
{
    public function getTodo()
    {
        // return $this->db->get('todo')->result_array();
        return $this->db->get_where('todo', ['status' => 1])->result_array();
    }
    public function getTodoy()
    {
        return $this->db->get_where('todo', ['status' => 2])->result_array();
    }
    public function getProgress()
    {
        return $this->db->get_where('todo', ['status' => 3])->result_array();
    }
    public function getDone()
    {
        return $this->db->get_where('todo', ['status' => 4])->result_array();
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
        $start_date = $this->input->post('start_date');
        $newstartdate = date("Y-m-d", strtotime($start_date));
        $due_date = $this->input->post('due_date');
        $newduedate = date("Y-m-d", strtotime($due_date));
        $data = [
            'nama_task' => htmlspecialchars($this->input->post('name_task')),
            'content' => htmlspecialchars($this->input->post('content')),
            'start_date' => $newstartdate,
            'start_time' => htmlspecialchars($this->input->post('start_time')),
            'due_date' => $newduedate,
            'due_time' => htmlspecialchars($this->input->post('due_time')),
            'status' => htmlspecialchars($this->input->post('status')),
        ];
        $this->db->insert('todo', $data);
        // var_dump($this->db->last_query());
        // die;
    }

    public function adddotask()
    {
        $start_date = $this->input->post('start_date');
        $newstartdate = date("Y-m-d", strtotime($start_date));
        $due_date = $this->input->post('due_date');
        $newduedate = date("Y-m-d", strtotime($due_date));
        $data = [
            'nama_task' => htmlspecialchars($this->input->post('name_task')),
            'content' => htmlspecialchars($this->input->post('content')),
            'start_date' => $newstartdate,
            'start_time' => htmlspecialchars($this->input->post('start_time')),
            'due_date' => $newduedate,
            'due_time' => htmlspecialchars($this->input->post('due_time')),
            'status' => htmlspecialchars($this->input->post('status')),
        ];
        $this->db->insert('todo', $data);
        // var_dump($this->db->last_query());
        // die;
    }

    public function edit($id)
    {
        $start_date = $this->input->post('start_date');
        $newstartdate = date("Y-m-d", strtotime($start_date));
        $due_date = $this->input->post('due_date');
        $newduedate = date("Y-m-d", strtotime($due_date));
        $data = [
            'nama_task' => htmlspecialchars($this->input->post('name_task')),
            'content' => htmlspecialchars($this->input->post('content')),
            'start_date' => $newstartdate,
            'start_time' => htmlspecialchars($this->input->post('start_time')),
            'due_date' => $newduedate,
            'due_time' => htmlspecialchars($this->input->post('due_time')),
            'status' => htmlspecialchars($this->input->post('status')),
        ];
        $this->db->where('id', $id);
        $this->db->update('todo', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('todo');
        // var_dump($this->db->last_query());
        // die;
    }
    public function done($id)
    {
        $this->db->where('id', $id);
        $this->db->set('mark_done', 1);
        $this->db->update('todo');
        // var_dump($this->db->last_query());
        // die;
    }
    public function undone($id)
    {
        $this->db->where('id', $id);
        $this->db->set('mark_done', NULL);
        $this->db->update('todo');
        // var_dump($this->db->last_query());
        // die;
    }
}
