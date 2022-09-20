<?php
class Karyawan_model extends CI_Model
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
    	$this->db->order_by('NAMA_KARYAWAN ASC');
    	$Q = $this->db->get('KARYAWAN');

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
        $this->db->where('KARYAWAN.ID_KARYAWAN',$id);
        $Q = $this->db->get('KARYAWAN');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }
        $Q->free_result();
        return $data;
    }
    //3. fungsi untuk tambah data
    function add()
    {
        $action = $this->db->query("INSERT INTO KARYAWAN (ID_KARYAWAN, NAMA_KARYAWAN, TTL, UMUR, ALAMAT, JABATAN) VALUES (karyawan_id_seq.NEXTVAL,'".$this->input->post('nama_karyawan')."', '".$this->input->post('ttl')."', '".$this->input->post('umur')."','".$this->input->post('alamat')."','".$this->input->post('jabatan')."')");;
        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'NAMA_KARYAWAN' => $this->input->post('nama_karyawan'),
            'TTL' => $this->input->post('ttl'),
            'UMUR' => $this->input->post('umur'),
            'ALAMAT' => $this->input->post('alamat'),
            'JABATAN' => $this->input->post('jabatan'),
        );
        $this->db->where('ID_KARYAWAN',$id);
        $action = $this->db->update('KARYAWAN', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_KARYAWAN',$id);
        $action = $this->db->delete('KARYAWAN');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>