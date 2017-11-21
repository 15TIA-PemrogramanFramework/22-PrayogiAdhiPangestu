<?php 
/**
* 
*/
class obat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('obat_model');
	}
	function index()
	{
		$data['obat']=$this->obat_model->ambil_data();
		$this->load->view('obat_list',$data);
	}
	function tambah()
	{
		$data=array(
			'nama_obat'=>set_value('nama_obat'),
			'kategori'=>set_value('kategori'),
			'stok'=>set_value('stok'),
			'satuan'=>set_value('satuan'),
			'id_obat'=>set_value('id_obat'),
			'button'=>'Tambah',
			'action'=>site_url('obat/tambah_aksi'),
		);
		$this->load->view('obat_form',$data);
	}
	function tambah_aksi()
	{
		$data=array(
			'nama_obat'=>$this->input->post('nama_obat'),
			'kategori'=>$this->input->post('kategori'),
			'stok'=>$this->input->post('stok'),
			'satuan'=>$this->input->post('satuan'),
		);
		$this->obat_model->tambah_data($data);
		redirect(site_url('obat'));
	}
	function delete($id)
	{
		$this->obat_model->hapus_data($id);
		redirect(site_url('obat'));
	}
	function edit($id)
	{
		$obt=$this->obat_model->ambil_data_id($id);
		$data=array(
			'nama_obat'		=>set_value('nama_obat',$obt->nama_obat),
			'kategori'		=>set_value('kategori',$obt->kategori),
			'stok'			=>set_value('stok',$obt->stok),
			'satuan'		=>set_value('satuan',$obt->satuan),
			'id_obat'		=>set_value('id_obat',$obt->id_obat),
			'button'		=>'Edit',
			'action'		=>site_url('obat/edit_aksi'),
		);
		$this->load->view('obat_form',$data);
	}
	function edit_aksi()
	{
		$data=array(
			'nama_obat'=>$this->input->post('nama_obat'),
			'kategori'=>$this->input->post('kategori'),
			'stok'=>$this->input->post('stok'),
			'satuan'=>$this->input->post('satuan'),
		);
		$id=$this->input->post('id');
		$this->obat_model->edit_data($id,$data);
		redirect(site_url('obat'));
	}
}
?>