<?php
include("connection.php");

$n=$_GET['title']; 

$query = "DELETE FROM db WHERE Title = '$n' ";

$data = mysqli_query($conn,$query);
if($data){
	
}
else{
	echo "Failed";
}

$query = "DELETE FROM db1 WHERE Title = '$n' ";

$data = mysqli_query($conn,$query);
if($data){
	
}
else{
	echo "Failed";
}

$query = "DELETE FROM db2 WHERE Title = '$n' ";

$data = mysqli_query($conn,$query);
if($data){
	
}
else{
	echo "Failed";
}

$query = "DELETE FROM db3 WHERE Title = '$n' ";

$data = mysqli_query($conn,$query);
if($data){
	echo '<script>alert("Record Deleted")</script>';
	header("location:pc.php");
}
else{
	echo "Failed";
}

?>