<?php 
$conn = mysqli_connect("localhost","root","","db_travelwithme");
if(!$conn)
{
	die("Connection failed: ". mysqli_connect_eror());
}
?>