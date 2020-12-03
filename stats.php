<!DOCTYPE html>
<html>
<head>
	<title>coronaupdate</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body onload="fetch()">

<?php include 'menu.php';?>


<section class="corona-update container-fluid">
	<div class="mb-3">
		<h3 class="text-center text-uppercase">COVID-19 live updates</h3>
	</div>

<div class="table-responsive">
	<table class="table table-bordered table-striped text-center" id="tbval">
		<tr>
			<th>country</th>
			<th>total confirmed</th>
			<th>total recover</th>
			<th>total death</th>
			<th>new Confirm</th>
			<th>new recover</th>
			<th>new death</th>


		</tr>
		
	</table>
</div>
</section>


<?php include 'footer.php';?>



<script type="text/javascript">
	function fetch(){
		$.get("https://api.covid19api.com/summary", function (data){
					var tbval = document.getElementById('tbval');
					for(var i=1; i<(data['Countries'].length);i++){
						var x=tbval.insertRow();
						x.insertCell(0);
						tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
						tbval.rows[i].cells[0].style.background ='#7a4a91';
						tbval.rows[i].cells[0].style.color ='#fff';
				        x.insertCell(1);
						tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
						tbval.rows[i].cells[1].style.background ='#7a4a91';
						x.insertCell(2);
						tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
						tbval.rows[i].cells[2].style.background ='#7a4a91';
						x.insertCell(3);
						tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
						tbval.rows[i].cells[3].style.background ='#7a4a91';
						x.insertCell(4);
						tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
						tbval.rows[i].cells[4].style.background ='#7a4a91';
						
						x.insertCell(5);
						tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
						tbval.rows[i].cells[5].style.background ='#7a4a91';
						
						x.insertCell(6);
						tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
						tbval.rows[i].cells[6].style.background ='#7a4a91';
						

						
					}
					}



	 

		);
	}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>