function userLogin(){
 	

}

$(document).ready(function(){
	$("#login").attr("disabled",true);
	$("#username").blur(function(){
		var username=$("#username").val();
		var reg1= /^1\d{10}$/;
		var reg2=/^(\w-*\.*)+@(\w-?)+(\.\w{2,4})+$/;
		if(username)
			if(!reg1.test(username) && !reg2.test(username)){	
				$("#userspan").show().fadeOut(7000);
				$("#login").attr("disabled",true);
			}
			else{
				$("#userspan").hide();
				$("#login").attr("disabled",false);
			}
	});

})
	

