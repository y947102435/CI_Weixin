<?php
class Publish_model extends CI_Model{

	// 初始化加载数据库
	public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}

	public function get_lists()
	{
		$this->db->join('publish', 'publish.title_id = engineer_position.id', 'left');
		return $query->result_array();
	}



}