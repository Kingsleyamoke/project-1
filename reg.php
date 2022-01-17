<!DOCTYPE HTML>
    <html>
        <head>
            <title>Goodies Registration</title>
        </head>
<!-- THE PHP CODES ARE NOT WORKING AS WISHED -->          
            <?php
            require "db.php";
           // how to fetch the data from the database is the problem now

           //make a query to the database
           $sql = "SELECT * FROM users";

           //creating variable stmt
           $stmt = mysqli_stmt_init($connection);

           //getting result from the database from the query already made above
          // $result = mysqli_query($connection, $sql);

          //getting result from SQLiteDatabase
          $result = mysqli_stmt_get_result($stmt);



           //the below line of code carrying $row might throw an error msg
           $row = mysqli_fetch_assoc($result);

           session_start();
           $_SESSION['userid'] = $row['sn'];
           $_SESSION['userId'] = $row['username'];

           //free result from memory
           mysqli_free_result($result);

           //echo the row variable however the index is 'firstname' is not defined which will make me to alter the row variable above and then create $stmt
            echo $row['firstname'];
            ?>
        </body>
    </html>
