<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GCM Push Notification</title>  
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script language="JavaScript" type="text/javascript" src="jquery-2.2.0.min.js"></script> 
    <script type="text/javascript" src="js.js"></script>
    
    <style>
    
    body{
    	background-image: url("mapa.jpg");
    	background-size: 490px;
    	background-attachment: fixed;
    	background-position: center; 
    }
    body #form_wrapper{
    	width:800px;
    	height:400px;
    	margin:100px auto;
    	background-color: #C1EABC;
    	text-align: center;
    }
    #form_wrapper > h1{
    	rgba(30, 29, 33, 0.98);
    	text-align:center;
    }
    textarea{
    	border: 2px solid #96c56f;
		margin-bottom: 10px;			
		text-align: center;
		padding: 10px;
		font-size: 25px;
		font-weight: bold;
	}
	input{
		background-color: #FFCC00;
		border: 5px solid #fff;
		padding: 10px;
		cursor: pointer;
		color: #fff;
		font-weight: bold;
	}
	.submit-button{
		width:196px;
		background-color: #ffcc00;
		border: 2px solid #96c56f;
		padding:12px;
	}
	</style>
	
	
</head>
<body>
  	
<div id="form_wrapper">
  <h1>Cuidando mi Vehiculo</h1>
  <h2>Envio de mensajes de alerta inmediata ante robos y accidentes.</h2>
  <?php 
    include_once 'database.php';
		$db = new DatabaseLayer();
		$user_id = $db->getRegistrationId();
  
   ?>	
	<form>	
		<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id ? $user_id : 0 ?>">			                                                      
		<textarea rows="5" id="message" name="message" cols="45" placeholder="Escriba el mensaje a enviar al dueno del vehiculo"></textarea> 
		<!--<p><a class="submit-button"> Enviar Notificacion GCM </a></p>-->
		<p><button class="submitbutton submit-button">Send Notification</button><p>
		<!--<p><input type="submit"  class="submitbutton submit-button" value="GCM" name="submit" id="submitbutton" /></p>-->
	</form>
</div>


</body>
</html>