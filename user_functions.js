
		 function changeSecond(first){
			 
			 setcompany(first);
			 if(first == "Company"){
				 alert("Invalid Entry");
				 
			 }
			 else{
			if(document.getElementById('type').value == 'Car Type'){
			 changebody(first);
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
        xmlhttp.open("GET","user_filter_company.php?company="+first,true);
        xmlhttp.send();}
		else{
			display(document.getElementById('type').value);
			
		}
		 }}
		
		
		
		function changebody(first){
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
            document.getElementById("load").innerHTML=res;
            }
          }
        xmlhttp.open("GET","user_test.php?company="+first,true);
        xmlhttp.send();
        }
		
	
	

        
		
		function display(second){
			settype(second);
			if(second == "Car Type"){
				alert("Invalid Entry");
			}
			else{
			
			/*if(document.getElementById("company").value == null){
				alert("hello");
			changefirst(second);}*/
		var val = document.getElementById('company').value;
		if( val == 'Company'){
			changefirst(second);
		}
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
            document.getElementById("load").innerHTML=res;
            }
          }
		xmlhttp.open("GET","user_filter_body.php?company="+document.getElementById("company").value+"&type="+second,true);
        
		xmlhttp.send();

        }}
		
		
		function changefirst(second){
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
            document.getElementById("company").innerHTML=res;
            }
          }
        xmlhttp.open("GET","user_changecompany.php?type="+second,true);
        xmlhttp.send();
			
		}
		
		function refresh_body(){
			 var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "User_interface.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("load").innerHTML = xmlhttp.responseText;
             }
         }
			
		}
		function refresh_comapny(){
			var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "user_inev.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("company").innerHTML = xmlhttp.responseText;
             }
         }
		}
		
		function refresh_type(){
			var xmlhttp = new XMLHttpRequest();
		 xmlhttp.open("POST", "user_typeload.php", true);
         xmlhttp.send();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("type").innerHTML = xmlhttp.responseText;
             }
         }
		}
		
		function setcompany(first){
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
            document.getElementById("company").innerHTML=res;
            }
          }
        xmlhttp.open("GET","user_setcompany.php?company="+first,true);
        xmlhttp.send();
		}
		
		
		function settype(second){
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
        xmlhttp.open("GET","user_settype.php?type="+second,true);
        xmlhttp.send();
			
		}
		
		
		
		function resset(){
			//alert("fuck off");
			refresh_body();
			refresh_comapny();
			refresh_type();
		}
		
		function search()
		{
			var search=document.getElementById("ser_content").value.trim().toLowerCase();
			//alert(search);
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
            document.getElementById("load").innerHTML=res;
            }
          }
        xmlhttp.open("GET","user_search.php?search="+search,true);
        xmlhttp.send();
			
		}
		
$(document).ready(function() {		
		$("#history").click(function() {

	//$("#unfilled_singin").html(data); 
	window.location.href =  "http://localhost:8888/history.php"; 


});
});		
		 
		 