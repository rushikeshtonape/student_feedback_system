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
            input[type=password],
            textarea,
            select{
                width: 50%;
                padding: 7px;
                border-radius: 3px;
                border: 1px solid #ccc
            }
            

            select {
                width: 53%;
            }

            textarea{
                height: 100px;
                margin-left: 39%;
                margin-top: -5%;
                width: 40%;
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

            input [type=radio]{
                margin: 10px 5px 10px 0;
            }

            h1{
                margin-left: 27%;
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
            <h1>Student Data Form</h1>
        </div>
        <div class="row">
            <form method="POST" action="#" class="student-info">
                <div class="row">
                    <p>
                        First Name:  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="firstname" id="name" placeholder="Enter your first name" required style="margin-left: -45px;">
                    </p>
                </div>
                <div class="row">
                    <p>
                        Last Name:  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <input type="text" name="lastname" id="name" placeholder="Enter your last name" required style="margin-left: -40px;">
                    </p>
                </div>
                <div class="row">
                    <p>
                        Roll no: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="rollno" id="roll" placeholder="Enter your roll no" required>
                    </p>
                </div>
                <div class="row">
                    <p>
                        Email:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </p>
                </div>
                <div class="row">
                    <p>
                        Password:  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <input type="password" name="password" id="password" placeholder="Enter your password" required style="margin-left: -30px;">
                    </p>
                </div>
                <div class="row">
                    <p>Gender: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label for="gender"><input type="radio" value="Male" name="gender" id="male" checked>Male
                        </label>
                        <label for="gender"><input type="radio" value="Female" name="gender" id="female">Female
                        </label>
                        <label for="gender"><input type="radio" value="Other" name="gender" id="other">Other
                        </label> 
                    </p>
                </div>
                <div class="row">
                    <p>Address: &nbsp;&nbsp;&nbsp;</p>
                          <textarea name="address" placeholder="Enter landmark and city"></textarea>
                    
                </div>
                <div class="row">
                    <p>Course: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
                          <select name="course" id="course">
                              <option value="Computer Engineering">Computer Science and Engineering</option>
                              <option value="Civil Engineering">Civil Engineering</option>
                              <option value="Mechanical Engineering">Mechanical Engineering</option>
                              <option value="Chemical Engineering">Chemical Engineering</option>
                          </select>
                    </p>
                </div>
                <div class="row">
                    <p>Year: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                          <select name="year" id="year">
                              <option value="FY">First Year</option>
                              <option value="SY">Second Year</option>
                              <option value="TY">Third Year</option>
                              <option value="Final year">Final Year</option>
                          </select>
                    </p>
                </div>
                <div class="row">
                    <p>Division: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                          <select name="division" id="division">
                              <option value="A">A</option>
                              <option value="B">B</option>
                          </select>
                    </p>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Submit</button>
                </div>
                <p style="margin-left: 25%;">Already have an account:<a href="login.php" style="color: #e67e22;text-decoration: none;margin-left: 5%;">Log In</a></p>
            </form>
        </div>

    </body>
</html>

<?php
if(isset($_POST['email']) && isset($_POST['password'])){
    register(); 
}
function register(){
    include("connection.php");
    $rollno = $_POST['rollno'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $division = $_POST['division'];

    $query = "INSERT INTO STUDENT_DATA VALUES('$rollno','$firstname','$lastname','$email','$password','$course','$year','$division','$address','$gender')";
    $data = mysqli_query($conn,$query);
    echo "<script> alert('User Registered Successfully')</script>";
    echo "<script> location.href='login.php'; </script>";
}
?>