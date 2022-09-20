<?php
class Lokasi_model extends CI_Model
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
    	$this->db->order_by('NAMA_KOTA ASC');
    	$Q = $this->db->get('LOKASI');

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
    	$this->db->where('LOKASI.ID_LOKASI',$id);
    	$Q = $this->db->get('LOKASI');

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
    	$action = $this->db->query("INSERT INTO LOKASI (ID_LOKASI, NAMA_KOTA) VALUES (lokasi_id_seq.NEXTVAL,'".$this->input->post('nama_kota')."')");

    	return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
    	$data = array(
            'NAMA_KOTA' => $this->input->post('nama_kota'),
    	);
    	$this->db->where('ID_LOKASI',$id);
    	$action = $this->db->update('LOKASI', $data);

    	return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
    	$this->db->where('ID_LOKASI',$id);
    	$action = $this->db->delete('LOKASI');
    	return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {
    	$data = array();
    	$this->db->select('*');
    	$this->db->order_by('NAMA_KOTA ASC');
    	$Q = $this->db->get('LOKASI');

    	if ($Q->num_rows() > 0) 
    	{
    		$data[""] = "== silahkan pilih ==";
    		foreach ($Q->result_array() as $row)
    		{
    			$data[$row['ID_LOKASI']] = $row['NAMA_KOTA'];
    		}
    	}
    	else
    	{
    		$data[""] = "data not available";
    	}

    	$Q->free_result();
    	return $data;
    }
}
?>