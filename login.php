<!DOCTYPE html>
 <html>
  <head>
   <title>Log in</title>
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <nav class = "navbar navbar-expand-lg navbar-light bg-gray">
       <a class="logo-image" href="index.php">
        <img src="header-logo.png" alt="Company Logo" id="logo">
       </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <script>
            let x = document.getElementById("logo").height = 40;
        </script>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="navbar-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="ai.php">Artificial Intelligence</a>
                    <a class="dropdown-item" href="ml.php">Machine Learning</a>
                    <a class="dropdown-item" href="android.php">Mobile Android</a>
                    <a class="dropdown-item" href="web.php">Web Development</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="goodies.php">Goodies Onboarding</a>
                    <!-- the above anchor tags page have not been created, take note -->
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact US</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&nbsp;&nbsp;
                <!-- the button tag above needs to be routed to normal google search -->
              <!--  <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Log in</a>&nbsp; -->
                <a class="btn btn-outline-success my-2 my-sm-0" href="signup.php">Sign Up</a>
        </form>
    </div>
      </nav>
  </head>

<hr />
<body>
 <?php
 include "footer.php";
 require "db.php";
 $username ="";
 $errors = array('username' => '','password' => '');

 if(isset($_POST['login-submit'])){

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  if(empty($username)){
   $errors['username'] = "Field cannot be empty";
  }

  if(empty($password)){
   $errors['password'] = "Field cannot be empty";
  }
 else{
  $sql = "SELECT * FROM users WHERE username=? OR mail=?";
  $stmt = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($stmt, $sql)){
   $errors['username'] = "SQL error";
     }
     else{
      mysqli_stmt_bind_param($stmt, "ss", $mail, $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
       $passwordcheck = password_verify($password, $row['pasword']);
       if($passwordcheck == false){
        $errors['password'] = "Wrong password";
       }
       else if($passwordcheck == true){
        session_start();
        $_SESSION['userid'] = $row['sn'];
        $_SESSION['userId'] = $row['username'];

        //echo "Dear " .$row['firstname'] .' '.$row['lastname'] . ", you are welcome to Goodies Inc";

        //only activate the header function when everything on reg.php is working pretty fine
        header("Location: success.php");

        //the above echo, line 89 gave me what I really wanted, thus the below commented lines of cose are not needed

        //The code below queries the code via association array to fetch the first name of the user but not fetching the data
        /*$query = "SELECT * FROM users";
        $results = $connection->query($query);
        $rows = $results->num_rows;
        for($j = 0; $j < $rows; ++$j){ // I think while loop will give me the expected result of echoing one output instead of all rows
         $results->data_seek($j);
         $row = $results->fetch_array(MYSQLI_ASSOC);

         echo "Dear " .$row['firstname'] .', you are welcome to Goodies Inc' .'<br />';
        }

        */

        // code running partially well, need to fetch the firstname from the database and redirect from log in page
       }
      /* else{
        $errors['password'] = "Wrong password";
       } */
      }
      else{
       $errors['username'] = "User does not exist";
      }
     }
 }
/*else{
 header("Location: index.php");
    }*/
 }
 ?>
 <center>
 <main>
        <div class="wrapper-main">
            <section class="section-default">
             <h3>Goodies</h3>
             <p>Sign in <br /> to continue</p>
 <form class="form-signup" action="login.php" method="post">
            <input type="text" name="username" placeholder="E-mail" style="border-radius:5px" value="<?php echo htmlspecialchars($username);?>"><br/>
             <p style="color: red"><?php echo $errors['username'] ?></p>
            <input type="password" name="pwd" placeholder="Password" style="border-radius:5px"><br/>
             <p style="color: red"><?php echo $errors['password'] ?></p>
         <button type="submit" name="login-submit" class="btn btn-secondary" style="color: white">Log In</button>
        </form>
            </section>
        </div>
 </main>
 </center>



</body>
 </html>
