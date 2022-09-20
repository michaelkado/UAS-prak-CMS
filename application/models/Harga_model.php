<?php
class Harga_model extends CI_Model
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
        $this->db->where('HARGA.FID_LOKASI = LOKASI.ID_LOKASI');;
        $this->db->where('HARGA.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('HARGA.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->order_by('BIAYA ASC');
        $Q = $this->db->get('HARGA, LOKASI, JENIS_ARMADA, KELAS_ARMADA');

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
        $this->db->where('HARGA.FID_LOKASI = LOKASI.ID_LOKASI');;
        $this->db->where('HARGA.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('HARGA.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->order_by('BIAYA ASC');
        $Q = $this->db->get('HARGA, LOKASI, JENIS_ARMADA, KELAS_ARMADA');

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
        $action = $this->db->query("INSERT INTO HARGA (ID_HARGA, FID_LOKASI, DURASI, FID_JENIS_ARMADA, FID_KELAS_ARMADA, BIAYA, KETERANGAN) VALUES (harga_id_seq.NEXTVAL,'".$this->input->post('fid_lokasi')."', '".$this->input->post('durasi')."', '".$this->input->post('fid_jenis_armada')."','".$this->input->post('fid_kelas_armada')."','".$this->input->post('biaya')."','".$this->input->post('keterangan')."')");;
        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'FID_LOKASI' => $this->input->post('fid_lokasi'),
            'DURASI' => $this->input->post('durasi'),
            'FID_JENIS_ARMADA' => $this->input->post('fid_jenis_armada'),
            'FID_KELAS_ARMADA' => $this->input->post('fid_kelas_armada'),
            'BIAYA' => $this->input->post('biaya'),
            'KETERANGAN' => $this->input->post('keterangan'),
        );
        $this->db->where('ID_HARGA',$id);
        $action = $this->db->update('HARGA', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_HARGA',$id);
        $action = $this->db->delete('HARGA');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {

    }
}
?>