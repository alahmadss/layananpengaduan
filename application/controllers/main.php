<?php
class main extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('main_home');
	}
	public function register(){
		$this->load->view('view_register');
	}
	public function daftarsimpan(){
		$this->modelpengaduan->daftarsimpan();
		redirect('login');
	}
}
