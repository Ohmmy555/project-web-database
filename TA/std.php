<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>นักศึกษา</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/0fb7422e9d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/side-bar.css">
  <link rel="stylesheet" href="./css/nav.css">
  <link rel="stylesheet" href="./css/popup.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: kanit;


    }

    h3 {
      color: #624DCE;
      position: relative;
      left: 50px;
      top: 40px;
      font-size: 40px;
      width: 100%;
      font-weight: bold;

    }

    .content {
      width: 55rem;
      height: 50rem;
      background-color: white;
      border: 1px solid white;
      border-radius: 20px;
      padding: 5px;
      color: #624DCE;
    }

    .text {
      font-size: 22px;
      position: relative;
      left: -16rem;
      margin-top: 20px;
      color: #624DCE;
    }

    .add {
      border: 1px solid #1C7CF0;
      background-color: #1C7CF0;
      width: 200px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      left: -16rem;
      margin: 20px;

    }

    .add p {
      color: white;
      font-size: 16px;
      margin: 5px;
      width: 150px;
    }

    .add img {
      width: 25px;
      margin-left: 16px;
    }

    .content {
      position: relative;
      left: 350px;
      top: 60px;
    }

    .number {
      position: relative;
      left: -16rem;
      margin: 20px;
      color: black;
      margin-top: 50px;
    }

    .excel {
      position: relative;
      left: 17rem;
      top: -2.5rem;
      color: black;
    }

    tr {
     border: 1px solid;

    }

    table {
      position: relative;
      left: 2.5rem;
      top: -46rem;
      color: black;

    }


    table th, table td {
      padding: 10px 65px 10px 65px;
    }

    .cd-popup-trigger {
      display: block;
      line-height: 20px;
    }
    

    .cd-popup-container h2 ,.add-popup-container h2{
      position: relative;
      top: 50px;
      color: rgb(255, 0, 0);
    }

    .btn {
      width: 50px;
      position: relative;
      left: -1rem;

    }
    .add-popup p{
      margin: 20px;
      margin-left: 70px;
      text-align: left;
    }
  </style>

</head>

