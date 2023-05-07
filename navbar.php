<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_file.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IR Spectroscopy</title>
</head>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxs-flask'></i>
        <!-- <img loading="lazy" src="nirma_icon.bmp" width="20px"a alt="" /> -->
        <div class="logo_name">IR Virtual Lab</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <?php
        if (!isset($_SESSION['username'])) { //session not active
            echo "
            <li>
            <a href=''>
                <i class='bx bx-user'></i>
                <span class='links_name'>  Welcome Guest</span>
            </a>
            <span class='tooltip'>  Welcome Guest</span>
        </li>
            
                ";
        } else {
            echo "

            <li>
            <a href=''>
                <i class='bx bx-user'></i>
                <span class='links_name'>  Welcome " . $_SESSION['username'] . "</span>
            </a>
            <span class='tooltip'>  Welcome " . $_SESSION['username'] . "</span>
                ";
        }
        ?>

        <li>
            <a href="index.php">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Aim</span>
            </a>
            <span class="tooltip">Aim</span>
        </li>
        <li>
            <a href="theory.php">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Theory</span>
            </a>
            <span class="tooltip">Theory</span>
        </li>
        <li>
        <a href="simulation.php">
          <i class='bx bx-laptop'></i>
          <span class="links_name">Simulation</span>
        </a>
        <span class="tooltip">Simulation</span>
        </li>
        <li>
            <a href="study.php">
                <i class='bx bx-chart'></i>
                <span class="links_name">Study functional groups</span>
            </a>
            <span class="tooltip">Study functional groups</span>
        </li>
        <li>
            <a href="index1.php">
                <i class='bx bx-book'></i>
                <span class="links_name">Quiz</span>
            </a>
            <span class="tooltip">Quiz</span>
        </li>

        

        <li>
            <a href="feedback.php">
                <i class='bx bx-message'></i>
                <span class="links_name">Feedback</span>
            </a>
            <span class="tooltip">Feedback</span>
        </li>

        <li>
            <a href="about.php">
                <i class='bx bxs-contact'></i>
                <span class="links_name">About Us</span>
            </a>
            <span class="tooltip">About Us</span>
        </li>
        <?php
        if (!isset($_SESSION['username'])) {
            echo "<li>
            <a href='./user/login.php'>
            <i class='bx bx-log-in'></i>
                <span class='links_name'>Login</span>
            </a>
            <span class='tooltip'>Login</span>
        </li>";
        } else {
            echo "</li>
            <li>
            <a href='./user/logout.php'>
                <i class='bx bx-log-out'></i>
                <span class='links_name'>Logout</span>
            </a>
            <span class='tooltip'>Logout</span>
        </li>";
        }

        ?>
    </ul>
</div>


<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
    $(function() {
        $("#nav-placeholder").load("navbar.html");
    });
</script>