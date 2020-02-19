<?php
	// This is the controller for all the pages
	class Pages extends CI_Controller {

		public function __construct() {

			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('session');
			$this->load->helper('directory');
			$this->load->model('event_model');
		}

		public function home($page = 'home')
		{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php') )
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			#--------------------- Navbar ---------------------#
			$this->load->view('templates/header');

			if($this->session->has_userdata('id')) {
				# if user is logged in i.e, has a user id
				$this->load->view('templates/nav_logout');
			}
			else {
				# if user is not logged in
				$this->load->view('templates/nav_login');
			}
			#--------------------- Page ---------------------#
			
			$this->load->view('pages/'.$page);
			if ($page === 'home') {
				foreach ($this->event_model->get_events() as $data)
				{
					$this->load->view('templates/event_box', $data);
				}
			} 

			$this->load->view('templates/footer');
		}

		//public function gallery($event_id, $event_name)
		public function gallery()
		{
			$this->load->view('templates/header');

			if($this->session->has_userdata('id')) {
				# if user is logged in i.e, has a user id
				$this->load->view('templates/nav_logout');
			}
			else {
				# if user is not logged in
				$this->load->view('templates/nav_login');
			}
			
			$this->load->view('pages/gallery');
			
			$this->load->view('templates/footer');
		}

		public function register()
		{
			#--------------------- Navbar ---------------------#
			$this->load->view('templates/header');

			if($this->session->has_userdata('id')) {
				# if user is logged in i.e, has a user id
				redirect(base_url().'user/home/', 'refresh');
			}
			else {
				# if user is not logged in
				$this->load->view('templates/nav_login');
			}

			$data['password_match'] = TRUE;
			$data['reg_success'] = FALSE;
			if($this->session->flashdata('password_match') === FALSE)
					$data['password_match'] = FALSE;
			if($this->session->flashdata('reg_success') === TRUE)
					$data['reg_success'] = TRUE;
			
			#--------------------- Page ---------------------#
			$this->load->view('pages/register', $data);
			$this->load->view('templates/footer');
		}

		public function user($page = 'home')
		{
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}
			#--------------------- Navbar ---------------------#
			$this->load->view('templates/header');

			if($this->session->has_userdata('id')) {
				# if user is logged in i.e, has a user id
				$faculty_id = $this->session->userdata('id');
				$data['user_name'] = $this->session->userdata('username');
				$data['user_email'] = $this->session->userdata('email');
				$this->load->view('templates/nav_logout');
			}
			else {
				# if user is not logged in
				redirect(base_url(), 'refresh');
			}
			
			#--------------------- Page ---------------------#
			$this->load->view('pages/add_event', $data);
			foreach ($this->event_model->get_events($faculty_id) as $data)
			{
				$this->load->view('pages/edit_event', $data);
			}
			$this->load->view('templates/footer');
		}
	}
?>