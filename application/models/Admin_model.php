<?php
class Admin_model extends CI_Model
{
    function _construct()
    {
        parent::_construct();
    }

    //verifikasi login
    function verify($u,$pw)
    {
        $row = array();
        $this->db->select('*');
        $this->db->where('USERNAME',$u);
        $this->db->where('PASSWORD', sha1($pw.$this->config->item('encryption_key')));
        $this->db->limit(1);
        $Q = $this->db->get('ADMINS');

        if ($Q->num_rows() > 0)
        {
            $row = $Q->row_array();
        }

        $Q->free_result();
        return $row;
    }
}