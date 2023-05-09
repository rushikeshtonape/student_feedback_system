<?php
    error_reporting(0);
    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password']= $_POST['password'];
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200;300;400;700&display=swap" rel="stylesheet" type="text/css">
       <title>Students info</title>

       <style>
           .row{
                max-width: 1140px;
                margin: 0 auto;
            }

            .student-info{
                width: 60%;
                margin: 5% auto;
                text-align: justify;
                font-family: BioRhyme;
                background-color: rgba(8, 2, 85, 0.637);
                color: #fff;
                padding-top: 10px;
                padding-bottom: 20px;
                border-radius: 10px;
            }

            p{
                margin-left: 20%;
            }
            input[type=text],
            input[type=email],
            input[type=password]{
                width: 50%;
                padding: 7px;
                border-radius: 3px;
                border: 1px solid #ccc
            }
        

            button{
                padding: 10px 30px;
                margin-left: 40%;
                border-radius: 200px;
                background-color: #e67e22;
                border: 1px solid  #e67e22;
                color: #fff;
                cursor: pointer;
                margin-right: 15px;
            }
            h1{
                margin-left: 32%;
                margin-bottom: -3%;
                text-transform: uppercase;
                font-size: 40px;
                font-family: BioRhyme;
                word-spacing: 2px;
                color:  rgba(8, 2, 85, 0.897);;
            }

            body{
                background-image: url("hello.jpg");
                background-size: cover;
            }
       </style>
    </head>
    <body>
        <div class="row">
            <h1>Student Login</h1>
        </div>
        <div class="row">
            <form method="POST" action="#" class="student-info">
                <div class="row">
                    <p>
                        Email:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </p>
                </div>
                <div class="row">
                    <p>
                        Password:  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password" id="password" placeholder="Enter your password" required style="margin-left: -30px;">
                    </p>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Submit</button>
                </div>
                <p style="margin-left: 25%;">Don't have an account:<a href="registration.php" style="color: #e67e22;text-decoration: none;margin-left: 5%;">Sign Up</a></p>
            </form>
        </div>

    </body>
</html>

<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    login(); 
}

function login(){
    include("connection.php");
    session_start();
    
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    
    $sql = "SELECT * FROM STUDENT_DATA where email='$email' AND password='$password'";
    $data = mysqli_query($conn,$sql);

    if(mysqli_num_rows($data) == 1){
        echo "<script> alert('Valid User')</script>";
        echo "<script> location.href='feedback.php'; </script>";
    }else{
        echo "<script> alert('Invalid User')</script>";
    }
}   
?>