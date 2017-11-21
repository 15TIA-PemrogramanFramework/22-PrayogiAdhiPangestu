<?php 
/**
* 
*/
class obat_model extends CI_Model
{
	public $nama_table 	= 'obat';
	public $id 			= 'id_obat';
	public $order 		= 'DESC';
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}
	function tambah_data($data){
		return $this->db->insert($this->nama_table,$data);
	}
	function hapus_data($id){
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);
	}
	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}
}
?>