<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pelanggan extends Ci_controller
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
		$data['judul'] = 'PELANGGAN';

		//ambil data dari database tabel news category
		//load news_catmodel
		$data['hasil'] = $this->pelanggan_model->get_all();

		//load file view
		$tmp['konten'] = $this->load->view('admin/pelanggan/home',$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//2. fungsi untuk tambah data
	public function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required');

			if ($this->form_validation->run() == FALSE) 
			{
				$data ['err'] = validation_errors();
				$tmp['konten'] = $this->load->view("admin/pelanggan/add",$data,TRUE);
			}
			else
			{
				$aksi = $this->pelanggan_model->add();
				if ($aksi) 
				{
					$this->session->set_flashdata("message","berhasil menyimpan data baru");
					redirect('admin/pelanggan/','refresh');
				}
				else
				{
					$this->session->set_flashdata("message","gagal menyimpan data baru");
					redirect('admin/pelanggan/add','refresh');
				}	
			}
			
		}
		$data['judul'] = "TAMBAH DATA PELANGGAN ";

		//load template
		$tmp['konten'] = $this->load->view("admin/pelanggan/add",$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//3. Fungsi untuk edit data
	public function edit($id=0)
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$data_pelanggan = $this->pelanggan_model->get_detail_by_id($id);
			if (count($data_pelanggan) > 0)
			{
				$aksi = $this->pelanggan_model->update_by_admin($id);
				if ($aksi)
				{
				$this->session->set_flashdata("message","data Berhasil disimpan");
				redirect('admin/pelanggan','refresh');
				}
			else
			{
				$this->session->set_flashdata("message","gagal mengubah data");
				redirect('admin/pelanggan/edit/'.$id,'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("message","data gagal diedeit karena tidak ada data");
			redirect('admin/pelanggan/edit/'.$id,'refresh');
		}
	}
	else
	{
		$data_pelanggan = $this->pelanggan_model->get_detail_by_id($id);
		$data['judul'] = "Edit Data PELANGGAN ".$data_pelanggan['NAMA_PELANGGAN'];
		$data['hasil'] = $this->pelanggan_model->get_detail_by_id($id);


		//load template
		$tmp['konten'] = $this->load->view("admin/pelanggan/edit",$data,TRUE);
		$this->load->view('admin/template',$tmp);	
	}
}		
	//4.fungsi untuk hapus data
	public function delete($id=0)
	{
		//get data
		$data_pelanggan = $this->pelanggan_model->get_detail_by_id($id);
		if (count($data_pelanggan) > 0)
		{
		//hapus data dari database
		$aksi = $this->pelanggan_model->delete($id);

		if ($aksi)
		{
			//jika query berhasil
			$this->session->set_flashdata("message","data berhasil dihapus");
			redirect('admin/pelanggan','refresh');
		}
		else
		{
			//jika query gagal
			$this->session->set_flashdata("message","data gagal dihapus karena gagal query");
			redirect('admin/pelanggan','refresh');
		}
	}
	else
	{
		//jika tidak ditemukan data
		$this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
		redirect('admin/pelanggan','refresh');
	}

}
}