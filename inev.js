$(document).ready(function() {
document.getElementById("company_name").disabled=true;
document.getElementById("car_type").disabled=true;
document.getElementById("car_model").disabled=true;
		  $("#change").hide();
		  $("#paid").hide();

         var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "inev.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("company").innerHTML = xmlhttp.responseText;
				 document.getElementById("company_1").innerHTML = xmlhttp.responseText;
             }
         }
		 
		 
		 
});

$(document).ready(function() {

		
		 var xmlhttp1 = new XMLHttpRequest();
		 xmlhttp1.open("POST", "inev_type.php", true);
         xmlhttp1.send();
         xmlhttp1.onreadystatechange = function() {
             if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
                 document.getElementById("type").innerHTML = xmlhttp1.responseText;
				 }
         }
		 
		 
		 
		 
		 
});