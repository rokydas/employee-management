<?php
  require './db.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script type=“text/javascript”>
      function newUpdate()
      {
        alert('skfdh');
      }
    </script>
  </head>
  <body>
    <h1 class="text-center m-4">This is an employee management system</h1>

    <div class="custom-container">
      <div class="row">
        <div class="col-md-3">
          <div class="box mb-5">
            <h3>Insert Employee</h3>
          </div>
          <form class="" action="insert.php" method="post">
            <input class="form-control" type="text" name="name" placeholder="Enter your Name:"><br>
            <input class="form-control" type="email" name="email" placeholder="Enter your Email:"><br>
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
              <input type="checkbox" id="hobby1" name="hobby[]" value="Gardening">
              <label for="hobby1"> Gardening</label><br>
              <input type="checkbox" id="hobby2" name="hobby[]" value="Reading Book">
              <label for="hobby2"> Reading Book</label><br>
              <input type="checkbox" id="hobby3" name="hobby[]" value="Watching Movies">
              <label for="hobby3"> Watching Movies</label><br><br>
            </div>
            <input class="form-control" type="text" name="address" placeholder="Enter your address:"><br>
            <input class="form-control" type="number" name="age" placeholder="Enter your age:"><br>
            <div class="form-group">
              <label for="birthday">Birthday:</label><br><br>
              <input type="date" id="birthday" name="birthday"><br><br>
            </div>
            <input class="btn btn-primary" type="submit" name="insert" value="Insert Employee"><br><br>
          </form>
        </div>
        <div class="col-md-9">
          <div class="box mb-5">
            <h3>List of Employees</h3>
          </div>
          <table class="table table-bordered">
            <col style="width:14%">
	          <col style="width:14%">
	          <col style="width:14%">
            <col style="width:14%">
	          <col style="width:16%">
            <col style="width:10%">
	          <col style="width:16%">
            <col style="width:8%">
	          <col style="width:8%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Hobbies</th>
                <th>Address</th>
                <th>Age</th>
                <th>Date of Birth</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "Select * from employee";
                $result = mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0) {
                  while($row = mysqli_fetch_assoc($result)) {?>
                    <tr>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['gender'] ?></td>
                      <td><?php echo $row['hobbies'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['age'] ?></td>
                      <td><?php echo $row['date_of_birth'] ?></td>
                      <td>
                        <form action="update.php?id=<?php echo $row['employee_id']; ?>&name=<?php echo $row['name'] ?>&email=<?php echo $row['email'] ?>&gender=<?php echo $row['gender'] ?>&hobbies=<?php echo $row['hobbies'] ?>&address=<?php echo $row['address'] ?>&age=<?php echo $row['age'] ?>&birthday=<?php echo $row['date_of_birth'] ?>" method="post">
                          <a href="#update"><button class="btn btn-warning" name="update">Update</button></a>
                        </form>
                      </td>
                      <td>
                        <form class="" action="delete.php?id=<?php echo $row['employee_id'];?>" method="post">
                          <button class="btn btn-danger" name="delete">Delete</button>
                        </form>
                      </td>
                    </tr>
              <?php
                  }
                }
               ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>

    <script type="text/javascript">
      function update() {
        alert('sfd');
      }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
