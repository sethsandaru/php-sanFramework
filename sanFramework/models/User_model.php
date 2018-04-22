<?php

class User_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	// get all demo
	public function get_all()
	{
		$qr = $this->db->query("SELECT * FROM users");
		
		$data = [];
		while ($r = $qr->fetch_assoc())
			$data[] = $r;
		
		$qr->close();
		return $data;
	}
}