<?php
class Komentar_model extends CI_Model
{
    function _construct()
    {
        parent::_construct();
    }

    //1. fungsi untuk menampilkan semua data 
    function get_all()
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('KOMENTAR.FID_PELANGGAN = PELANGGAN.ID_PELANGGAN');
        $this->db->order_by('KOMENTAR DESC');
        $Q = $this->db->get('KOMENTAR, PELANGGAN');

        if ($Q->num_rows() > 0) 
        {
            foreach ($Q->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $Q->free_result();
        return $data;
    }
    //2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('KOMENTAR.FID_PELANGGAN = PELANGGAN.ID_PELANGGAN');
        $this->db->where('KOMENTAR.ID_KOMENTAR',$id);        
        $Q = $this->db->get('KOMENTAR, PELANGGAN');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }
    //3. fungsi untuk tambah data
    function add($img)
    {
        $action = $this->db->query("INSERT INTO KOMENTAR (ID_kOMENTAR, FID_PELANGGAN, KOMENTAR, KOMEN_IMAGE) VALUES (komen_id_seq.NEXTVAL,'".$this->input->post('fid_pelanggan')."', '".$this->input->post('komentar')."', '".$img."')");

        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {
        $data = array(
            'FID_PELANGGAN' => $this->input->post('fid_pelanggan'),
            'KOMENTAR' => $this->input->post('komentar'),
            'KOMEN_IMAGE' => "$img"
        );
        $this->db->where('ID_KOMENTAR',$id);
        $action = $this->db->update('KOMENTAR', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_KOMENTAR',$id);
        $action = $this->db->delete('KOMENTAR');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>