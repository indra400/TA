<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//$this->load->model('m_data');
		$this->load->helper('url');
	}
	
	public function index() {
	//if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
	//	redirect("index.php/admin/login");
	//}
		
		$a['page']	= "d_amain";
		
		$this->load->view('buah/halaman', $a);
	}
	
	// menampilkan database
	function idbuah(){
		//ambil variabel URL
		$mau_ke					= $this->uri->segment(3);
		$idu					= $this->uri->segment(4);
		if ($mau_ke == "del") {
			$this->db->query("DELETE FROM t_id_buah WHERE id_buah='$idu'");
			redirect('admin/idbuah');
		} else if ($mau_ke == "update" ) {
			$a['data'] = $this->db->query("SELECT * FROM t_id_buah WHERE id_buah='$idu'")->result();
			$this->load->view('buah/upbuah',$a);
		} else if ($mau_ke == "add" ) {
			$this->load->view('buah/inbuah.php');
		} else {
			$a['data'] = $this->db->query("SELECT * FROM t_id_buah")->result();
			$a['page'] = "buah";
			
			$this->load->view('buah/halaman',$a);
		}
		
		
	}
	function stok_gudang(){
		$a['data'] = $this->db->query("SELECT * FROM t_stok_gudang")->result();
		$this->load->view('buah/stok_gudang',$a);
	}
	function stok_pasar(){
		$a['data'] = $this->db->query("SELECT * FROM t_stok_pasar")->result();
		$this->load->view('buah/stok_pasar.php',$a);
	}
	function user_pegawai(){
		$a['data'] = $this->db->query("SELECT * FROM t_user_pegawai")->result();
		$this->load->view('buah/user_pegawai.php',$a);
	}
	function user_pelanggan(){
		$a['data'] = $this->db->query("SELECT * FROM t_user_pelanggan")->result();
		$this->load->view('buah/user_pelanggan.php',$a);
	}
	function user_suplier(){
		$a['data'] = $this->db->query("SELECT * FROM t_user_suplier")->result();
		$this->load->view('buah/user_suplier.php',$a);
	}
	function id_jabatan(){
		$a['data'] = $this->db->query("SELECT * FROM t_id_jabatan")->result();
		$this->load->view('buah/id_jabatan.php',$a);
	}
	function transaksi_gudang(){
		$a['data'] = $this->db->query("SELECT * FROM t_transaksi_gudang")->result();
		$this->load->view('buah/transaksi_gudang.php',$a);
	}
	function transaksi_pasar(){
		$a['data'] = $this->db->query("SELECT * FROM t_transaksi_pasar")->result();
		$this->load->view('buah/transaksi_pasar.php',$a);
	}
	function transaksi_suplier(){
		$a['data'] = $this->db->query("SELECT * FROM t_transaksi_suplier")->result();
		$this->load->view('buah/transaksi_suplier.php',$a);
	}
	//function perusahaan(){
	//		$a['data']		= $this->db->query("SELECT * FROM tr_instansi WHERE id = '1' LIMIT 1")->row();
	//		$a['page']		= "f_pengguna";
	//}
	
	// insert database
	
	function tambah_buah(){
		$idbuah = $this->input->post('id_buah');
		$namabuah = $this->input->post('nama_buah');
		$satuan = $this->input->post('satuan');
 
		$this->db->query("INSERT INTO t_id_buah VALUES ('$idbuah','$namabuah,','$satuan')");
		redirect('admin/idbuah');
	}

 
	public function halo(){
		echo "About";
		$data['web'] = "Tentang Program Skripsi Indra";
		$this->load->view('view_about',$data);
	}
	public function aku () {
		$data = array(
			'judul' => "membuat view array pada codeigniter",
			'tutorial' => "Codeigniter"
			);
			$this->load->view('view_belajar',$data);
	}
	
}
?>