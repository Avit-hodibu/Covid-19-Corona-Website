<!DOCTYPE html>
<html>
<head>
	<title>checkup</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php';?>




<section class="my-5">
<div class="py-5">
	<h2 class="text-center">Form</h2>
</div>
<div class="w-50 m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="user" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="number" name="mobile" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="number" name="mobile" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Comment</label>
			<textarea class="form-control" name="comments">
				
			</textarea>
		</div>

		<div class="form-group">
			<label>Do you any Symptoms:</label><br>
  <input type="checkbox" id="db" value="db">difficulty breathing<br>
  <input type="checkbox" id="cp" value="cp">chest pain<br>
  <input type="checkbox" id="f" value="f">fever<br>
  <input type="checkbox" id="dc" value="dc">dry cough<br>
  

		</div>
		<button type="submit" class="btn btn-success" onclick="myfunction()">
			Submit
		</button>
	</form>

</div>
</section>






<?php include 'footer.php';?>
<script>
  function myfunction() {
    var cp = document.getElementById("cp");
    var f = document.getElementById("f");
    var db = document.getElementById("db");
    var dc = document.getElementById("dc");
    let response;
    var result = cp.checked + f.checked + db.checked + dc.checked;
    switch(result){
    	case 4:
    			
    			response=confirm("It's emergency! please, vist hospital");
    			responseMes(response);
    			break;
    	case 3:
    			response=confirm("its emergency! vist hospital");
    			
    			responseMes(response);
    			

    			break;
    	case 2:
    			response=confirm("please vist hospital");
    			responseMes(response);
    			break;
    	case 1:
    			response=confirm("nothing to worry");
    			responseMes(response);
    			break;
    	case 0:
    			alert("stay safe");
    		
    			break;
    }
}
function responseMes(res){
	if(res==true){
		document.write("asfdha");
	}

}
  //   if ((db.checked == true && cp.checked == true && f.checked == true && dc.checked == true)||(db.checked == true && cp.checked == true && f.checked == true && dc.checked == false)||(db.checked == true && cp.checked == true && f.checked == false && dc.checked == true)||(db.checked == true && cp.checked == false && f.checked == true && dc.checked == true)||(db.checked == false && cp.checked == true && f.checked == true && dc.checked == true)){
  //     alert("It's emergency! please, vist hospital");
		// window.location.href = "docinfo.php";
  //   } else if((db.checked == true && cp.checked == true && f.checked == false && dc.checked == false)||(db.checked == true && cp.checked == false && f.checked == true && dc.checked == false)||(db.checked == true && cp.checked == false && f.checked == false && dc.checked == true)||(db.checked == false && cp.checked == true && f.checked == false && dc.checked == true)||(db.checked == false && cp.checked == true && f.checked == true && dc.checked == false)||(db.checked == false && cp.checked == false && f.checked == true && dc.checked == true)){
  //      alert("please, vist hospital");
		// window.location.href = "docinfo.php";
  //   }
  //   else if ((db.checked == true && cp.checked == false && f.checked == false && dc.checked == false)||(db.checked == false && cp.checked == true && f.checked == false && dc.checked == false)||(db.checked == false && cp.checked == false && f.checked == true && dc.checked == false)||(db.checked == false && cp.checked == false && f.checked == false && dc.checked == true)) {
  //   	 alert("nothing to worry but it will be better if concerned with doctor");
		// window.location.href = "docinfo.php";
  //   }
  //   else
  //   {
  //   	alert("take safety measure. stay safe.");
  //   	window.location.href = 'https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public';
  //   }
  // }
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>