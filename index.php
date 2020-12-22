<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1 class="text-center m-5">This is an employee management system</h1>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box mb-5">
            <h3>Insert Employee</h3>
          </div>
          <form class="" action="index.php" method="post">
            <input class="form-control" type="text" name="name" placeholder="Enter your Name:"><br>
            <input class="form-control" type="text" name="email" placeholder="Enter your Email:"><br>
            <div class="form-group">
              <p>Please select your gender:</p>
              <input type="radio" id="male" name="gender" value="Male">
              <label for="male">Male</label><br>
              <input type="radio" id="female" name="gender" value="Female">
              <label for="female">Female</label><br>
              <input type="radio" id="other" name="gender" value="Other">
              <label for="other">Other</label><br><br>
            </div>
            <div class="form-group">
              <p>Select your hobbies</p>
              <input type="checkbox" id="hobby1" name="Gardening" value="Bike">
              <label for="hobby1"> Gardening</label><br>
              <input type="checkbox" id="hobby2" name="Reading Book" value="Car">
              <label for="hobby2"> Reading Book</label><br>
              <input type="checkbox" id="hobby3" name="Watching Movies" value="Boat">
              <label for="hobby3"> Watching Movies</label><br><br>
            </div>
            <input class="form-control" type="text" name="address" placeholder="Enter your address:"><br>
            <input class="form-control" type="text" name="age" placeholder="Enter your age:"><br>
            <div class="form-group">
              <label for="birthday">Birthday:</label><br><br>
              <input type="date" id="birthday" name="birthday"><br><br>
            </div>
            <input class="btn btn-primary" type="submit" name="insert" value="Insert Employee"><br><br>
          </form>
        </div>
        <div class="col-md-8">
          <div class="box mb-5">
            <h3>List of Employees</h3>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Age</th>
                <th>Date of Birth</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Roky Das</td>
                <td>drok</td>
                <td>Male</td>
                <td>Gardening</td>
                <td>22</td>
                <td>19<sup>th</sup> July, 1998</td>
              </tr>
              <tr>
                <td>Roky Das</td>
                <td>drok</td>
                <td>Male</td>
                <td>Gardening</td>
                <td>22</td>
                <td>19<sup>th</sup> July, 1998</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>


<?php
  $connection = mysqli_connect("localhost", "root", "");
  $db = mysqli_select_db($connection, "employee-management");

  if(isset($_POST['insert'])) {
    $name = $_POST['name'];
    $emails = $_POST['email'];
    $gender = $_POST['gender'];
    // $hobbies = $_POST['hobbies'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    // $date_of_birth = $_POST['date_of_birth'];
    echo "<script>alert(`$gender`)</script>";
  }


 ?>
