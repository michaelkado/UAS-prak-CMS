<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends Ci_controller
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
		$data['judul'] = 'KARYAWAN';

		//ambil data dari database tabel news category
		//load news_catmodel
		$data['hasil'] = $this->karyawan_model->get_all();

		//load file view
		$tmp['konten'] = $this->load->view('admin/karyawan/home',$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//2. fungsi untuk tambah data
	public function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$this->form_validation->set_rules('nama_karyawan', 'Nama Karyawan', 'trim|required');

			if ($this->form_validation->run() == FALSE) 
			{
				$data ['err'] = validation_errors();
				$tmp['konten'] = $this->load->view("admin/karyawan/add",$data,TRUE);
			}
			else
			{
				$aksi = $this->karyawan_model->add();
				if ($aksi) 
				{
					$this->session->set_flashdata("message","berhasil menyimpan data baru");
					redirect('admin/karyawan/','refresh');
				}
				else
				{
					$this->session->set_flashdata("message","gagal menyimpan data baru");
					redirect('admin/karyawan/add','refresh');
				}	
			}
			
		}
		$data['judul'] = "TAMBAH DATA KARYAWAN";

		//load template
		$tmp['konten'] = $this->load->view("admin/karyawan/add",$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//3. Fungsi untuk edit data
	public function edit($id=0)
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$data_karyawan = $this->karyawan_model->get_detail_by_id($id);
			if (count($data_karyawan) > 0)
			{
				$aksi = $this->karyawan_model->update_by_admin($id);
				if ($aksi)
				{
				$this->session->set_flashdata("message","data Berhasil disimpan");
				redirect('admin/karyawan','refresh');
				}
			else
			{
				$this->session->set_flashdata("message","gagal mengubah data");
				redirect('admin/karyawan/edit/'.$id,'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("message","data gagal diedeit karena tidak ada data");
			redirect('admin/karyawan/edit/'.$id,'refresh');
		}
	}
	else
	{
		$data_karyawan = $this->karyawan_model->get_detail_by_id($id);
		$data['judul'] = "Edit Data Karyawan ".$data_karyawan['NAMA_KARYAWAN'];
		$data['hasil'] = $this->karyawan_model->get_detail_by_id($id);


		//load template
		$tmp['konten'] = $this->load->view("admin/karyawan/edit",$data,TRUE);
		$this->load->view('admin/template',$tmp);	
	}
}		
	//4.fungsi untuk hapus data
	public function delete($id=0)
	{
		//get data
		$data_karyawan = $this->karyawan_model->get_detail_by_id($id);
		if (count($data_karyawan) > 0)
		{
		//hapus data dari database
		$aksi = $this->karyawan_model->delete($id);

		if ($aksi)
		{
			//jika query berhasil
			$this->session->set_flashdata("message","data berhasil dihapus");
			redirect('admin/karyawan','refresh');
		}
		else
		{
			//jika query gagal
			$this->session->set_flashdata("message","data gagal dihapus karena gagal query");
			redirect('admin/karyawan','refresh');
		}
	}
	else
	{
		//jika tidak ditemukan data
		$this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
		redirect('admin/karyawan','refresh');
	}

}
}