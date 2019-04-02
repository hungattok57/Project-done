<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function add_books($tensach,$tacgia,$tenchuyenmuc,$trichdan,$gioithieu,$anhsach,$filesach)
	{
		$dulieu = array(
			'tensach' =>$tensach ,
			'tacgia' =>$tacgia ,
			'tenchuyenmuc' =>$tenchuyenmuc ,
			'trichdan' =>$trichdan ,
			'gioithieu' =>$gioithieu ,
			'anhsach' =>$anhsach ,
			'filesach' =>$filesach
		 );
		$this->db->insert('sach', $dulieu);
		return $this->db->insert_id();
	}
	public function show()
	{
		$this->db->select('*');
		$show=$this->db->get('sach');
		$show=$show->result_array();
		return $show;
	}
	public function Delete($id)
	{
		$this->db->where('id', $id);
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */