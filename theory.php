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
    <link rel="stylesheet" href="css_file.css">
    <title>IR Spectroscopy</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://font.googleapis.com/css?family=Poppins:300,600,700,800,900");
        * {
            font-family: Poppins;
        }
        body,
        html {
            height: 100%;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("https://www.google.com/imgres?imgurl=https%3A%2F%2Fd3i71xaburhd42.cloudfront.net%2F3e825816adce8dc949639454dc2dea2301901aab%2F3-Figure1-1.png&tbnid=Dhej3qfguEmzYM&vet=12ahUKEwiR3Neg97P-AhWm2nMBHfF-A7YQMygoegUIARCeAg..i&imgrefurl=https%3A%2F%2Fwww.semanticscholar.org%2Fpaper%2FHYDROGENATION-OF-ACETONE-ON-ZnO-CATALYST%25EF%25BC%259APart-2.-of-Nagai-Miyahara%2F3e825816adce8dc949639454dc2dea2301901aab%2Ffigure%2F0&docid=FY-ZYjKiutwFkM&w=818&h=362&q=ir%20spectroscopy%20bg&hl=en&ved=2ahUKEwiR3Neg97P-AhWm2nMBHfF-A7YQMygoegUIARCeAg");
            min-height: 75%;
        }

        .menu {
            display: none;
        }
     
    </style>
</head>

<body>
    <?php include('navbar.php') ?>
    <section class="home-section">
        <div class="theory">

            <!-- Add a background color and large text to the whole page -->
            <div class="w3-sand w3-grayscale w3-large">

                <!-- About Container -->
                <div class="w3-container" id="about">
                    <div class="w3-content" style="max-width:700px">
                        <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">What is IR Spectroscopy?</span></h2>

                        <p>IR Spectroscopy is a technique that uses infrared electromagnetic radiations to
                            determine the functional groups present in the analysed sample. </p>


                        <p>The main goal of IR spectroscopic analysis is to determine the chemical functional groups in the sample. Different functional groups absorb characteristic frequencies of IR radiation. </p>
                        <p>Using various sampling accessories, IR spectrometers can accept a wide range of sample types such as gases, liquids, and solids.</p>

                        <img src="https://www.priyamstudycentre.com/wp-content/uploads/2022/12/Infrared-IR-spectroscopy-and-spectrophotometer-instrumentation-with-regions-of-IR-spectrum-and-uses.png" style="width:100%;max-width:1000px" class="w3-margin-top">

                    </div>
                </div>

                <div class="w3-container" id="menu">
                    <div class="w3-content" style="max-width:700px">

                        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">MOLECULAR VIBRATIONS</span></h5>

                        <div class="w3-row w3-center w3-card w3-padding">
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                                <div class="w3-col s6 tablink">STRECHING</div>
                            </a>
                            <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                                <div class="w3-col s6 tablink">BENDING</div>
                            </a>
                        </div>

                        <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                            <h5 style="font-family:Poppins;">Symmetrical Streching</h5>
                            <p class="w3-text-grey">The atoms of a molecule either move away or towards the central atom, but in the same direction</p><br>

                            <h5 style="font-family:Poppins;">Asymmetrical Streching</h5>
                            <p class="w3-text-grey">One atom moves towards the central atom while the other departs from it</p><br>
                        </div>

                        <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                            <h5 style="font-family:Poppins;">Scissoring(in-plane)</h5>
                            <p class="w3-text-grey"> In-plane bending of atoms occurs wherein they swing back and forth i.e. they approach each other </p><br>

                            <h5 style="font-family:Poppins;">Rocking(in-plane)</h5>
                            <p class="w3-text-grey">In-plane bending of atoms occurs wherein they swing back and forth wrt central atom</p><br>

                            <h5 style="font-family:Poppins;">Wagging (out-of-plane) </h5>
                            <p class="w3-text-grey">Two atoms oscillate up and below the plane wrt central atom</p><br>

                            <h5 style="font-family:Poppins;">Twisting (out-of-plane)</h5>
                            <p class="w3-text-grey">One of the atoms moves up the plane while other moves down the plane wrt central atom</p><br>


                        </div>
                        <img src="https://qph.cf2.quoracdn.net/main-qimg-328389b975ce8c9d46a2d50ea06a1776.webp" style="width:100%;max-width:1000px;margin-top:32px;">
                    </div>
                </div>
<br><br>
                <div class="w3-container" id="where" style="padding-bottom:32px;">
                    <div class="w3-content" style="max-width:1200px"><center>
                        In "Simulation" section, get a virtual experience of the IR Lab.
                        Also, you will get to know more about Functional Groups anf their characteristic IR graphs in "Study Functional Group" Section.
    </center>
                    </div>
                </div>

            </div>



            <script>
                // Tabbed Menu
                function openMenu(evt, menuName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("menu");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                    }
                    document.getElementById(menuName).style.display = "block";
                    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
                }
                document.getElementById("myLink").click();
            </script>
        </div>
    </section>

</body>

</html>