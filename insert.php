<?php

  require './db.php';

  if(isset($_POST['insert'])) {

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['age']) && isset($_POST['hobby']) && isset($_POST['birthday']))
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $age = $_POST['age'];
      $birthday = $_POST['birthday'];
      $hobby = $_POST['hobby'];

      $hobbies = "";
      foreach($hobby as $newHobby)
      {
        $hobbies .= $newHobby.", ";
      }

      $sql = "INSERT INTO employee (name, email, gender, hobbies, address, age, date_of_birth)
      VALUES ('$name', '$email', '$gender', '$hobbies', '$address', '$age', '$birthday')";


      if ($conn->query($sql) === TRUE) {
        // echo "<h3 class='text-center text-success'>New record created successfully</h3>";
        header('Location: ./index.php');
        exit;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    else {
      echo "<h3 class='text-center text-danger'>Fill Up all fields</p>";
    }

  }

 ?>
