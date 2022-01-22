<?php

class Dotoday_model extends CI_Model
{
    public function getAlldotoday()
    {
        return $this->db->get('dotoday')->result_array();
    }

    public function getTodaybyid($id)
    {
        return $this->db->get_where('dotoday', ['id' => $id])->row_array();
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
        $this->db->insert('dotoday', $data);
    }
}
