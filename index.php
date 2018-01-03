<?php
	$css="Design/css/";
?>

<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<title>AjaxFirstExamp</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css;?>bootstrap.css">
</head>
<body onload="add()">
<div class="container">
   <p> What is Your Name </p>
   	<input type="text" id="name">
	<button type="button" id="btn" onclick="add()"> ADD </button>
	
		
	</p>
	<div>
		<table class="table table-striped">
			<tr >
				<th> ID    </th>
				<th>name   </th>
				<th>Actions</th>
			</tr>
			<tbody id="txt">
				
			</tbody>
			

		</table>
	</div>	
</div>

	<script>
	 function  add(id){
		var xhr  = new XMLHttpRequest();
		var name = document.getElementById("name").value;
		if (id == undefined) {
			id='';
		}else{
			 var a = window.confirm("Are You Sure");
			 if (a == false) {
			 	id='';
			 }
		}

		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 &  xhr.status == 200 ) {}
			document.getElementById("txt").innerHTML = xhr.responseText;
			document.getElementById("name").value="";
		}
           //seending data using get mesthod
           //xhr.open("GET","print.php?name="+name+"&age="+age,true);
	
        xhr.open("POST","init.php",true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");   
		xhr.send("add"+"&id="+id+"&name="+name);
}
	</script>	

</body>
</html>