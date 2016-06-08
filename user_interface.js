$(document).ready(function() {

		  
         var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "User_interface.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("load").innerHTML = xmlhttp.responseText;
             }
         }
		 
		 
		 
});