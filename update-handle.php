<?php

  require './db.php';

  echo $_POST['name'];

  if(isset($_POST['update-submit'])) {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['address']) && isset($_POST['age']) && isset($_POST['hobbies']) && isset($_POST['birthday']))
    {
      $id = $_GET['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $age = $_POST['age'];
      $birthday = $_POST['birthday'];
      $hobbies = $_POST['hobbies'];

      $sql = "UPDATE employee SET name='$name', email='$email', gender='$gender', address='$address', age='$age', date_of_birth='$birthday', hobbies='$hobbies' WHERE employee_id=$id";

      if ($conn->query($sql) === TRUE) {
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
