<?php

class User extends CI_Model{
	function add_user($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
					VALUES (?,?,?,?,NOW(),NOW())";
		$this->db->query($query, $post);
	}
	function get_user($info)
	{
		$query = "SELECT * FROM users
					WHERE email = ? && password = ?";
		$values = array($info['email'],$info['password']);
		return $this->db->query($query, $values)->row_array();

	}
}