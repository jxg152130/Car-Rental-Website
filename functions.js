
		 
		 function display_company_cars()
		 {
			 
			   var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("table").innerHTML=res;
            }
          }
		xmlhttp.open("GET","car_display_company.php?company="+document.getElementById("company").value+"&type="+document.getElementById("type").value,true);
        
		xmlhttp.send();

			 
		 }
		 
		 
		 
		 function changeSecond_1(first){
			 
			 
			 
			 
			 //alert("here");
			 
			//display_company_cars();
			 
			 
			if(document.getElementById("company_1").value=="other")
					 document.getElementById("company_name").disabled=false;
				 else
					document.getElementById("company_name").disabled=true;
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
			document.getElementById("type_1").innerHTML=res;
			
			
            
			}
          }
        xmlhttp.open("GET","inev_pop_type.php?company="+first,true);
        xmlhttp.send();
		
		
	
        }

		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 //
		 function changeSecond(first){
			 
			
			display_company_cars();
        var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("type").innerHTML=res;
			
			
            
			}
          }
        xmlhttp.open("GET","inev_pop_type.php?company="+first,true);
        xmlhttp.send();
		
		
		if(document.getElementById("company").value=="select")
		 {
			 
			var xmlhttp= new XMLHttpRequest();
		 xmlhttp.open("POST", "inev_type.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("type").innerHTML = xmlhttp.responseText;
				 }
         } 
			 
		 }
        }
		
		
		
		
		
		
		
		
		function changeThird_1(first,second){
        
		
		
				//display_company_cars();
		
			if(document.getElementById("type_1").value=="other")
					 document.getElementById("car_type").disabled=false;
				 else
					document.getElementById("car_type").disabled=true;
		var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            
			document.getElementById("model_1").innerHTML=res;
            }
          }
        xmlhttp.open("GET","inev_pop_model.php?company="+first+"&type="+second,true);
        xmlhttp.send();

        }
		
		
		
		
		
		
		
		
		
		
		
		function changeThird(first,second){
        
		if(first=="select"&& second=="select")
			{
				document.getElementById("table").innerHTML="";
			}
			else
		
				display_company_cars();
	
		var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("model").innerHTML=res;
			
            }
          }
        xmlhttp.open("GET","inev_pop_model.php?company="+first+"&type="+second,true);
        xmlhttp.send();

        }
		function hide(){
			
			
			
			if(document.getElementById("model_1").value=="other")
					 document.getElementById("car_model").disabled=false;
				 else
					document.getElementById("car_model").disabled=true;
		}
	//edited
		function display(third){
			
			if((third=="select"||third=="")&& $("#company").val()=="select"&&$("#type").val()=="select")
			{
				document.getElementById("table").innerHTML="";
			}
		
		else{
		var xmlhttp;
        if (window.XMLHttpRequest)
          {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
          }
        else
          {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
            var res=xmlhttp.responseText;
            document.getElementById("table").innerHTML=res;
            }
          }
		xmlhttp.open("GET","test.php?company="+document.getElementById("company").value+"&type="+document.getElementById("type").value+"&model="+third,true);
        
		xmlhttp.send();
		}
        }
			$temp_image="hi";
		$(document).ready(function(){
			//alert($temp_image);
$(".checkin").hide();
		$(".signup").hide();
	$(".signin").hide();
	 $("#showsignup").click(function() {
		 $(".signin").hide();
		$(".signup").show();
		$(".checkin").hide();
			}); 
	$("#showsignin").click(function() {
		$(".signup").hide();
		$(".signin").show();
		$(".checkin").hide();
	});
	$("#showcheckin").click(function() {
		$(".signup").hide();
		$(".signin").hide();
		$(".checkin").show();
	});
	//delete
		$("#erase").click(function()  {
			$("#change").hide();
    
    var r = confirm("Are you sure to delete!");
	  
    if (r == true) {
      var txt=$('input[type="radio"]:checked').val();
	 
	  $.ajax({
            type: "GET",
            url: "delete.php",
            data: { 'value':txt },   //If you want to pass data to php page
            success:function(response)
            {       
				display_company_cars();
              //display(document.getElementById("model").value);
			   //response from php page.
            }
        });
    } 
});

$("#showsignin").click(function()  {
		var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "inev.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("company").innerHTML = xmlhttp.responseText;
				 
             }
         }
});

$("#showsignup").click(function()  {
		document.getElementById("model").options.length = 0;
		document.getElementById("type").value="select";
		document.getElementById("table").innerHTML="";
});

$("#showcheckin").click(function()  {
		document.getElementById("model").options.length = 0;
		document.getElementById("type").value="select";
		document.getElementById("table").innerHTML="";
});


//modify
$("#update").click(function()  {
	$("#change").show();
    document.getElementById("erase").disabled =true;
	var txt=$('input[type="radio"]:checked').val();
      $("#ok").click(function()  {
	  if(($("#update_price").val()!="" && $.isNumeric($("#update_price").val()) && $("#update_price").val()>=0)==1){
		  
	  $.ajax({
            type: "GET",
            url: "update.php",
            data: { 'reg':txt,
					'price':$("#update_price").val()},   //If you want to pass data to php page
            success:function(response)
            {       
				display_company_cars();
				//display(document.getElementById("model").value);
				$("#change").hide();
				document.getElementById("erase").disabled =false;

			  
			   //response from php page.
            }
	  });
	  }
	  else{
		  document.getElementById("error").innerHTML ="please enter valid price";
	  }
	});
	$("#cancel").click(function()  {
	$("#change").hide();
    document.getElementById("erase").disabled =false;
		});		
});