<body>

  <div class="sidenav">
    <div class="logo">
      <img src="../img/logo.png" alt="Avatar" style="width:110px">
      <h2>check it</h2>
    </div>

    <div id="nav">
      <a href="firstpage.html">หน้าแรก</a>
      <li class="dropdown-btn">วิชา
        <i class="fa fa-caret-down"></i>
      </li>
      <ul class="dropdown-container">
        <li><a href="create.html">วิชาที่สร้าง</a></li>
        <li><a href="opensubject.html">วิชาที่เปิด</a></li>
        <li><a href="delete.html">วิชาที่่ลบ</a></li>
      </ul>
      <li class="dropdown-btn">User
        <i class="fa fa-caret-down"></i>
      </li>
      <ul class="dropdown-container">
        <a href="teacher.html">อาจารย์</a>
        <a href="ta.html">ผู้ช่วยสอน</a>
        <a href="std.html">นักศึกษา</a>

      </ul>
    </div>
  </div>


  <div class="action">
    <div class="profile" onclick="menuToggle();">
      <img src="../img/test.jpg" alt="profile-pic" class="profile-pic">
    </div>
    <div class="menu">
      <img src="../img/test.jpg" alt="profile-pic" class="profile-pic" style="width:180px;">
      <h3 class="username">พิชามล บุญศรี</h3>
      <a href="./editprofile/editprofile.html" id="edit">Edit Profile</a><br>
      <a href="../log-out/logout.php"><button class="sign-out" type="button">Sign out</button></a>
    </div>

  </div>

  <h3>342233/2564 Database Analysis and Design </h3>
  <div class="content">
    <p class="text">เพิ่ม-ลบ รายชื่อนักศึกษา</p>
    <a class="add add-popup-trigger" href="#del"><img src="/img/add-free-icon-font.png" alt="iconadd">
      <p>เพิ่มข้อมูลนักศึกษา</p>
    </a>
    <?php include('roomaction.php'); ?>

    <div class="number">
      <p>แสดง
        <select name="number" id="number1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        ราการ </p>
    </div>
    <div class="excel">
      <a href="#"><img style="width: 20px;" src="/img/excel.png" alt="excel"></a> ค้นหาข้อมูล <input style="height: 25px; width: 120px;"
      type="text"> 
    </div>

    <table>
      <thead>
        <th>Username</th>
        <th>ชื่อ-นามสกุล</th>
        <th>Section</th>
        <th>ลบ</th>
      </thead>
      <tbody>
        <?php
            include('conn.php');
            
            $query=mysqli_query($conn,"select * from room");
            while($row=mysqli_fetch_array($query)){
              ?>
        <tr>
          <td>ออม<?php echo $row['Username']; ?></td>
          <td>ออม<?php echo $row['name']; ?></td>
          <td>1<?php echo $row['Section']; ?></td>

          <td>
            <a href="#del<?php echo $row['roomid']; ?>" data-toggle="modal"
              class="btn btn-danger cd-popup-trigger"><span class="glyphicon glyphicon-trash"></span><img
                style="width: 18px;" src="/img/bin.png" alt="bin"></a>
            <?php include('roomaction.php'); ?>
          </td>
        </tr>
        <?php
            }
          
          ?>
          
      </tbody>


    </table>

  </div>

  <!-- side-bar-link -->
  <div id="side-box">
    <div id="student-detail">
    </div>
    <div id="all-link-boxs">
        <div class="link-boxs">
            <a href="#" class="side-link">
                <p id="techer-box"><span class="small">รายชื่อ </span><br> อาจารย์ </p>
            </a>
        </div>
        <div class="link-boxs">
            <a href="#" class="side-link">
                <p id="ta-box"><span class="small">รายชื่อ </span><br> TA </p>
            </a>
        </div>
        <div class="link-boxs">
            <a href="#" class="side-link">
                <p id="student-box"><span class="small">รายชื่อ </span><br> นักศึกษา </p>
            </a>
        </div>
    </div>
    
    <div id="delete-box">
        <a href="#" class="side-link">
            <p id="delete-botton">ลบวิชา</p>
        </a>
    </div>

  </div>

  <!-- side-bar-link -->

  <div class="cd-popup" role="alert">
    <div class="cd-popup-container">
      <h2>ยืนยันการลบรายชื่อนักศึกษา</h2>
      <p>342233/2564 Database Analysis and Design </p>
      <ul class="cd-buttons">
        <li><a href="#0">ยืนยัน</a></li>
        <li><a href="#0">ยกเลิก</a></li>
      </ul>
      <a href="#0" class="cd-popup-close img-replace">Close</a>
    </div> <!-- cd-popup-container -->
  </div>

  <div class="add-popup" role="alert">
    <div class="add-popup-container">
      <h2>เพิ่มข้อมูลนักศึกษา</h2>
      <p > Username <br> <input style="height: 25px; width: 300px;"
        type="text"> </p>
      <ul class="cd-buttons">
        <li><a href="#0">ยืนยัน</a></li>
        <li><a href="#0">ยกเลิก</a></li>
      </ul>
      <a href="#0" class="cd-popup-close img-replace">Close</a>
    </div> <!-- cd-popup-container -->
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="./script.js"></script>

  <!-- Part Java Script -->
  <script>
    /* action profile */
    function menuToggle() {
      const toggleMenu = document.querySelector('.menu');
      toggleMenu.classList.toggle('active')
    }



    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }

    // Add active class to the current button (highlight it)
    var header = document.getElementById("nav");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }


    //ปอปอัพลบ
    jQuery(document).ready(function ($) {
      //open popup
      $('.cd-popup-trigger').on('click', function (event) {
        event.preventDefault();
        $('.cd-popup').addClass('is-visible');
      });

      //close popup
      $('.cd-popup').on('click', function (event) {
        if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
          event.preventDefault();
          $(this).removeClass('is-visible');
        }
      });
      //close popup when clicking the esc keyboard button
      $(document).keyup(function (event) {
        if (event.which == '27') {
          $('.cd-popup').removeClass('is-visible');
        }
      });
    });

    //ปอปอัพเพิ่มมมมม
    jQuery(document).ready(function ($) {
      //open popup
      $('.add-popup-trigger').on('click', function (event) {
        event.preventDefault();
        $('.add-popup').addClass('is-visible');
      });

      //close popup
      $('.add-popup').on('click', function (event) {
        if ($(event.target).is('.cd-popup-close') || $(event.target).is('.add-popup')) {
          event.preventDefault();
          $(this).removeClass('is-visible');
        }
      });
      //close popup when clicking the esc keyboard button
      $(document).keyup(function (event) {
        if (event.which == '27') {
          $('.add-popup').removeClass('is-visible');
        }
      });
    });
  </script>

</body>

</html>