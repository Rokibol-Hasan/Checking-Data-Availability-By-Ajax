<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Database.php');

class Project{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}



	public function checkUserName($username){
		$query = "SELECT * FROM tbl_user WHERE username = '$username'";
		$getUser = $this->db->select($query);
		if ($username=="") {
			echo "<span class='error'>Please Enter Username</span>";
			exit();
		}elseif ($getUser) {
			echo "<span class='error'>Username Not Available</span>";
			exit();
		}else {
			echo "<span class='success'>Username Available</span>";
			exit();
		}
	}

	
}
?>