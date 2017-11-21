<?php
	/**
	* 
	*/
	class supplier extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('supplier_model');

		}
		function index()
		{
			$data['supplier']=$this->supplier_model->ambil_data();
			$this->load->view('supplier_list',$data);
		}
		function tambah()
		{
			$data=array(
				'nama_supplier'=>set_value('nama_supplier'),
				'alamat'=>set_value('alamat'),
				'kota'=>set_value('kota'),
				'telepon'=>set_value('telepon'),
				'id_supplier'=>set_value('id_supplier'),
				'button'=>'Tambah',
				'action'=>site_url('supplier/tambah_aksi'),
			);
			$this->load->view('supplier_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				'nama_supplier'=>$this->input->post('nama_supplier'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'telepon'=>$this->input->post('telepon'),
			);
			$this->supplier_model->tambah_data($data);
			redirect(site_url('supplier'));
		}
		function delete($id)
		{
			$this->supplier_model->hapus_data($id);
			redirect(site_url('supplier'));
		}
		function edit($id)
		{
			$sp=$this->supplier_model->ambil_data_id($id);
			$data=array(
				'nama_supplier'		=>set_value('nama_supplier',$sp->nama_supplier),
				'alamat'		=>set_value('alamat',$sp->alamat),
				'kota'			=>set_value('kota',$sp->kota),
				'telepon'		=>set_value('telepon',$sp->telepon),
				'id_supplier'		=>set_value('id_supplier',$sp->id_supplier),
				'button'		=>'Edit',
				'action'		=>site_url('supplier/edit_aksi'),
			);
			$this->load->view('supplier_form',$data);
		}
		function edit_aksi()
		{
			$data=array(
				'nama_supplier'=>$this->input->post('nama_supplier'),
				'alamat'=>$this->input->post('alamat'),
				'kota'=>$this->input->post('kota'),
				'telepon'=>$this->input->post('telepon'),
			);
			$id=$this->input->post('id');
			$this->supplier_model->edit_data($id,$data);
			redirect(site_url('supplier'));
		}
	}
	?>