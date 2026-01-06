<?php

include("connection.php");

$na = $_GET['title'];
$quer = "SELECT * from db where Title='$na' ";
$dataa=mysqli_query($conn,$quer);
$result1=mysqli_num_rows($dataa);
$resulta=mysqli_fetch_assoc($dataa);

$q1 = "SELECT * FROM db1 where Title = '$na'  ";
$d1 = mysqli_query($conn, $q1);


// Fetch data from the "db" table
$q2 = "SELECT * FROM db2 where Title = '$na' ";
$d2 = mysqli_query($conn, $q2);
$resultb=mysqli_fetch_assoc($d2);

// Fetch data from the "db" table


// Check if there are any 
$r1 = mysqli_num_rows($d1);
$r2= mysqli_num_rows($d2);


$qu = "SELECT * FROM signup";
$dat = mysqli_query($conn, $qu);

// Fetch data from the "db" table
$query = "SELECT * FROM db where Title='$na'";
$da = mysqli_query($conn, $query);

// Check if there are any rows in the "signup" table
$rr = mysqli_num_rows($dat);

// Check if there are any rows in the "db" table
$ree = mysqli_num_rows($da);

$res5 = mysqli_fetch_assoc($da);

$que = "SELECT * FROM db";
$daa = mysqli_query($conn, $que);

// Check if there are any rows in the "signup" table
$rest = mysqli_num_rows($daa);



$res4 = mysqli_fetch_assoc($daa);



?>