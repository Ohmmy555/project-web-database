<?php
    session_start();
    include('server.php');
        $fname =mysqli_real_escape_string($conn,$_POST['fname']);
        $lname =mysqli_real_escape_string($conn,$_POST['lname']);
        $username =mysqli_real_escape_string($conn,$_POST['username']);
        $std_id =mysqli_real_escape_string($conn,$_POST['id-student-ta']);
        $password_1=mysqli_real_escape_string($conn,$_POST['password_1']);

        $user_check_query = "SELECT * FROM Admin WHERE username = '$username'";
        $queary = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_assoc($queary);

        if($result){
            if($result['username'] === $username){
                $_SESSION['error_signin']="Username already exists";
                header("location: register.php");
            }
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO Admin (idTA,fname,lname,username,password) VALUES ('$std_id','$fname','$lname','$username','$password')";
            mysqli_query($conn,$sql);
            echo "<script>location.replace('../../Admin/log-in/login.php')</script>";


        }else{
            $_SESSION['error_signin']="Wrong username or password try again";
            header("location: register.php");
        }
    ?>
