<?php
$con = mysqli_connect('localhost','root');

if($con){
	echo"connet";

}
else{
	echo"not";
}

mysqli_select_db($con, 'cornago');

$user = $_POST['user'];
$email =  $_POST['email'];
$mobile = $_POST['mobile'];
$comments= $_POST['comments'];

$query="insert into userinfodata(user, email, mobile, comment) values('$user', '$email', '$mobile', '$comments')";

echo "$query";
mysqli_query($con,$query);


header('location:checkup.php');

?>