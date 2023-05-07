
<?php
include('includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://font.googleapis.com/css?family=Poppins:300,600,700,800,900");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #e1e3d0;
  font-family: "Poppins", sans-serif;
}

/*----- Reset some items -----*/
h1 {
    color: #0e1538;
},
h2,
h3 {
    color: white;
},
h4,
h5,
h6 {
  margin: 0;
  padding: 0;
  line-height: 0;
}

p {
  margin: 0;
  padding: 0;
  line-height: 0;
}

a {
  text-decoration: none;
}

ul {
  list-style: none;
}

/*----- | Box Section | -----*/
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 120px;
  padding-bottom: 80px;
}

.container {
  width: 1170px;
  display: flex;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 30px;
  padding-left: 20px;
  padding-right: 20px;
}

.box {
  background: #0e1538;
  width: 100%;
  height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.box::before {
  content: "";
  position: absolute;
  width: 150px;
  height: 140%;
  background: linear-gradient(#00ccff, #e5ee33);
  animation: rotate 4s linear infinite;
  -webkit-animation: rotate 6s linear infinite;
}

.box::after {
  content: "";
  background-color: #001440;
  position: absolute;
  inset: 4px;
  border-radius: 16px;
  -webkit-border-radius: 16px;
  -moz-border-radius: 16px;
  -ms-border-radius: 16px;
  -o-border-radius: 16px;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

.box__head,
.box__content,
.box__social {
  z-index: 1;
  

}

.box__head {
  width: 130px;
  max-width: 100%;
  margin-bottom: 40px;
}

.box__head > img {
  max-width: 100%;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
}

.box__content {
  display: flex;
  flex-direction: column;
  row-gap: 20px;
  margin-bottom: 40px;
}

.box__content > h3 {
  color: white;
  font-size: 1rem=;
  font-weight: 600;
}

.box__content > p {
  color: #586295;
  line-height: 1.5;
  font-weight: 300;
}

.box__social {
  display: flex;
  justify-content: center;
  align-items: center;
  column-gap: 12px;
}

.box__social > i {

  background-color: #586295;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  color: #bdc6d0;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  cursor: pointer;
  transition: 0.3s;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
}

.bx bxl-github:hover {
  background-color: #1877f2;
}

.bx bxl-linkedin:hover {
  background-color: #9146ff;
}

.bx bx-mail-send:hover {
  background-color: #ff0000;
}

.fa-twitter:hover {
  background-color: #1da1f2;
}
.tle{
    padding-top: 50px;
    align-items: center;
    justify-content: center;
    text-align: center;
    /* background-color: #0e1538; */
    color: rgb(3, 1, 52);
}

    </style>
</head>
<body>

    <?php include('navbar.php'); ?>
    <div id="nav-placeholder">

    </div>
    <section class="home-section">
    <div class="tle"><p><h1>CONTRIBUTORS</h1></p></div>
    <div class="wrapper">
        <div class="container">
          <!-- Box [1] -->
          <div class="box">
            <div class="box__head">
              <img src="devam_img.jpeg">
            </div>
            <div class="box__content">
              <h3>Devam Nanavati</h3>
              <p>20BCE054</p>
            </div>
            <div class="box__social">
                <a href="https://github.com/devam1502" target="_blank"> <i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/nilay-lilawala-28b69b1ba/?originalSubdomain=in" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:devamnanavati@gmail.com"><i class="bx bx-mail-send" target="_blank"></i></a>
            </div>
          </div>
          <!-- Box [2] -->
          <div class="box">
            <div class="box__head">
              <img src="ravij_img.png">
            </div>
            <div class="box__content">
              <h3>Nilay Lilawala</h3>
              <p>20BCE141</p>
            </div>
            <div class="box__social">
                <a href="https://github.com/nilaylilawala" target="_blank"> <i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/nilay-lilawala-28b69b1ba/?originalSubdomain=in" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:rachitshah1525@gmail.com"><i class="bx bx-mail-send" target="_blank"></i></a>
            </div>
          </div>
          <!-- Box [3] -->
          <div class="box">
            <div class="box__head">
              <img src="malav_img.png">
            </div>
            <div class="box__content">
              <h3>Malav Shah</h3>
              <p>20BCE147</p>
            </div>
            <div class="box__social">
                <a href="https://github.com/Malavshah26" target="_blank"> <i class="bx bxl-github text-decoration-none"></i></a>
                <a href="https://www.linkedin.com/in/malav-shah-73ab5417b/" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:malav.baroda@hotmail.com"><i class="bx bx-mail-send" target="_blank"></i></a>
            </div>
          </div>
          <!-- Box [4] -->
          <div class="box">
            <div class="box__head">
              <img src="nilay_img.jpeg">
            </div>
            <div class="box__content">
              <h3>Ravij Bharadwaj</h3>
              <p>20BCE246</p>
            </div>
            <div class="box__social">
                <a href="https://github.com/Ravij22" target="_blank"> <i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/nilay-lilawala-28b69b1ba/?originalSubdomain=in" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:ravijvb@gmail.com"><i class="bx bx-mail-send" target="_blank"></i></a>
            </div>
          </div>
          <!-- Box [5] -->
          <div class="box">
            <div class="box__head">
              <img src="rachit_img.jpg">
            </div>
            <div class="box__content">
              <h3>Rachit Shah</h3>
              <p>20BCE266</p>
            </div>
            <div class="box__social">
                <a href="https://github.com/Rachitshah07" target="_blank"> <i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/nilay-lilawala-28b69b1ba/?originalSubdomain=in" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:nilay.lilawala@email.com"><i class="bx bx-mail-send" target="_blank"></i></a>
            </div>
          </div>
        </div>
      </div>
</section>
</body>
</html>