$(document).ready(function() {
	//alert("here");
	$(".signup").hide();
	$(".signin").hide();
	 $("#showsignup").click(function() {
		 $(".signin").hide();
		$(".signup").show();
			}); 
	$("#showsignin").click(function() {
		$(".signup").hide();
		$(".signin").show();
	});
	
	var chk = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
$("#signUp").click(function() {
	
var name = $.trim($("#user_name").val());
var email =$.trim( $("#user_email").val());
var password1 = $.trim($("#password").val());
var cpassword = $.trim($("#cpassword").val());
var licence = $.trim($("#licence").val());
var address = $.trim($("#address").val());
if (name == '' || email == '' || password1 == '' || cpassword == '' || licence == '' ||address == '' ) {
$("#unfilled").html("<p>Please fill all the values</p>");
$("#emptyp").text("");
$("#filled").text("");
$("#emptypc").text("");
$("#check-e").text("");

return false;
}
else if(!chk.test(email))
{
 $("#check-e").html('<p>Please enter valid email</p>');
 $("#unfilled").text("");
$("#emptypc").text("");
$("#emptyp").text("");
$("#filled").text("");

 return false;
}
 else if ((password1.length) < 8) {
$("#emptyp").html("<p>Password should atleast 8 character in length</p>");
$("#unfilled").text("");
$("#emptypc").text("");
$("#filled").text("");
$('#check-e').text("");
return false;
}
 else if (password1!=cpassword) {
	 $("#emptyp").text("");
$("#unfilled").text("");
$("#filled").text("");
$('#check-e').text("");
$("#emptypc").html("<p>Your passwords doesn't match. Try again</p>");
return false;
}


 /* if (name != '' && email != '' && password1 != '' && cpassword != '' && licence != '' && address != '' && ((password1.length) < 8)
	 && (password1 == cpassword))  */
	else {
		//var myData='user_name='+name+'&password1='+password1+'&user_email='+email+'&licence='+licence+ '&address='+address;

  $.ajax({
    url : "dbconfig.php",
    type: "POST",
    data : {'user_name': name,'password1': password1,'user_email': email, 'licence': licence, 'address': address},
    success: function(html)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
      //  $("#status_text").html(data);
        $('#user_name').val('');
        $('#password').val('');
        $('#user_email').val('');
        $('#licence').val('');
        $('#address').val('');
        $('#cpassword').val('');
		$("#filled").html(html);
		$("#emptyp").text("");
$("#unfilled").text("");
$("#check-e").text("");
$("#emptypc").text("");

         }

});  


return false;}
});

$("#signIn").click(function()
{
	var email = $("#user_email_signin").val();
var password1 = $("#password_signin").val();
if (email == '' || password1 == ''  ) {
$("#unfilled_singin").html("<p>Please fill all the values</p>");
}
else{
	
$.ajax({
    url : "dblogin.php",
    type: "POST",
    data : {'password1': password1,'user_email': email},
    success: function(data)
     {
        //if success then just output the text to the status div then clear the form inputs to prepare for new data
      //  $("#status_text").html(data);
        //header('Location: http://www.google.com/');
		//$("#unfilled_singin").html("<p>Please fill all th e values</p>");

 if($.trim(data)==="U")
{
	//$("#unfilled_singin").html(data); 
	window.location.href =  "http://localhost/userpagemain.php"; 
}
else if($.trim(data)==="A")
	window.location.href =  "http://localhost/admin_page.php"; 
else      
	   $("#unfilled_singin").html(data); 

} 



});

}
});




});


