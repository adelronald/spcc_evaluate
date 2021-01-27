<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('uname', 'Username', 'required');
		$this->form_validation->set_rules('upass', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE) { 
		    $this->load->view('login_form');
        } 
	    else {
	    	// POST data
	    	$postData = $this->input->post();
	    	$result = $this->login_model->validate_user($postData['uname'],$postData['upass']);
	        if($result) {
	        	$this->load->view('main.php');
	        } else {
	        	$this->load->view('login_form.php');
	        }
	    }
	}
}
