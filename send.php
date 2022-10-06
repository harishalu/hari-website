<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="form";

$con = new mysqli($host,$user,$pass,$db);
if (!$con){
echo "there is a problem";
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];
$dep=$_POST['dep'];
$by=$_POST['by'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$add=$_POST['add'];
$city=$_POST['city'];
$skill=$_POST['skill'];
$l=$_POST['l'];
$des=$_POST['des'];
$f=$_POST['f'];

$qry= "INSERT INTO `table`(`First-Name`, `Last-Name`, `Roll no`, `Reg no`, `Department`, `Branch&Year`, `D.O.B`, `Age`, `Email`, `Gender`, `Address`, `City`, `Skills`, `Language Known`, `If it is more Pls Describe it`, `Present Photo of You`) VALUES ('$fname','$lname','$roll','$reg','$dep','$by','$dob','$age','$email','$gender','$add','$city','$skill','$l','$des','$f')";

$insert = mysqli_query($con,$qry);
if(!$insert){
echo"there are some problem";
}
else{
echo "data inserted";
}
?> 