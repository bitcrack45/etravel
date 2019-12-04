<?php
  
  if(isset($_POST['submit']))
  {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$guest=$_POST['guest'];
	$children=$_POST['children'];
    $hotel_name=$_POST['hotel_name'];
    $room_type=$_POST['room_type'];

    $con=mysqli_connect('localhost','root','','travel');
    $query="INSERT INTO `hotel`( `name`, `email`, `phone`, `address`, `guest`, `children`, `hotel_name`, `room_type`) VALUES ('$name','$email','$phone','$address','$guest','$children','$hotel_name','$room_type') ";
   $done= mysqli_query($con,$query);

	

    


  }




  ?>