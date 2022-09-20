<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller 
{
	//digunakan untuk menamilkan lis berita
	public function index()
	{
		$data['hasil'] = $this->komentar_model->get_all();

		$tmp['konten'] = $this->load->view('testimoni/testimoni',$data,TRUE);
		$this->load->view('template',$tmp);
	}
	
}