<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	// Error messages
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$room = $_POST['room'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	
	var_dump(Input::all());

	if (trim($room) == '')
		{
		echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Attention! Please enter a your room.</div>';
  		exit();
		}
	if (trim($checkin) == '')
		{
		echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Attention! Please enter your check-in date.</div>';		
  		exit();
		}
	if (trim($checkout) == '')
		{
		echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Attention! Please enter your check-out date.</div>';
  		exit();
	}
}

?>