<?php
class Pemesanan_model extends CI_Model
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
        $this->db->where('PEMESANAN.FID_PELANGGAN = PELANGGAN.ID_PELANGGAN');
        $this->db->where('PEMESANAN.FID_LOKASI = LOKASI.ID_LOKASI');;
        $this->db->where('PEMESANAN.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('PEMESANAN.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->order_by('ID_PEMESANAN DESC');
        $Q = $this->db->get('PEMESANAN, PELANGGAN, LOKASI, JENIS_ARMADA, KELAS_ARMADA');

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
        $this->db->where('PEMESANAN.FID_PELANGGAN = PELANGGAN.ID_PELANGGAN');
        $this->db->where('PEMESANAN.FID_LOKASI = LOKASI.ID_LOKASI');;
        $this->db->where('PEMESANAN.FID_JENIS_ARMADA = JENIS_ARMADA.ID_JENIS_ARMADA');
        $this->db->where('PEMESANAN.FID_KELAS_ARMADA = KELAS_ARMADA.ID_KELAS_ARMADA');
        $this->db->order_by('ID_PEMESANAN DESC');
        $Q = $this->db->get('PEMESANAN, PELANGGAN, LOKASI, JENIS_ARMADA, KELAS_ARMADA');

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
        $action = $this->db->query("INSERT INTO PEMESANAN (ID_PEMESANAN, FID_PELANGGAN, TITIK_AWAL, FID_LOKASI, FID_JENIS_ARMADA, FID_KELAS_ARMADA, TANGGAL_PESAN, TANGGAL_BERANGKAT, TANGGAL_PULANG, JUMLAH_PESERTA, JUMLAH_KENDARAAN,CATATAN_PELANGGAN) VALUES (pemesanan_id_seq.NEXTVAL,'".$this->input->post('fid_pelanggan')."', '".$this->input->post('titik_awal')."', '".$this->input->post('fid_lokasi')."', '".$this->input->post('fid_jenis_armada')."','".$this->input->post('fid_kelas_armada')."', '".$this->input->post('tanggal_pesan')."', '".$this->input->post('tanggal_berangkat')."', '".$this->input->post('tanggal_pulang')."', '".$this->input->post('jumlah_peserta')."', '".$this->input->post('jumlah_kendaraan')."','".$this->input->post('catatan_pelanggan')."')");;

        return $action;
    }
    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {
        $data = array(
            'FID_PELANGGAN' => $this->input->post('fid_pelanggan'),
            'TITIK_AWAL' => $this->input->post('titik_awal'),
            'FID_LOKASI' => $this->input->post('fid_lokasi'),
            'FID_JENIS_ARMADA' => $this->input->post('fid_jenis_armada'),
            'FID_KELAS_ARMADA' => $this->input->post('fid_kelas_armada'),
            'TANGGAL_PESAN' => $this->input->post('tanggal_pesan'),
            'TANGGAL_BERANGKAT' => $this->input->post('tanggal_berangkat'),
            'TANGGAL_PULANG' => $this->input->post('tanggal_pulang'),
            'JUMLAH_PESERTA' => $this->input->post('jumlah_peserta'),
            'JUMLAH_KENDARAAN' => $this->input->post('jumlah_kendaraan'),
            'CATATAN_PELANGGAN' => $this->input->post('catatan_pelanggan'),
        );
        $this->db->where('ID_PEMESANAN',$id);
        $action = $this->db->update('PEMESANAN', $data);

        return $action;
    }
    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('ID_PEMESANAN',$id);
        $action = $this->db->delete('PEMESANAN');
        return $action;
    }
    //6. fungsi menampikan data dengan model dropdown list
    function get_drop_down()
    {
        
    }
}
?>