<?php
class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->helper('url');
	}

	public function index(){
		$username = get_cookie('username');
		$this->load->view('home_view',array('username'=>$username));
	}

	public function setusername(){
		$username = $this->input->post('username');

		
		//Setting cookie
		set_cookie('username',$username,86400); //86400 seconds is one day for this cookie

		redirect('home');
	}

	public function clearcookie(){
		delete_cookie('username');
		redirect('home');
	}

	
}
