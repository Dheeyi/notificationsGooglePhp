<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GCM Push Notification</title>  
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
    <script language="JavaScript" type="text/javascript" src="jquery-2.2.0.min.js"></script> 
    <script language="JavaScript" type="text/javascript" src="js.js"></script> 
   
    
    <style>
    
    body{
    	background-color: #403f22;
    }
    body #form_wrapper{
    	width:800px;
    	height:400px;
    	margin:200px auto;
    	border: 1px solid #FFCC00;
    	text-align: center;
    }
    #form_wrapper > h1{
    	color:#FFFFFF;
    	text-align:center;
    }
    textarea{
    	border: 2px solid #FFCC00;
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
		width:96px;
		height: 60px;
		background-color: #FFCC00;
		border: 2px solid #000000;
		margin-top:24px;
		padding:12px;
	}
	</style>
	
	
</head>
<body>
  	
<div id="form_wrapper">
  <h1>GCM Push Notification Backend</h1>
  <?php 
    include_once 'database.php';
	$db = new DatabaseLayer();
	$user_id = $db->getRegistrationId();
  
   ?>	
	<form>	
		<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id ? $user_id : 0 ?>">			                                                      
		<textarea rows="5" id="message" name="message" cols="45" placeholder="Write push notification message"></textarea> 
		<p><a class="submitbutton submit-button"> Send data to GCM </a></p>
		
		<!--<p><input type="submit"  value="submit" name="submit" id="submitbutton" /></p>-->
	</form>
</div>


</body>
</html>