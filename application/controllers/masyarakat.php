<?php
class masyarakat extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('view_login');
    }
}