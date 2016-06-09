<?php

if(isset($_POST['registrationId'])){
	$registration_id = $_POST['registrationId'];
	include_once 'userregistration.php';	
    $UserRegistrationClass = new UserRegistrationFromDevice();
    $UserRegistrationClass->saveNewRegisteredUser($registration_id);
}

?>