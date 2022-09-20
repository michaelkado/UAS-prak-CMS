
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Ci_controller
{

	public function index(){
		$tmp['konten'] = $this->load->view('admin/login','',TRUE);
		$this->load->view('template',$tmp);
	}

	public function cek_login(){
		$u = $this->input->post('cms_user');
		$pw = $this->input->post('cms_password');

		$cek = $this->admin_model->verify($u, $pw);

		if (count($cek) > 0) {
			$id_user = $cek['ADMIN_ID'];

			$login = array(
				'username_admin' => $u,
				'login_admin' => $id_user,
				'login_status' => TRUE
			);

			$this->session->set_userdata($login);
			redirect('admin/home', 'refresh');

		} else {
			$this->sesion->set_flashdata('message','<br>Username atau Password Anda salah<br>');
			redirect('admin/login', 'refresh');
		}
	}

	function logout() {
		$this->session->unset_userdata("username_admin");
		$this->session->unset_userdata("login_admin");
		$this->session->unset_userdata("login_status");

		$login = array(
			'username_admin' => "",
			'login_admin' => FALSE,
			'login_status' => FALSE
		);

		$this->session->set_userdata($login);
		$this->session->set_flashdata("message", "<h3>Terima kasih, Anda telah logout <br></h3>");
		redirect('admin/login','refresh');
	}

}


 ?>