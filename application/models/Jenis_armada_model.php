<?php
class Jenis_armada_model extends CI_Model
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
    	$this->db->order_by('TIPE_JENIS_ARMADA ASC');
        $Q = $this->db->get('JENIS_ARMADA'); 

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
    	$this->db->where('JENIS_ARMADA.ID_JENIS_ARMADA',$id);
    	$Q = $this->db->get('JENIS_ARMADA');

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
    	$action = $this->db->query("INSERT INTO JENIS_ARMADA (ID_JENIS_ARMADA, TIPE_JENIS_ARMADA) VALUES (jenis_armada_id_seq.NEXTVAL,'".$this->input->post('tipe_jenis_armada')."')");

    	return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'TIPE_JENIS_ARMADA' => $this->input->post('tipe_jenis_armada')
        );
        $this->db->where('ID_JENIS_ARMADA',$id);
        $action = $this->db->update('JENIS_ARMADA', $data);

        return $action;
    }
  //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_JENIS_ARMADA',$id);
        $action = $this->db->delete('JENIS_ARMADA');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('TIPE_JENIS_ARMADA ASC');
        $Q = $this->db->get('JENIS_ARMADA');

        if ($Q->num_rows() > 0) 
        {
            $data[""] = "== silahkan pilih ==";
            foreach ($Q->result_array() as $row)
            {
                $data[$row['ID_JENIS_ARMADA']] = $row['TIPE_JENIS_ARMADA'];
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