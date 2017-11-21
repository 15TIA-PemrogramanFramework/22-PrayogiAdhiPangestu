<?php
	/**
	* 
	*/
	class obat_keluar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('obat_keluar_model');
			$this->load->model('obat_model');
		}
		function index()
		{
			$data['obat_keluar']=$this->obat_keluar_model->ambil_data();
			$this->load->view('obat_keluar_list',$data);
		}
		function tambah()
		{
			$data=array(
				'tanggal'=>set_value('tanggal'),
				'pasien'=>set_value('pasien'),
				'id_obat'=>set_value('id_obat'),
				'obat'=>$this->obat_model->ambil_data(),
				'keterangan'=>set_value('keterangan'),
				'id_faktur'=>set_value('id_faktur'),
				'button'=>'Tambah',
				'action'=>site_url('obat_keluar/tambah_aksi'),
			);
			$this->load->view('obat_keluar_form',$data);
		}
		function tambah_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'pasien'=>$this->input->post('pasien'),
				'id_obat'=>$this->input->post('id_obat'),
				'keterangan'=>$this->input->post('keterangan'),
			);
			$this->obat_keluar_model->tambah_data($data);
			redirect(site_url('obat_keluar'));
		}
		function delete($id)
		{
			$this->obat_keluar_model->hapus_data($id);
			redirect(site_url('obat_keluar'));
		}
		function edit($id)
		{
			$obtm=$this->obat_keluar_model->ambil_data_id($id);
			$data=array(
				'tanggal'		=>set_value('tanggal',$obtm->tanggal),
				'pasien'		=>set_value('pasien',$obtm->pasien),
				'obat' 		=> $this->obat_model->ambil_data(),
				'id_obat'	=>set_value('id_obat',$obtm->id_obat),
				'keterangan'			=>set_value('keterangan',$obtm->keterangan),
				'id_faktur'		=>set_value('id_faktur',$obtm->id_faktur),
				'button'		=>'Edit',
				'action'		=>site_url('obat_keluar/edit_aksi'),
			);
			$this->load->view('obat_keluar_form',$data);
		}
		function edit_aksi()
		{
			$data=array(
				'tanggal'=>$this->input->post('tanggal'),
				'pasien'=>$this->input->post('pasien'),
				'id_obat'=>$this->input->post('id_obat'),
				'keterangan'=>$this->input->post('keterangan'),
			);
			$id=$this->input->post('id');
			$this->obat_keluar_model->edit_data($id,$data);
			redirect(site_url('obat_keluar'));
		}
	}
	?>