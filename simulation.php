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
    <style>
         @import url("https://font.googleapis.com/css?family=Poppins:300,600,700,800,900");
         * {
            font-family: Poppins;
         }
        #myCanvas {
            /* align-content: center; */
            position: relative;
            /* padding-left: 0%;
            padding-right: 0%;
            margin-left: auto;
            margin-right: auto; */
            /* top: 150px;
            left: 250px; */
            border: 1px solid black;
            }
        
        /* .but{
            padding: 15px;
            
        } */
        .quiz {
            float: left;
            
        }
        .btns {
            padding: 50px;
        }
        .custom-btn {
  width: 168px;
  height: 70px;
  color: #fff;
  border-radius:10px;
  padding: 10px 25px;

  font-weight: 500;
  font-size: 14px; 
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}


        /* 7 */
        .btn-7 {
            background: #0e1538;
            padding: 0;
            border: none;
        }

        .btn-7 span {
            position: relative;
            display: block;
            width: 100%;
            height: 100%;
        }

        .btn-7:before,
        .btn-7:after {
            position: absolute;
            content: "";
            right: 0;
            bottom: 0;
            background: #0e1538;
            box-shadow:
                -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn-7:before {
            height: 0%;
            width: 2px;
        }

        .btn-7:after {
            width: 0%;
            height: 2px;
        }

        .btn-7:hover {
            color: #0e1538;
            background: transparent;
        }

        .btn-7:hover:before {
            height: 100%;
        }

        .btn-7:hover:after {
            width: 100%;
        }

        .btn-7 span:before,
        .btn-7 span:after {
            position: absolute;
            content: "";
            left: 0;
            top: 0;
            background: rgba(251, 75, 2, 1);
            box-shadow:
                -7px -7px 20px 0px rgba(255, 255, 255, .9),
                -4px -4px 5px 0px rgba(255, 255, 255, .9),
                7px 7px 20px 0px rgba(0, 0, 0, .2),
                4px 4px 5px 0px rgba(0, 0, 0, .3);
            transition: all 0.3s ease;
        }

        .btn-7 span:before {
            width: 2px;
            height: 0%;
        }

        .btn-7 span:after {
            height: 2px;
            width: 0%;
        }

        .btn-7 span:hover:before {
            height: 100%;
        }

        .btn-7 span:hover:after {
            width: 100%;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<div id="nav-placeholder"> </div>
<h1>
    IR SPECTROSCOPY SIMULATION
</h1>
<div class='quiz'>
<div class="btns">
    <button id="sourceimage" class="custom-btn btn-7">Insert source</button>
    <img id="source" src="ir_source.png" alt="" style="display:none" width="100" height="100">
    <button id="drawButton" class="custom-btn btn-7">Emit Beam</button>
    <button id="mirror" class="custom-btn btn-7">Insert mirrors</button>
    <button id="monochromator" class="custom-btn btn-7">Insert monochromator</button>
    <button id="sample" class="custom-btn btn-7">Insert sample</button>
    <button id="splitter" class="custom-btn btn-7">Insert splitter</button>
    <button id="detector" class="custom-btn btn-7">Insert detector</button>
    <button id="recorder" class="custom-btn btn-7">Insert recorder</button>
</div>

<div class="mydiv" style="text-align: center;">
    <canvas id="myCanvas"></canvas>
</div>
</div>

    

</body>
<script>
    // get references to the button and canvas elements
    const drawButton = document.getElementById("drawButton");
    const canvas = document.getElementById("myCanvas");

    // set the canvas width and height
    canvas.width = 1000;
    canvas.height = 400;

    var c=1;
    // get the canvas context
    const ctx = canvas.getContext("2d");

    sourceimage.addEventListener("click", () => {
        if(c==1)
        {
            // ctx.beginPath();
            // ctx.moveTo(50,100);
            var img = document.getElementById("source");
            
            ctx.drawImage(img,50,130,100,100);
            c=2;
        }
        else
        {
            alert('Incorrect order');
        }
    });

    // add a click event listener to the button
    drawButton.addEventListener("click", () => {
    // draw a line on the canvas
    if(c==2)
    {
        ctx.beginPath();
        ctx.moveTo(150, 170);
        ctx.lineTo(300, 170);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(150, 190);
        ctx.lineTo(300, 190);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(225, 165);
        ctx.lineTo(235, 180);
        ctx.stroke();
        ctx.beginPath();
        ctx.moveTo(235, 180);
        ctx.lineTo(225, 195);
        ctx.stroke();
        ctx.font = "12px Arial";
        ctx.fillText("IR Beam", 210, 210);
        c=3;
    }
    else
    {
        alert('Incorrect order');
    }
    });

    mirror.addEventListener("click", () => {
        if(c==3)
        {
            ctx.beginPath();
            ctx.lineWidth = "4";
            ctx.strokeStyle = "orange";
            ctx.moveTo(305, 165);
            ctx.lineTo(295, 180);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(295, 180);
            ctx.lineTo(305, 195);
            ctx.stroke();
            ctx.font = "12px Arial";
            ctx.fillText("Mirror", 310, 180);
            ctx.beginPath();
            ctx.strokeStyle = "black";
            ctx.lineWidth = "2";
            ctx.moveTo(300, 170);
            ctx.lineTo(300, 70);
            ctx.stroke();
            ctx.beginPath();
            ctx.strokeStyle = "orange";
            ctx.lineWidth = "4";
            ctx.moveTo(290, 80);
            ctx.lineTo(310, 60);
            ctx.stroke();
            ctx.beginPath();
            ctx.strokeStyle = "black";
            ctx.lineWidth = "2";
            ctx.moveTo(300, 70);
            ctx.lineTo(380, 70);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(300, 190);
            ctx.lineTo(300, 290);
            ctx.stroke();
            ctx.beginPath();
            ctx.strokeStyle = "orange";
            ctx.lineWidth = "4";
            ctx.moveTo(290, 280);
            ctx.lineTo(310, 300);
            ctx.stroke();
            ctx.beginPath();
            ctx.strokeStyle = "black";
            ctx.lineWidth = "2";
            ctx.moveTo(300, 290);
            ctx.lineTo(380, 290);
            ctx.stroke();
            c=4;
        }
        else
        {
            alert("Incorrect order");
        }
    });

    monochromator.addEventListener("click", () => {
        if(c==4)
        {
            ctx.beginPath();
            ctx.lineWidth = "3";
            ctx.strokeStyle = "red";
            ctx.rect(380,60,20,240);
            ctx.stroke();
            ctx.font = "12px Arial";
            ctx.fillText("Monochromator", 405, 180);
            c=5;
        }
        else
        {
            alert("Incorrect order");
        }
    });

    sample.addEventListener("click", () => {
        if(c==5)
        {
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.beginPath();
            ctx.moveTo(400, 70);
            ctx.lineTo(500, 70);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(500, 45);
            ctx.lineTo(500, 100);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(500, 100);
            ctx.lineTo(550, 100);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(550, 100);
            ctx.lineTo(550, 45);
            ctx.stroke();
            ctx.fillStyle = "green";
            ctx.fillRect(500, 55, 50, 45);
            ctx.fillStyle = "black";
            ctx.font = "12px Arial";
            ctx.fillText("Sample", 505, 115);

            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.beginPath();
            ctx.moveTo(400, 290);
            ctx.lineTo(500, 290);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(500, 265);
            ctx.lineTo(500, 320);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(500, 320);
            ctx.lineTo(550, 320);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(550, 320);
            ctx.lineTo(550, 265);
            ctx.stroke();
            ctx.fillStyle = "pink";
            ctx.fillRect(500, 275, 50, 45);
            ctx.fillStyle = "black";
            ctx.font = "12px Arial";
            ctx.fillText("Reference", 498, 335);

            ctx.beginPath();
            ctx.moveTo(550, 70);
            ctx.lineTo(600, 70);
            ctx.stroke();      
            ctx.beginPath();
            ctx.moveTo(550, 290);
            ctx.lineTo(600, 290);
            ctx.stroke();      
            c=6;
        }
        else
        {
            alert('Incorrect order');
        }
    });

    splitter.addEventListener("click", () => {
        if(c==6)
        {
            ctx.beginPath();
            ctx.moveTo(590, 60);
            ctx.lineTo(610, 80);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(590, 300);
            ctx.lineTo(610, 280);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(600, 290);
            ctx.lineTo(600, 195);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(600, 70);
            ctx.lineTo(600, 165);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(600, 165);
            ctx.lineTo(680, 165);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(600, 195);
            ctx.lineTo(680, 195);
            ctx.stroke(); 

            ctx.lineWidth = "3";
            ctx.strokeStyle = "red";
            ctx.beginPath();
            ctx.moveTo(670, 180);
            ctx.lineTo(700, 210);
            ctx.stroke(); 

            ctx.beginPath();
            ctx.moveTo(670, 180);
            ctx.lineTo(700, 150);
            ctx.stroke(); 

            ctx.beginPath();
            ctx.moveTo(700, 150);
            ctx.lineTo(730, 180);
            ctx.stroke(); 

            ctx.beginPath();
            ctx.moveTo(700, 210);
            ctx.lineTo(730, 180);
            ctx.stroke(); 
            ctx.font = "12px Arial";
            ctx.fillText("Splitter", 680, 225);
            c=7;
        }
        else
        {
            alert("Incorrect order");
        }
    });

    detector.addEventListener("click", () => {
        if(c==7)
        {
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.beginPath();
            ctx.moveTo(720, 170);
            ctx.lineTo(800, 170);
            ctx.stroke(); 
            ctx.beginPath();
            ctx.moveTo(720, 190);
            ctx.lineTo(800, 190);
            ctx.stroke(); 

            ctx.beginPath();
            ctx.lineWidth = "3";
            ctx.strokeStyle = "brown";
            ctx.rect(800,150,20,60);
            ctx.stroke();
            ctx.font = "12px Arial";
            ctx.fillText("Detector", 790, 225);
            c=8;
        }
        else
        {
            alert("Incorrect order");
        }
    });

    recorder.addEventListener("click", () => {
        if(c==8)
        {
            ctx.lineWidth = "2";
            ctx.strokeStyle = "black";
            ctx.beginPath();
            ctx.moveTo(820, 180);
            ctx.lineTo(870, 180);
            ctx.stroke(); 

            ctx.lineWidth = "3";
            ctx.strokeStyle = "blue";
            ctx.rect(870,140,90,80);
            ctx.stroke();
            ctx.font = "12px Arial";
            ctx.fillText("Recorder", 890, 235);
            c=9;
        }
        else
        {
            alert("Incorrect order");
        }
    });

</script>
</html>