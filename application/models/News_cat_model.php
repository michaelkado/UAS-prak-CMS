<?php
class News_cat_model extends CI_Model
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
    	$this->db->order_by('NEWS_CAT_NAME ASC');
    	$Q = $this->db->get('INFORMATION_CAT');

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
    	$this->db->where('INFORMATION_CAT.NEWS_CAT_ID',$id);
    	$Q = $this->db->get('INFORMATION_CAT');

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
    	$action = $this->db->query("INSERT INTO INFORMATION_CAT (NEWS_CAT_ID, NEWS_CAT_NAME) VALUES (news_cat_id_seq.NEXTVAL,'".$this->input->post('news_cat_name')."')");

    	return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
    	$data = array(
    		'NEWS_CAT_NAME' => $this->input->post('news_cat_name')
    	);
    	$this->db->where('NEWS_CAT_ID',$id);
    	$action = $this->db->update('INFORMATION_CAT', $data);

    	return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
    	$this->db->where('NEWS_CAT_ID',$id);
    	$action = $this->db->delete('INFORMATION_CAT');
    	return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {
    	$data = array();
    	$this->db->select('*');
    	$this->db->order_by('NEWS_CAT_NAME ASC');
    	$Q = $this->db->get('INFORMATION_CAT');

    	if ($Q->num_rows() > 0) 
    	{
    		$data[""] = "== silahkan pilih ==";
    		foreach ($Q->result_array() as $row)
    		{
    			$data[$row['NEWS_CAT_ID']] = $row['NEWS_CAT_NAME'];
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