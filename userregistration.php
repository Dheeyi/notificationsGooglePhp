<?php

include_once 'database.php';
include_once 'sendnotification.php';

class UserRegistrationFromDevice{
	
	public function __constructor(){
		
	}
	
	public function saveNewRegisteredUser($user_registration_id){
						
		$db = new DatabaseLayer();
		$db->insertUserRegistrationId($user_registration_id);
		
		// $registatoin_ids = array($user_registration_id);
  //      $message = array("GCM Push" => "Testing Testing");
		
		// $severNotification = new SendNotification();
 
  //      $severNotification->sendPushNotificationToGCMSever($registatoin_ids, $message);
	}
	
	public function saveNewUser($nombre,$apellido,$ci,$usuario,$password,$email,$imdei){

		$db = new DatabaseLayer();
		$db->newUserResgiter($nombre,$apellido,$ci,$usuario,$password,$email,$imdei);
	}
	
	public function saveNewCar($placa, $tipo, $modelo, $color, $cidueno){

		$db = new DatabaseLayer();
		$db->newUserCar($placa, $tipo, $modelo, $color, $cidueno);
	}
}

?>