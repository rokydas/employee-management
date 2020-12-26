<?php
  if(isset($_POST['update'])) {
    // echo $_GET['id'];
    // echo $_GET['name'];
    // echo $_GET['email'];
    // echo $_GET['gender'];
    // echo $_GET['hobbies'];
    // echo $_GET['address'];
    // echo $_GET['age'];
    // echo $_GET['birthday'];
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
   </head>
   <body>
     <div class="container">
       <div class="update">
         <h3 class="text-center m-5">Update the dateils of <span class="text-success"><?php echo $_GET['name'] ?></span></h3>
           <form class="" action="update-handle.php?id=<?php echo $_GET['id'] ?>" method="post">
             <input class="form-control" type="text" value="<?php echo $_GET['name'] ?>" name="name" placeholder="Enter your Name:"><br>
             <input class="form-control" type="email" value="<?php echo $_GET['email'] ?>" name="email" placeholder="Enter your Email:"><br>
             <input class="form-control" type="text" value="<?php echo $_GET['gender'] ?>" name="gender" placeholder="Enter your Gender:"><br>
             <input class="form-control" type="text" value="<?php echo $_GET['hobbies'] ?>" name="hobbies" placeholder="Enter your Hobbies:"><br>
             <input class="form-control" type="text" value="<?php echo $_GET['address'] ?>" name="address" placeholder="Enter your address:"><br>
             <input class="form-control" type="number" value="<?php echo $_GET['age'] ?>" name="age" placeholder="Enter your age:"><br>
             <div class="form-group">
               <label for="birthday">Birthday:</label><br><br>
               <input type="date" value="<?php echo $_GET['birthday'] ?>" id="birthday" name="birthday"><br><br>
             </div>
             <input class="btn btn-primary" type="submit" name="update-submit" value="Insert Employee"><br><br>
           </form>
       </div>
     </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   </body>
</html>
