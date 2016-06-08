$(document).ready(function() {

		  
         var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "user_inev.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("company").innerHTML = xmlhttp.responseText;
             }
         }
		 
		 
		 
});