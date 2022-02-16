<?php
	class Admin_mod extends CI_Model
	{
		public function fee_ins($data)
		{
			$this->db->insert("ifeesetup",$data);
		}
	}
?>