//for adding car
$("#add_car").click(function()  {
    
	   $validation=0;
	   $company=0;
	   $model=0;
	   $type=0;
	   $old=1;
	   if($('#company_1').val()=="other"||$('#model_1').val()=="other"||$('#type_1').val()=="other")
		   $old=0;
	   
	  // alert($old);
	   
		if($('#company_1').val()=="other")
		{
			
			if($('#company_name').val()=="")
				$validation=1;
		}
		else if($('#type_1').val()=="other")
		{
			if($('#car_type').val()=="")
				$validation=1;
		}
		
		else if($('#model_1').val()=="other")
		{
			if($('#car_model').val()=="")
				$validation=1;
		}
		else
		{
			if($('#car_color').val()=="" || $('#car_plate').val()=="" || $('#car_price').val()=="")
				$validation=1;
			if(!($.isNumeric($('#car_price').val())))
				$validation=2;
			else{
				if($('#car_price').val()<0)
				$validation=2;
				
			}
		}

		
		
		
		
		
		$.ajax({
            type: "GET",
            url: "validation_number.php",
            data: {'plate':$('#car_plate').val()},   //If you want to pass data to php page
            success:function(data)
				{    //alert(data);
					if(data=="1")
						$validation=3;
						
		if($validation==1)
		
		{
			$('#unfilled').text("Please fill the fields");
			$('#filled').text("");
		}
		else if($validation==2)
		{
			$('#unfilled').text("Invalid price field");
			$('#filled').text("");
		}
		else if($validation==3)
		{
			
			$('#unfilled').text("Registration number already exists");
			$('#filled').text("");
		}
		
		else
		{	//alert($('#car_plate').val().trim().toLowerCase());
			$company=0;
			$model=0;
			$type=0;
			
			if($('#company_1').val()=="other")
				$company=$('#company_name').val().trim().toLowerCase();
			else
				$company=$('#company_1').val();
			
			
			if($('#type_1').val()=="other")
				$type=$('#car_type').val().trim().toLowerCase();
			else
				$type=$('#type_1').val();
			
			if($('#model_1').val()=="other")
				$model=$('#car_model').val().trim().toLowerCase();
			else
				$model=$('#model_1').val();
			
			$.ajax({
            type: "GET",
            url: "add.php",
            data: { 'price':$('#car_price').val(),
					'color':$('#car_color').val().trim().toLowerCase(),
					'plate':$('#car_plate').val().trim().toLowerCase(),
					'company':$company,
					'model':$model,
					'image':$temp_image,
					'type':$type,
					'old':$old
					},   //If you want to pass data to php page
            success:function(data)
				{       
					
					$('#filled').html("New car is added into database");
					$('#unfilled').text("");
					document.getElementById("company_name").disabled=false;
					document.getElementById("car_type").disabled=false;
					document.getElementById("car_model").disabled=false;
					$('#company_name').val("");
					$('#car_type').val("");
					$('#car_model').val("");
					$('#car_color').val("");
					$('#car_plate').val("");
					$('#car_price').val("");
					$('#company_1').val("select");
					$('#model_1').val("");
					$('#type_1').val("");
					//response from php page.
				}
			});
			
			
			
			
		}
					
				}
			});
		
		
		
		
		
		
	

	 
    		
		
    
});

$("#get_details").click(function()  {
			
		   var check;	
			var txt=$("#email_id").val();
			//alert(txt);
			//alert(txt);
			
		$.ajax({
            type: "GET",
            url: "get_details.php",
            data: { 'email':txt },   //If you want to pass data to php page
            success:function(data)
            {    
					if(data==="no")
					{
						$("#paid").hide();
						$("#result_1").text("no entry found");
					}
					else{
						 document.getElementById("email_id").disabled=true;
						$("#paid").show();
						$("#result_1").html(data);
						//alert($("#email_id").val());
					}
			}
        });

		
			
			//$("#paid").show();
			
			
			
			
    
     
});



$("#pay").click(function()  {
			
		 		//alert($("#email_id").val());
		
		$.ajax({
            type: "GET",
            url: "get_payment.php",
            data: { 'email':$("#email_id").val() },   //If you want to pass data to php page
            success:function(data)
            {    
				if(data==="no")
				{
					$("#result_1").text("Checked in sucessful");
					$("#paid").hide();
					document.getElementById("email_id").disabled=false;
				}
else
	$("#result_1").text(data);
//alert(data);
			}
        });
		
			
			
    
     
});



$("#c").click(function()  {
			
						$("#paid").hide();
						$("#result_1").text("");
			
			
    
     
});



});	 


//images

 $(document).ready(function (e) {
	//alert("here");
$("#register-form").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
//$('#loading').show();
$.ajax({
url: "image_save.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
//$('#loading').hide();
$("#message_1").html(data);
$temp_image=data;
}
});
}));
});
 
		

        
		
		 