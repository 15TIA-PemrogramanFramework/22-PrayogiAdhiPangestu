<?php
	/**
	* 
	*/
	class obat_masuk extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('obat_masuk_model');
			$this->load->model('supplier_model');
		}
		function index()
		{
			$data['obat_masuk']=$this->obat_masuk_model->ambil_data();
			$this->load->view('obat_masuk_list',$data);
		}
		function tambah()
		{
			$data=array(
				'tanggal'=>set_value('tanggal'),
				'id_supplier'=>set_value('id_supplier'),
				'supplier'=> $this->supplier_model->ambil_data(),
				'keterangan'=>set_value('keterangan'),
				'id_faktur'=>set_value('id_faktur'),
				'button'=>'Tambah',
				'action'=>site_url('obat_masuk/tambah_aksi'),
			);
			$this->load->view('obat_masuk_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'id_supplier'=>$this->input->post('id_supplier'),
				'keterangan'=>$this->input->post('keterangan'),
			);
			$this->obat_masuk_model->tambah_data($data);
			redirect(site_url('obat_masuk'));
		}
		function delete($id)
		{
			$this->obat_masuk_model->hapus_data($id);
			redirect(site_url('obat_masuk'));
		}
		function edit($id)
		{
			$obtm=$this->obat_masuk_model->ambil_data_id($id);
			$data=array(
				'tanggal'		=>set_value('tanggal',$obtm->tanggal),
				'supplier' 		=> $this->supplier_model->ambil_data(),
				'id_supplier'	=>set_value('id_supplier',$obtm->id_supplier),
				'keterangan'	=>set_value('keterangan',$obtm->keterangan),
				'id_faktur'		=>set_value('id_faktur',$obtm->id_faktur),
				'button'		=>'Edit',
				'action'		=>site_url('obat_masuk/edit_aksi'),
			);
			$this->load->view('obat_masuk_form',$data);
		}
		function edit_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'keterangan'=>$this->input->post('keterangan'),
				'id_supplier'=>$this->input->post('id_supplier'),
			);
			$id=$this->input->post('id');
			$this->obat_masuk_model->edit_data($id,$data);
			redirect(site_url('obat_masuk'));
		}
	}
	?>