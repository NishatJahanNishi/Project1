<?php
SESSION_start();
class users
{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="phpfront";
	public $conn;
	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if($this->conn->connect_errno)
		{
			die("connection failed".$this->conn->connect_errno);
		}
	}
	public function users1($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function users2($email,$pass)
	{
		$query=$this->conn->query("SELECT e,p FROM users1 WHERE e='$email' AND p='$pass'");
		$query->fetch_array(MYSQLI_ASSOC);
		if($query->num_rows>0)
		{
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function url($url)
	{
		header("location:".$url);
	}
}?>