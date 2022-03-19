<?php
    session_start();
    include('server.php');
    $errors=array();
        $fname =mysqli_real_escape_string($conn,$_POST['fname']);
        $lname =mysqli_real_escape_string($conn,$_POST['lname']);
        $username =mysqli_real_escape_string($conn,$_POST['username']);
        $std_id =mysqli_real_escape_string($conn,$_POST['id-student-ta']);
        $password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
        $password_2=mysqli_real_escape_string($conn,$_POST['password_2']);

        if(empty($username)){
            array_push($errors,"username is required");
        }
        if(empty($fname )){
            array_push($errors,"First name is required");
        }
        if(empty($lname)){
            array_push($errors,"Last name is required");
        }
        if($password_1!=$password_2){
            array_push($errors,"Passwords do not match");
        }

        $user_check_query = "SELECT * FROM ta WHERE username = '$username'";
        $queary = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_assoc($queary);

        if($result){
            if($result['username'] === $username){
                array_push($errors,"Username already exists");
            }
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO ta (idTA,fname,lname,username,password) VALUES ('$std_id','$fname','$lname','$username','$password')";
            mysqli_query($conn,$sql);
            $_SESSION['username']= $username;
            $_SESSION['success']="You are now logged in";
            // location: หน้าแรกหลังจากล็อคอินเสร็จ
            header('location: ');


        }else{
            array_push($errors,"Wrong username or password combination");
            $_SESSION['error_signin']="Wrong username or password try again";
            header("location: register.php");
        }
    ?>
