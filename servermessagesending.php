<?php

include_once 'sendnotification.php';

if(isset($_POST['user_id']) && isset($_POST['message'])){
	
	$registration_id = array($_POST['user_id']);
	$message = array("GCM Notice" => $_POST['message']);
	
	$notificationClass = new SendNotification();	
	$notificationClass->sendPushNotificationToGCMSever($registration_id, $message);		
}

?>