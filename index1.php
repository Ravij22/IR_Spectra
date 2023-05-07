<?php
include('includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <!-- Title of the page -->
    <link rel="stylesheet" href="css_file.css">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        @import url("https://font.googleapis.com/css?family=Poppins:300,600,700,800,900");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Poppins;
}
body {
  overflow-x: hidden;
  background: #fff;
}

.circles {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  z-index: -1;
}

.circles li {
  position: absolute;
  display: block;
  list-style: none;
  width: 20px;
  border-radius: 50%!important; 
  height: 20px;
  background: #007bff;
  animation: animate 25s linear infinite;
  bottom: -150px;
}

.circles li:nth-child(1) {
  left: 5%;
  width: 50px;
  height: 50px;
  animation-delay: 0s;
}

.circles li:nth-child(2) {
  left: 10%;
  width: 20px;
  height: 20px;
  animation-delay: 2s;
  animation-duration: 12s;
}

.circles li:nth-child(3) {
  left: 6%;
  width: 20px;
  height: 20px;
  animation-delay: 4s;
}

.circles li:nth-child(4) {
  left: 89%;
  width: 60px;
  height: 60px;
  animation-delay: 0s;
  animation-duration: 18s;
}

.circles li:nth-child(5) {
  left: 90%;
  width: 20px;
  height: 20px;
  animation-delay: 0s;
}

.circles li:nth-child(6) {
  left: 85%;
  width: 10px;
  height: 10px;
  animation-delay: 3s;
}

.circles li:nth-child(7) {
  left: 5%;
  width: 50px;
  height: 50px;
  animation-delay: 7s;
}

.circles li:nth-child(8) {
  left: 10%;
  width: 25px;
  height: 25px;
  animation-delay: 15s;
  animation-duration: 45s;
}

.circles li:nth-child(9) {
  left: 100%;
  width: 15px;
  height: 15px;
  animation-delay: 2s;
  animation-duration: 35s;
}

.circles li:nth-child(10) {
  left: 95%;
  width: 50px;
  height: 50px;
  animation-delay: 0s;
  animation-duration: 11s;
}

@keyframes animate {
  0% {
    transform: translateY(0) rotate(0deg);
    opacity: 0.8;
    border-radius: 0;
  }

  100% {
    transform: translateY(-1000px) rotate(720deg);
    opacity: 0;
    border-radius: 50%;
  }
}

.content{
  height: 100vh;
  width: 100vw;
  position: relative;
}

.heading{
  
  font-style: normal;
  font-weight: normal;
  font-size: 64px;
  line-height: 78px;

}

.subheading{
  font-family: Poppins;
  font-style: normal;
  font-weight: normal;
  font-size: 48px;
  line-height: 59px;
  color: #171717;
}

.desc{
  font-family: Poppins;
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 29px;
  position: absolute;
  left: 535px;
  top: 290px;
  font-weight: 500;
  color: #9aacb0;
}

.row{
  position: absolute;
  bottom: 40%;
  width: 100vw;
}

.names1{
  position: absolute;
  bottom: 10%;
  left: 49%;
  transform: translate(-50%,-50%);
}

.names2{  
  position: absolute;
  bottom: 5%;
  left: 49%;
  transform: translate(-50%,-50%);
}

    </style>
</head>

<body>
    <!-- Background Animation Starts -->
    <!-- <div class="container">
         <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul> 
    </div> -->
    <!-- Background Animation Ends -->
    <?php include('navbar.php'); ?>
    <div id="nav-placeholder">

    </div>
    <section class="home-section">
    <div class="content">
      <br>
        <h1 class="heading text-center pt-5">IR SPECTROSCOPY</h1>
        <br>
        <h2 class="subheading text-center">Post Quiz</h2>
        <div class="row text-center">
            <div class="col-12">
                <a href="easy.php" class="btn btn-dark">Easy</a>
                <a href="medium.php" class="btn btn-dark">Medium</a>
                <a href="hard.php" class="btn btn-dark">Hard</a>
            </div>
        </div>

    </div>
</section>
</body>

</html>