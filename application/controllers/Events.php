<?php
	// This is the controller for all the pages
	class Events extends CI_Controller {

		public function __construct() {

			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('upload');	
			$this->load->library('session');
			$this->load->model('event_model');
		}

		public function add_event()
		{

			if($this->session->has_userdata('id') == NULL)
				redirect(base_url().'login', 'refresh');

			$data = array();
			$data['event_name'] = $this->input->post('event_name');
			$data['event_description'] = $this->input->post('event_description');
			$data['event_type'] = $this->input->post('event_type');
			$data['event_technology'] = $this->input->post('event_technology');
			$data['event_org_body'] = $this->input->post('event_org_body');
			$data['event_org_faculty_id'] = $this->session->userdata('id');
			$data['event_date'] = $this->input->post('event_date');
			$data['event_no_of_days'] = $this->input->post('event_no_of_days');
			$data['event_start_time'] = $this->input->post('event_start_time');
			$data['event_end_time'] = $this->input->post('event_end_time');
			$data['event_venue'] = $this->input->post('event_venue');
			$data['event_reg_link'] = $this->input->post('event_reg_link');

			// Add the event
			$event_id = $this->event_model->add_event($data);
			
			if ($event_id === NULL) {
				//$this->session->set_flashdata('event_add_success', TRUE);
				echo "Something went wrong while adding the event !";
				
			} else {

				$config = array();
				$config['upload_path'] = './uploads/Events/'.$event_id.'_'.str_replace(' ', '_', $data['event_name']).'/';    # must be writable
				$config['allowed_types'] = 'gif|jpg|jpeg|png|mp4|avi';
				$config['max_filename'] = '100';
				$config['file_ext_tolower'] = TRUE;

				// Creating a directory
				if (!file_exists($config['upload_path'])) {
					mkdir($config['upload_path'], 0777);
				}
				$this->upload->initialize($config);

				for ($i=0; $i < count($_FILES['event_media']['name']); $i++) { 

					$_FILES['event_media[]']['name']     = $_FILES['event_media']['name'][$i];
		            $_FILES['event_media[]']['type']     = $_FILES['event_media']['type'][$i];
		            $_FILES['event_media[]']['tmp_name'] = $_FILES['event_media']['tmp_name'][$i];
		            $_FILES['event_media[]']['error']    = $_FILES['event_media']['error'][$i];
		            $_FILES['event_media[]']['size']     = $_FILES['event_media']['size'][$i];

		            if (! $this->upload->do_upload('event_media[]')) {
		                echo $this->upload->display_errors();
		            }
				}
			}

			//redirect(base_url().'user/home/', 'refresh');
		}

		public function update_event()
		{

			if($this->session->has_userdata('id') == NULL)
				redirect(base_url().'login/', 'refresh');
			
			if(strcmp( $this->input->post('update_event'), 'Update Event') == 0) {

				$data = array();
				$data['event_id'] = $this->input->post('event_id');
				$data['event_name'] = $this->input->post('event_name');
				$data['event_description'] = $this->input->post('event_description');
				$data['event_type'] = $this->input->post('event_type');
				$data['event_technology'] = $this->input->post('event_technology');
				$data['event_org_body'] = $this->input->post('event_org_body');
				$data['event_org_faculty_id'] = $this->session->userdata('id');
				$data['event_date'] = $this->input->post('event_date');
				$data['event_no_of_days'] = $this->input->post('event_no_of_days');
				$data['event_start_time'] = $this->input->post('event_start_time');
				$data['event_end_time'] = $this->input->post('event_end_time');
				$data['event_venue'] = $this->input->post('event_venue');
				$data['event_reg_link'] = $this->input->post('event_reg_link');
				
				if ($this->event_model->update_event($data)) {
					//$this->session->set_flashdata('event_add_success', TRUE);
					redirect(base_url().'user/home/', 'refresh');
				}
				else echo "Something went wrong !";
			
			} else if(strcmp( $this->input->post('delete_event'), 'Delete Event') == 0) {
				
				if ($this->event_model->delete_event($this->input->post('event_id'))) {
					//$this->session->set_flashdata('event_add_success', TRUE);
					redirect(base_url().'user/home/', 'refresh');
				}
				else echo "Something went wrong !";
			}
			else
				redirect(base_url().'login/', 'refresh');
		}
	}
?>