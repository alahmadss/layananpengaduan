<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
        $data['listlapor'] = $this->modelpengaduan->listpengaduan();
		$this->load->view('mainhome_admin',$data);
    }
    public function inputlapor(){
        $this->load->view('form_pengaduan');
    }
    public function user(){
        $data['listuser'] = $this->modelpengaduan->listuser();
        $this->load->view('user_list',$data);
    }
    public function listlapor(){
        $data['listlapor'] = $this->modelpengaduan->listpengaduan();
        $this->load->view('tabel_pengaduan',$data);
    }
    public function simpanlapor(){
		$this->modelpengaduan->simpanlapor();
		redirect('admin/listlapor');
    }
    public function deletelaporan($id){
		$result = $this->modelpengaduan->deletelaporan($id);
		redirect(base_url('admin/listlapor'));
    }
    public function deleteuser($id){
		$result = $this->modelpengaduan->deleteuser($id);
		redirect(base_url('admin/user'));
    }
    public function previewlaporan($id){
		$data['laporanpreview'] = $this->modelpengaduan->previewlaporan($id);
		$this->load->view('preview_laporan',$data);
    }
    public function registeradmin(){
		$this->load->view('view_regadmin');
	}
	public function regsimpan(){
		$this->modelpengaduan->regsimpan();
		redirect('admin/user');
	}
}