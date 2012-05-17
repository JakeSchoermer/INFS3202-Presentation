<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller {
	
	public function index() {
		
		$this->load->model('Slides_model');
		$data['slides'] = $this->Slides_model->get_entries();
		
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	
}
?>