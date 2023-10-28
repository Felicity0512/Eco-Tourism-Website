<?php

include '../config/connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $location = $_POST['location'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];
  $leaving = $_POST['leaving'];

  $stmt = $con->prepare("INSERT INTO bookings (name,email,number,address,visit_location,guests,arrivals,leaving)
                        VALUES (:name, :email, :num, :addr, :loc, :guests, :arrival, :departure)");

  $stmt->bindParam(':name',$name);
  $stmt->bindParam(':email',$email);
  $stmt->bindParam(':num',$number);
  $stmt->bindParam(':addr',$address);
  $stmt->bindParam(':loc',$location);
  $stmt->bindParam(':guests',$guests);
  $stmt->bindParam(':arrival',$arrivals);
  $stmt->bindParam(':departure',$leaving);

  if($stmt->execute())
  {
    echo "Booking added successfully";

    header("location:book.php");
  }
  else
  {
    echo "Error adding booking to database";
  }

}else{
echo 'something went wrong please try again';
}

?>