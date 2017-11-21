<?php 
/**
* 
*/
class obat_keluar_model extends CI_Model
{
	public $nama_table 	= 'obat_keluar';
	public $id 			= 'id_faktur';
	public $order 		= 'DESC';
	function __construct()
	{
		parent::__construct();
	}

	//untuk mengambil data seluruh
	function ambil_data(){
		$this->db->distinct();
		$this->db->select('obk.id_faktur, obk.tanggal, obk.pasien, obk.keterangan, obt.nama_obat');
		$this->db->from('obat_keluar obk');
		$this->db->join('obat obt', 'obk.id_obat = obt.id_obat');
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