<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$tmp['konten'] = $this->load->view('home/home','',TRUE);
		$this->load->view('template',$tmp);
	}
}