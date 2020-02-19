<?php
	// This is the controller for all the pages
	class Users extends CI_Controller {

		public function __construct() {

			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->model('user_model');
		}

		public function user_register()
		{
			if ( $this->input->post('password') != $this->input->post('password_confirm') )
			{
				$this->session->set_flashdata('password_match', FALSE);
				redirect('http://127.0.0.1/login/register', 'refresh');
			}

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$email = html_escape($this->input->post('email'));
			
			if ($this->user_model->user_register($username, $password, $email)) {
				$this->session->set_flashdata('reg_success', TRUE);
				redirect('http://127.0.0.1/', 'refresh');
			}
			else echo "Registration Unsuccessful";

		}

		public function user_login()
		{
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$user_data = $this->user_model->user_login($username, $password);
			if ($user_data != FALSE)
				$this->session->set_userdata($user_data);

			redirect(base_url().'user/home/', 'refresh');
		}

		public function user_logout()
		{
			if($this->session->has_userdata('id'))
			{
				$keys = array('__ci_last_regenerate', 'id', 'username', 'email', 'created_on');
				$this->session->unset_userdata($keys);
			}
			redirect(base_url(), 'refresh');
		}

		
	}
?>