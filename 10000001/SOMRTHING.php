<?php
include_once 'categoria.php';

class DBMySQL
{
	private static $servername = "localhost";
	private static $username = "root";
	private static $password = "";
	private static $db = "koolitused";

	public static function getAllCategorias()
	{
		$allcat=array();
		
		//
		$conn = mysqli_connect(self::$servername, self::$username,self::$password,self::$db);
		//
		if (!$conn) {
			die("Connection failed: " .mysqli_connect_error());
		}
		else
		{
			if ($result = $result->fetch_object()) {
				while ($obj = $result->fetch_object()) {
					$allcat[]=new Categoria($obj->id,$obj->Nimetus,$obj->Kirjeldus);
				}
				$result->close();
			}
			$conn->close();
			
			return $allcat;
		}
	}
	
	public static function getCategoriaById($id)
	{
		//
		$conn = mysqli_connect(self::$servername, self::$username,self:: $pasword,self::$db);
		
		//
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		else
		{
			if ($result = $conn->query("SELECT id,Nimetus,Kirjeldus FROM kategooria WHERE id=".(string)$id))
			{
			while ($obj = result->fetch_object()) {
					
				$allcat[]=new Categoria($obj->id,$obj->Nimetus, $obj->Kirjeldus);
			}
				
			//
			$result->close();
			}
		}
		$conn->close();
		
		return $allcat;
	}
		
		
		
		
		
		
		
		
		
		
		
		