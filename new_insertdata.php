<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./Homepage3.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <title>Sign up</title>
</head>

<body>
  <section class="vh-200" style="background-color: #c8dbbe">
    <div class="container h-80">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <h3 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4" id="em2">
                    Sign up
                  </h3>

                  <!-- Form Submitted0 -->

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
		    $Repassword = $_POST['Repassword'];
        
       // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "userdb";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `userdata` (`Name`, `Email`, `Password`, `Repassword`) VALUES ('$Name', '$Email', '$Password', '$Repassword')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          // echo "The record was inserted successfully";
          echo "<script>alert('The record was inserted successfully')</script>";
          echo "<script type='text/javascript'>window.location = 'Index.html';</script>";
        }
        else{
            
            // echo "The record was not inserted successfully";
            echo "The record was not inserted successfully";
        }

      }

    }

    
?>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="Sign up.png" class="img-fluid" alt="Cooking image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>

  

