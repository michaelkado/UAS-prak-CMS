<?php
class Armada_model extends CI_Model
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
        $this->db->where('ARMADA.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('ARMADA.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->order_by('ID_ARMADA ASC');
        $Q = $this->db->get('ARMADA, JENIS_ARMADA, KELAS_ARMADA');

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
        $this->db->where('ARMADA.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('ARMADA.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->where('ARMADA.ID_ARMADA',$id);
        $Q = $this->db->get('ARMADA, JENIS_ARMADA, KELAS_ARMADA');        

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
        $action = $this->db->query("INSERT INTO ARMADA (ID_ARMADA, FID_JENIS_ARMADA, FID_KELAS_ARMADA, NO_POLISI, NO_MESIN, MASA_BERLAKU_KENDARAAN, JUMLAH_KURSI, ARMADA_IMAGE) VALUES (armada_id_seq.NEXTVAL, '".$this->input->post('fid_jenis_armada')."','".$this->input->post('fid_kelas_armada')."','".$this->input->post('no_polisi')."', '".$this->input->post('no_mesin')."', '".$this->input->post('masa_berlaku_kendaraan')."','".$this->input->post('jumlah_kursi')."','".$img."')");

        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id,$img)
    {
        $data = array(
            'FID_JENIS_ARMADA' => $this->input->post('fid_jenis_armada'),
            'FID_KELAS_ARMADA' => $this->input->post('fid_kelas_armada'),
            'NO_POLISI' => $this->input->post('no_polisi'),
            'NO_MESIN' => $this->input->post('no_mesin'),
            'MASA_BERLAKU_KENDARAAN' => $this->input->post('masa_berlaku_kendaraan'),
            'JUMLAH_KURSI' => $this->input->post('jumlah_kursi'),
            'ARMADA_IMAGE' => "$img"
        );
        $this->db->where('ID_ARMADA',$id);
        $action = $this->db->update('ARMADA', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_ARMADA',$id);
        $action = $this->db->delete('ARMADA');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>