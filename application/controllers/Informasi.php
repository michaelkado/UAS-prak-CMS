<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller 
{
	//digunakan untuk menamilkan lis berita
	public function index()
	{
		$data['head'] = "I N F O R M A T I O N ";
		$data['hasil'] = $this->news_model->get_all();

		$tmp['konten'] = $this->load->view('informasi/home',$data,TRUE);
		$this->load->view('template',$tmp);
	}
	
	//digunakan untuk menampilkan detail berita
	public function detail($id=0)
	{
		$data['head'] = "I N F O R M A T I O N - Detail";
		$data['hasil'] = $this->news_model->get_detail_by_id($id);

		$tmp['konten'] = $this->load->view('informasi/detail',$data,TRUE);
		$this->load->view('template',$tmp);		
	}
}