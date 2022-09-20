<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Armada extends CI_Controller 
{
	//digunakan untuk menamilkan lis berita
	public function index()
	{
		$data['head'] = "I N F O R M A T I O N A R M A D A";
		$data['hasil'] = $this->armada_model->get_all();

		$tmp['konten'] = $this->load->view('armada/armada',$data,TRUE);
		$this->load->view('template',$tmp);
	}
	
	//digunakan untuk menampilkan detail berita
	public function detail($id=0)
	{
		$data['head'] = "I N F O R M A T I O N A R M A D A";
		$data['hasil'] = $this->armada_model->get_all();

		$tmp['konten'] = $this->load->view('armada/armada',$data,TRUE);
		$this->load->view('template',$tmp);
	}
}