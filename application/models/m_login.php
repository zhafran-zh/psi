<?php
	class m_login extends CI_Model{
		public function login(){
			$query=$this->db->get_where('user',array('user'=>$this->input->post('user'),
			'password'=>$this->input->post('pass')));
			return $query->row();
		}
	}
?>