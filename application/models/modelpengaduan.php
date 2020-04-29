<?php
class modelpengaduan extends CI_Model{
    function cari_user($username, $password){
		$query = $this->db->query("select * from user where username='$username' and password= '$password'");
		return $query;
    }
    function listpengaduan(){
		$listlapor = $this->db->query('select * from pengaduan');
		return $listlapor;
    }
    function listuser(){
		$listuser = $this->db->query('select * from user');
		return $listuser;
	}
    public function daftarsimpan(){
		$arraydata = array('nik' => $this->input->post('nik'),
							'nama' => $this->input->post('nama'),
                            'username' => $this->input->post('username'),
                            'password' => $this->input->post('password'),
                            'telp' => $this->input->post('telp'));
		$this->db->insert('user',$arraydata);
    }
    public function regsimpan(){
		$arraydata = array('id_user' => $this->input->post('iduser'),
							'nik' => $this->input->post('nik'),
                            'nama' => $this->input->post('nama'),
                            'username' => $this->input->post('username'),
                            'password' => $this->input->post('password'),
                            'telp' => $this->input->post('telp'),
                            'level' => $this->input->post('level'));
		$this->db->insert('user',$arraydata);
    }
    public function simpanlapor(){
		$arraydata = array('id_pengaduan' => $this->input->post('idpengaduan'),
							'tgl_pengaduan' => $this->input->post('tanggalpengaduan'),
                            'nik' => $this->input->post('nik'),
                            'isi_laporan' => $this->input->post('isi'),
                            'gambar' => $this->uploadfoto());
        $this->db->insert('pengaduan',$arraydata);
    }
    function uploadfoto(){
		$config['upload_path'] = './fileupload/';
		$config['allowed_types'] = 'jpg|png';
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		$datafile = $this->upload->data();
		$link = $config['upload_path'].$datafile['file_name'];
		return $link;
	}
    function deletelaporan($id){
		$this->db->where('id_pengaduan', $id);
		$this->db->delete('pengaduan');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    function deleteuser($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    function previewlaporan($id){
		$this->db->where('id_pengaduan', $id);
		$query = $this->db->get('pengaduan');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
}