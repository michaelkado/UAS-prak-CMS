<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_cat extends Ci_controller
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
		$data['judul'] = 'INFORMATION CATEGORY';

		//ambil data dari database tabel news category
		//load news_catmodel
		$data['hasil'] = $this->news_cat_model->get_all();

		//load file view
		$tmp['konten'] = $this->load->view('admin/news_cat/home',$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//2. fungsi untuk tambah data
	public function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$this->form_validation->set_rules('news_cat_name', 'Nama Kategori', 'trim|required');

			if ($this->form_validation->run() == FALSE) 
			{
				$data ['err'] = validation_errors();
				$tmp['konten'] = $this->load->view("admin/news_cat/add",$data,TRUE);
			}
			else
			{
				$aksi = $this->news_cat_model->add();
				if ($aksi) 
				{
					$this->session->set_flashdata("message","berhasil menyimpan data baru");
					redirect('admin/news_cat/','refresh');
				}
				else
				{
					$this->session->set_flashdata("message","gagal menyimpan data baru");
					redirect('admin/news_cat/add','refresh');
				}	
			}
			
		}
		$data['judul'] = "TAMBAH DATA INFORMATION CATEGORY";

		//load template
		$tmp['konten'] = $this->load->view("admin/news_cat/add",$data,TRUE);
		$this->load->view('admin/template',$tmp);
	}
	//3. Fungsi untuk edit data
	public function edit($id=0)
	{
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$data_news_cat = $this->news_cat_model->get_detail_by_id($id);
			if (count($data_news_cat) > 0)
			{
				$aksi = $this->news_cat_model->update_by_admin($id);
				if ($aksi)
				{
				$this->session->set_flashdata("message","data Berhasil disimpan");
				redirect('admin/news_cat','refresh');
				}
			else
			{
				$this->session->set_flashdata("message","gagal mengubah data");
				redirect('admin/news_cat/edit/'.$id,'refresh');
			}
		}
		else
		{
			$this->session->set_flashdata("message","data gagal diedeit karena tidak ada data");
			redirect('admin/news_cat/edit/'.$id,'refresh');
		}
	}
	else
	{
		$data_news_cat = $this->news_cat_model->get_detail_by_id($id);
		$data['judul'] = "Edit Data Kategori".$data_news_cat['NEWS_CAT_NAME'];
		$data['hasil'] = $this->news_cat_model->get_detail_by_id($id);


		//load template
		$tmp['konten'] = $this->load->view("admin/news_cat/edit",$data,TRUE);
		$this->load->view('admin/template',$tmp);	
	}
}	
	//4.fungsi untuk hapus data
	public function delete($id=0)
	{
		//get data
		$data_news_cat = $this->news_cat_model->get_detail_by_id($id);
		if (count($data_news_cat) > 0)
		{
		//hapus data dari database
		$aksi = $this->news_cat_model->delete($id);

		if ($aksi)
		{
			//jika query berhasil
			$this->session->set_flashdata("message","data berhasil dihapus");
			redirect('admin/news_cat','refresh');
		}
		else
		{
			//jika query gagal
			$this->session->set_flashdata("message","data gagal dihapus karena gagal query");
			redirect('admin/news_cat','refresh');
		}
	}
	else
	{
		//jika tidak ditemukan data
		$this->session->set_flashdata("message","data gagal dihapus karena tidak ada datanya");
		redirect('admin/news_cat','refresh');
	}

}
}