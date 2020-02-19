<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function user_register($username, $password, $email) {
		
		$query = "INSERT INTO Users (Username, Email, Password) VALUES ('".$username."','".$email."','".$password."');";
		
		if ($this->db->simple_query($query))	return TRUE;
		else 	return FALSE;
	}

	public function user_login($username, $password) {
		
		$user = array();

		$query = $this->db->query( "SELECT * FROM Users WHERE Username = '".$username."';" );
		$row = $query->row();
		if (isset($row))
		{
	        $user['id'] = $row->Faculty_ID;
	        $user['username'] = $row->Username;
	        $user['email'] = $row->Email;
	        $user['created_on'] = $row->Created_On;

	        if (strcmp($password, $row->Password) == 0) {
				return $user;
			}    
		}
		return FALSE;
	}
}
?>