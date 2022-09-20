<?php
class Pelanggan_model extends CI_Model
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
    	$this->db->order_by('NAMA_PELANGGAN ASC');
    	$Q = $this->db->get('PELANGGAN');

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
        $this->db->where('PELANGGAN.ID_PELANGGAN',$id);
        $Q = $this->db->get('PELANGGAN');

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
        $action = $this->db->query("INSERT INTO PELANGGAN (ID_PELANGGAN, NAMA_PELANGGAN, ALAMAT, NO_TLP, INSTANSI, EMAIL) VALUES (pelanggan_id_seq.NEXTVAL,'".$this->input->post('nama_pelanggan')."', '".$this->input->post('alamat')."', '".$this->input->post('no_tlp')."','".$this->input->post('instansi')."','".$this->input->post('email')."')");;
        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'NAMA_PELANGGAN' => $this->input->post('nama_pelanggan'),
            'ALAMAT' => $this->input->post('alamat'),
            'NO_TLP' => $this->input->post('no_tlp'),
            'INSTANSI' => $this->input->post('instansi'),
            'EMAIL' => $this->input->post('email'),
        );
        $this->db->where('ID_PELANGGAN',$id);
        $action = $this->db->update('PELANGGAN', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_PELANGGAN',$id);
        $action = $this->db->delete('PELANGGAN');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('NAMA_PELANGGAN ASC');
        $Q = $this->db->get('PELANGGAN');

        if ($Q->num_rows() > 0) 
        {
            $data[""] = "== silahkan pilih ==";
            foreach ($Q->result_array() as $row)
            {
                $data[$row['ID_PELANGGAN']] = $row['NAMA_PELANGGAN'];
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