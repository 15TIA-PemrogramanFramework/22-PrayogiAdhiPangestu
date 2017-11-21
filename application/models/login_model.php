<?php 
/**
* 
*/
class login_model extends CI_Model
{
	public $nama_table 	= 'user';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>