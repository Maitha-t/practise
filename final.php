<!DOCTYPE html>
<html>
<head>
<style>
#header{
top : 80px;
position : relative;
background-color: skyblue;
text-align: center;
font-size: 14px;
font-style: italic;
}
#Quimg{
position: relative;
left : 550px;
top: 20px;
}
#greeting
{
position :relative;
top: 100px;
color : red;
font-style : italic;
font-size : 20px;
}
#content
{
	position : relative;
	top :60px;
}
#or{
font-weight : bold;
font-size : 20px;
}
#of{
	position : relative;
     top : 20px;
	text-align = buttom;
	color : red;
}
</style>
</head>
<body onload="myFunction()">
<div id = "Quimg"> 
<img src="Qun.jpg" alt="Qassim University" width = 20%>
</div>

<div id = "header">
<h1>Web Application Lab Assignment</h1>
</div>

<p id="greeting"><p>

<script>
function myFunction() {
var Name = prompt("Please enter your name");
var x = document.getElementById("greeting");
var d = new Date();
var hour = d.getHours();
if (hour<10) 
   {
	x.innerHTML = "Good Morning " + Name;
	}
	else if (hour<20)
	{
	x.innerHTML = "Good Day " + Name;
	}
	else
	{
	x.innerHTML = "Good Evning " + Name;
	}
}	
</script> </br>
<div id = "content">
<h2>Contact</h2> 
<?php
$con = mysqli_connect("localhost","root","","Contacts")
or die(mysqli_connect_error() );
//echo "Connected to MYSQL<br/>";
mysqli_query($con,"CREATE TABLE IF NOT EXISTS contactInfo(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
Name VARCHAR(20),
Phone INT)") 
or die(mysqli_connect_error() );
//$insertQ="INSERT INTO contactInfo(Name,Phone) VALUES ('Asmaa','56123799'),('Rana','57986321'),('Reem','56489712'),('Sara','57963148')";
//mysqli_query($con,$insertQ);
$sql = "SELECT * FROM contactInfo";
$result = mysqli_query($con,$sql);
echo "<table>";
echo"<tr><td id = 'or'>Name ---- Phone</td></tr>";
while($row = mysqli_fetch_assoc($result)) { 
echo"<tr><td id = 'of'>{$row['Name']} ---- {$row['Phone']}</td></tr>";
}
echo"</table>";
?>
</div>
</body>
</html>