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
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background : #F9F6EE;
        }
    </style>
    <title>IR Spectroscopy</title>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div id="nav-placeholder">

    </div>
    
    <section class="home-section">
    <h1 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">IR SPECTROSCOPY VLAB</span></h1>
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">AIM</span></h2>
    <div class="w3-container" id="menu">
                    <div class="w3-content" style="max-width:1200px;">
                    <p style="padding: 10px; font-size: 17px;"> &nbsp The aim of this set of tasks is to give students the opportunity to identify the most significant bands.
            The method that uses the infrared portion of the electromagnetic spectrum is called infrared spectroscopy, or IR spectroscopy. The IR area operates primarily on the basis of absorption spectroscopy and is located between the visible and microwave ranges. The electromagnetic spectrum's infrared region is typically broken down into three areas: near or higher energy IR (14000 - 4000 cm-1), mid-IR (4000 - 400 cm-1), and far or low energy IR (400 - 10 cm-1). The research substance's fundamental vibrations and related rotational-vibrational structure are revealed via the mid-infrared spectrum. By identifying its functional groups, infrared spectroscopy, which is the absorption of infrared radiation by molecules, helps to clarify the structure of molecules. A Fourier transform infrared (FTIR) instrument is one of the typical lab tools that uses this technology.
            <br><br>The aim of this experiment is:
<br>
        1) To learn solution sample prepartion and handling procedures to measure an IR spectrum
        <br>
        2) To carry out Spectral analysis of the sample measured
            
            
    </p>    
        <center><img src="https://thechemistrynotes.com/wp-content/uploads/2022/07/Infrared-Spectroscopy.jpg" width=60%></center>
        <br>
    </div>
    <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">PRINCIPLE</span></h2>
    <div class="w3-content" style="max-width:1200px">
    <p style="padding: 10px; font-size: 17px;">
        

The IR spectroscopy theory utilizes the concept that molecules tend to absorb specific frequencies of light that are characteristic of the corresponding structure of the molecules. The energies are reliant on the shape of the molecular surfaces, the associated vibronic coupling, and the mass corresponding to the atoms.
            </p>
            
        
        </div>

        <div class="w3-content" style="max-width:1200px">
    <p style="padding: 10px; font-size: 17px;">
    Necessary condition :
    <br>

    The change in the electric dipole moment of the functional group present in a molecule or a sample during the vibration based on the selection rule for IR transitions is a necessary requirement for a molecule.
            </p>
            
        
        </div>
    </div>
    </section>

</body>

</html>