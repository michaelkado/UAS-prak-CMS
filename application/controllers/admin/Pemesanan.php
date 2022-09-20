<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemesanan extends Ci_controller
{
	public function __construct()
	{
		parent::__construct();
		//digunakan ketika halaman ini dapat diakses jika session bernilai true
		if ($this->session->userdata("login_status") == FALSE ) 
		{
		$this->session->set_flashdata("message","access denied");
		redirect("admin/login",'refresh');
		}
	}

	//1.fungsi untuk menampilkan data dari database
	public function index()
	{
		$data['judul'] = 'PEMESANAN';

		//ambil data dari database tabel news category
		//load news_catmodel
		$data['hasil'] = $this->pemesanan_model->get_all();

		//load file view
		$tmp['konten'] = $this->load->view('admin/pemesanan/home',$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//2. fungsi untuk tambah data
	public function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$this->form_validation->set_rules('tanggal_pesan', 'tanggal Pesan', 'trim|required');

			if ($this->form_validation->run() == FALSE) 
			{
				$data ['err'] = validation_errors();
				$tmp['konten'] = $this->load->view("admin/pemesanan/add",$data,TRUE);
			}
			else
			{
				$aksi = $this->pemesanan_model->add();
				if ($aksi) 
				{
					$this->session->set_flashdata("message","berhasil menyimpan data baru");
					redirect('admin/pemesanan/','refresh');
				}
				else
				{
					$this->session->set_flashdata("message","gagal menyimpan data baru");
					redirect('admin/pemesanan/add','refresh');
				}	
			}
			
		}
		$data['judul'] = "TAMBAH DATA PEMESANAN";

		//load template
		$tmp['konten'] = $this->load->view("admin/pemesanan/add",$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//3. Fungsi untuk edit data
	public function edit($id=0)
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$data_pemesanan = $this->pemesanan_model->get_detail_by_id($id);
			if (count($data_pemesanan) > 0)
			{
				$aksi = $this->pemesanan_model->update_by_admin($id);
				if ($aksi)
				{
				$this->session->set_flashdata("message","data Berhasil disimpan");
				redirect('admin/pemesanan','refresh');
				}
			else
			{
				$this->session->set_flashdata("message","gagal mengubah data");
				redirect('admin/pemesanan/edit/'.$id,'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("message","data gagal diedeit karena tidak ada data");
			redirect('admin/pemesanan/edit/'.$id,'refresh');
		}
	}
	else
	{
		$data_pemesanan = $this->pemesanan_model->get_detail_by_id($id);
		$data['judul'] = "Edit Data pemesanan ".$data_pemesanan['TANGGAL_PESAN'];
		$data['hasil'] = $this->pemesanan_model->get_detail_by_id($id);


		//load template
		$tmp['konten'] = $this->load->view("admin/pemesanan/edit",$data,TRUE);
		$this->load->view('admin/template',$tmp);	
	}
}		
	//4.fungsi untuk hapus data
	public function delete($id=0)
	{
		//get data
		$data_pemesanan = $this->pemesanan_model->get_detail_by_id($id);
		if (count($data_pemesanan) > 0)
		{
		//hapus data dari database
		$aksi = $this->pemesanan_model->delete($id);

		if ($aksi)
		{
			//jika query berhasil
			$this->session->set_flashdata("message","data berhasil dihapus");
			redirect('admin/pemesanan','refresh');
		}
		else
		{
			//jika query gagal
			$this->session->set_flashdata("message","data gagal dihapus karena gagal query");
			redirect('admin/pemesanan','refresh');
		}
	}
	else
	{
		//jika tidak ditemukan data
		$this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
		redirect('admin/pemesanan','refresh');
	}

}
}