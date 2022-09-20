<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
	
	public function index()
	{
		$tmp['konten'] = $this->load->view('pemesanan/pemesanan','',TRUE);
		$this->load->view('template',$tmp);
	}
}