<?php

  require './db.php';

  if(isset($_POST['delete'])) {
    // echo "<script>alert('delete button clicked')</script>";
    if(isset($_GET['id'])) {
      $id = $_GET['id'];
    }
    $delete_query = "DELETE FROM employee WHERE employee_id=$id";

    if ($conn->query($delete_query) === TRUE) {
      header('Location: ./index.php');
      exit;
    } else {
      echo "Error deleting record: " . $conn->error;
    }
  }

 ?>
