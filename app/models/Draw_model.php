<?php

class Draw_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_allDraws()
    {
        $this->db->select()->from('draws');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_drawByID($id)
    { 
        $this->db->where('id', $id);
        $this->db->select()->from('draws');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_drawSpins()
    {
        $this->db->select('draw_users.*, draw_spins.id as drawSpID, draw_spins.user_id, draw_spins.draw_id, draw_spins.option_id, draws.id as drawID, draws.title, draw_options.id as optID, draw_options.draw_id, draw_options.title as optionTitle, draw_options.voucher');
        $this->db->from('draw_users');
        $this->db->join('draw_spins','draw_spins.user_id = draw_users.id', 'left');
        $this->db->join('draws', 'draws.id = draw_spins.draw_id');
        $this->db->join('draw_options', 'draw_options.draw_id = draws.id','left');
        $this->db->order_by('draw_spins.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_collectionStatus($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('draw_spins', array('collection_status' => $data));
        return $this->db->affected_rows();
    }

    public function get_drawOptions($id)
    {
        $this->db->where('draw_id', $id);
        $this->db->select()->from('draw_options');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_drawOptionByID($id)
    {
        $this->db->where('id', $id);
        $this->db->select()->from('draw_options');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_allDrawWinners()
    {
        $this->db->where('draw_spins.option_id >', 0);
        $this->db->select('draw_spins.*, draws.id as drawID, draws.title, draw_users.id as drUserID, draw_users.phone_no, draw_options.id as optID, draw_options.draw_id, draw_options.title as optionTitle, draw_options.voucher,');
        $this->db->from('draw_spins');
        $this->db->join('draws', 'draws.id = draw_spins.draw_id');
        $this->db->join('draw_users', 'draw_users.id = draw_spins.user_id');
        $this->db->join('draw_options', 'draw_options.draw_id = draw_spins.draw_id');
        $this->db->order_by('draw_spins.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_drawWinnersByID($draw_id)
    {
        $this->db->where('draw_spins.draw_id', $draw_id);
        $this->db->where('draw_spins.option_id >', 0);
        $this->db->select('draw_spins.*, draws.id as drawID, draws.title, draw_users.id as drUserID, draw_users.phone_no, draw_options.id as optID, draw_options.draw_id, draw_options.title as optionTitle, draw_options.voucher,');
        $this->db->from('draw_spins');
        $this->db->join('draws', 'draws.id = draw_spins.draw_id');
        $this->db->join('draw_users', 'draw_users.id = draw_spins.user_id');
        $this->db->join('draw_options', 'draw_options.draw_id = draw_spins.draw_id');
        $this->db->order_by('draw_spins.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_drawParticipantsByID($draw_id)
    {
        $this->db->where('draw_spins.draw_id', $draw_id);
        $this->db->select('draw_spins.*, draws.id as drawID, draws.title, draw_users.id as drUserID, draw_users.phone_no, draw_options.id as optID, draw_options.draw_id, draw_options.title as optionTitle, draw_options.voucher,');
        $this->db->from('draw_spins');
        $this->db->join('draws', 'draws.id = draw_spins.draw_id');
        $this->db->join('draw_users', 'draw_users.id = draw_spins.user_id');
        $this->db->join('draw_options', 'draw_options.draw_id = draw_spins.draw_id');
        $this->db->order_by('draw_spins.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    /*
        Store the record in the database
    */
    public function store_draw($data)
    {
        $this->db->insert('draws', $data);
        return $this->db->affected_rows();
    }

    function update_draw($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('draws', $data);
        return $this->db->affected_rows();
    }

    function update_drawOption($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('draw_options', $data);
        return $this->db->affected_rows();
    }

    function update_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return $this->db->affected_rows();
    }

    /*
        Delete a record in the database
    */
    public function delete_staff($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return $this->db->affected_rows();
    }

    public function delete_draw($id)
    {
        $this->db->where('id', $id);
        //$this->db->where('draw_options.draw_id', $id);
        $this->db->delete('draws');
        //$this->db->delete('draw_options');
        return $this->db->affected_rows();
    }

    public function delete_drawOption($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('draw_options');
        return $this->db->affected_rows();
    }

}
?>
