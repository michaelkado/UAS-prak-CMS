<?php
class News_model extends CI_Model
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
        $this->db->where('INFORMATION.NEWS_CAT_FID = INFORMATION_CAT.NEWS_CAT_ID');
        $this->db->order_by('NEWS_CAT_FID DESC');
        $Q = $this->db->get('INFORMATION, INFORMATION_CAT');

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
        $this->db->where('INFORMATION.NEWS_CAT_FID = INFORMATION_CAT.NEWS_CAT_ID');
        $this->db->where('INFORMATION.NEWS_ID',$id);        
        $Q = $this->db->get('INFORMATION, INFORMATION_CAT');

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
        $action = $this->db->query("INSERT INTO INFORMATION (NEWS_ID, NEWS_CAT_FID, NEWS_TITLE, NEWS_DESCRIPTION, NEWS_IMAGE) VALUES (news_id_seq.NEXTVAL,'".$this->input->post('news_cat_fid')."', '".$this->input->post('news_title')."', '".$this->input->post('news_description')."', '".$img."')");

        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {
        $data = array(
            'NEWS_CAT_FID' => $this->input->post('news_cat_fid'),
            'NEWS_TITLE' => $this->input->post('news_title'),
            'NEWS_DESCRIPTION' => $this->input->post('news_description'),
            'NEWS_IMAGE' => "$img"
        );
        $this->db->where('NEWS_ID',$id);
        $action = $this->db->update('INFORMATION', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('NEWS_ID',$id);
        $action = $this->db->delete('INFORMATION');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>