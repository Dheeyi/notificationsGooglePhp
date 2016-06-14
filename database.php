<?php

include_once 'db.php';


 class DatabaseLayer{
		
 	private $tables;
	
	public function __constructor(){
		
		$this->tables = "user";
	}
	
	public function newUserCar($placa, $tipo, $modelo, $color, $cidueno){
		
		$com = new DbConnect();
		$sql = "insert into car (placa, tipo, modelo, color, ci_dueno) values ('$placa', '$tipo','$modelo','$color', '$cidueno')";			
	    mysqli_query($com->getDb(), $sql);
	}
	
	public function newUserResgiter($nombre,$apellido,$ci,$usuario,$password,$email,$imdei){
		
		$com = new DbConnect();
		$sql = "insert into users (ci, nombre, apellido, usuario, password, email, imei) values ('$ci', '$nombre','$apellido','$usuario','$password', '$email', '$imdei')";			
	    mysqli_query($com->getDb(), $sql);
	}
	
	public function insertUserRegistrationId($registration_id){
		
		if(!$this->getAllRegisteredUsers($registration_id)){
			$com = new DbConnect();	
			$sql = "insert into user (gcm_regid, created_at) values ('$registration_id', NOW())";			
		    mysqli_query($com->getDb(), $sql);
		}
	}
	
	public function getAllRegisteredUsers($registration_id){
		$com = new DbConnect();
		$sql = "Select * from  user where gcm_regid = " + $registration_id;
		$result = mysqli_query($com->getDb(), $sql);
		if(count($result) == 1){
			return true;
		}
		return false;
	}
	
	public function getRegistrationId(){
		
		$com = new DbConnect();
		$sql = "select gcm_regid from user limit 1";
		$result = mysqli_query($com->getDb(), $sql);
		$row = mysqli_fetch_row($result);		
		//print_r($row[0]);
		if(count($row) == 1){
			return $row[0];
		}
		return false;
	}
	
}
	
?>