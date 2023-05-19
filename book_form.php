<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['fname'];
      $lame = $_POST['lname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $password = $_POST['password'];

      $request = " insert into book_form(fname, lname, email, phone, address, password)
      values('$fname','$lname','$email','$phone','$address','$password') ";
      
      mysqli_query($dbconnect, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }
