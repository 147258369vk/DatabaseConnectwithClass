<?php

class connectDB{

	public $hostname="localhost";
	public $username="root";
	public $password="";
	public $dbname="classdb";
	public $conn;

	function __construct(){
		$this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->dbname) or die("connection is not established");
	}


	function insertData($table,$data)
	{
		// $data="insert into register(name,email,contact,password)values('$nm','$em','$p','$cn');";

		// $query=mysqli_query($this->conn,$data) or die("query is not executed" .mysqli_error($this->conn));

		// if(mysqli_affected_rows($this->conn)>0)
		// {
		// 	return true;
		// }
		// else
		// {
		// 	return false;
		// }


			// $no_of_Arguments=count($data);

			if($table=='register')
			{
				
				$n=$data["name"];
				$e=$data["email"];
				$p=$data["password"];
				$c=$data["contact"];
				
				$d="insert into register(name,email,password,contact)values('$n','$e','$p','$c');";


			}
			else if($table=="product"){
				$n=$data["name"];
				$p=$data["price"];
				$q=$data["qty"];
				
				
				$d="insert into product(pname,price,qty)values('$n','$p','$q');";

			}

			$query=mysqli_query($this->conn,$d) or die("query is not executed" .mysqli_error($this->conn));

		if(mysqli_affected_rows($this->conn)>0)
		{
			return true;
		}
		else
		{
			return false;
		}

			}


			// function display($table)
			// {
			// 	if($table=="register")
			// 	{
			// 		$q="select * from register;"
			// 	}
			// else if($table="product")
			// {
			// 	$q="select * from product;"
			// }
			// }



	

}



?>