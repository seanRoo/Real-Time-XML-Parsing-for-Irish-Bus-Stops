<?php

session_start();

?>

<DOCTYPE html>
<html>
<body>

<head>

<div id="countDiv" align="center"><h1>
Bus Information
</h1>
</div>
<hr>
<div id="stopDiv"><h3>Enter a stop number</h3>
</div>
<form id="myForm"  method="POST" action="id.php">
Stop ID: 
<input type="text" name="id" >
<input type="submit" name="formSubmit" value = "Submit">


</form>
<div id="backForm"></div>
</head>

<h2>

<p id="demo">

</h2>
</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






<style>
table, th, td {
   border: 1px solid black;
}
table{
	width: 100%;
	border-collapse: collapse;
}
th{
	height: 50px;
}
th,td {
	width: auto;
	height: auto;
}
td{
	text-align: center;
}
</style>
</body>
</html>