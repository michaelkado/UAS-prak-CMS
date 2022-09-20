<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function index()
	{
		$tmp['konten'] = $this->load->view('contact/contact','',TRUE);
		$this->load->view('template',$tmp);
	}
}