$(document).ready(function(){
	console.log('will');
	$('.submitbutton').on("click",function(){
		///get token and validate it 
		var message = $("#message").val();	
		
		if(message == ""){
			alert("Message input field must be filled");			
			return;
		}	
		
		var user_id = $("#user_id").val();
		if(user_id == ""){
			alert("You must register with Google Cloud Messaging before sending message");			
			return;
		}	
		
		$.ajax({
			method: "POST",
            url: "servermessagesending.php",
            data: { message : message, user_id : user_id }
        })
        .done(function( msg ) {
            alert( "Data Saved: " + msg );
         });

		return false;
	});
	
});