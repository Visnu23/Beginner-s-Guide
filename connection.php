<?php
   $firstName = $_POST ['firstName'];
   $lastname =  $_POST ['lastName'];
   $gender =  $_POST ['gender'];
   $email =  $_POST ['email'];
   $password =  $_POST ['password'];
   $number =  $_POST ['number'];

   $conn = new mysqli('localhost','root','','sample');
   if ($conn->connect_error){
      die('connection Failed :'.$conn->connect_error);
   }else{
      $stmt = $conn->prepare("insert into registration1(firstName, lastName, gender, email, password, number)
          values(?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $number);
      $stmt->execute();
      echo "registration successful";
      $stmt->close();
      $conn->close();
   } 
?>    