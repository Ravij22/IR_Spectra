<?php
include('includes/connect.php');
session_start();
?>

<html>
    <head>
    <!-- <link rel="stylesheet" href="css_file.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type="text/javascript" src="quiz.js" defer=""></script>
    <link rel="stylesheet" type="text/css" href="quiz.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
<!-- 
        <style>
            tr,td,span{
                text-align:left;
            }
            </style> -->
            
    </head>
    <body>
    <?php include('navbar.php'); ?>
    <div id="nav-placeholder"> </div>
    <!-- <section class="home-section"> -->
   
   
   <!-- <div align="center" style="background-color:#343a40; color:white;" id="header">
      <h1 id="title" >Quiz</h1> 
      <div class="rform">
          
      </div>
      <h2> This quiz contains 9 questions</h2>
   </div> 
   
   <div class="ostyle">
   <div style="display:block" id='t1'> 
           <table border="0">
               <tr><td colspan="3"><h2 id="ques"></h2></td></tr>    
     <tr ><td><input type="radio" id="o1"  name='radiobutton'><span>&nbsp &nbsp</span><span id="o11"></span></td><td style="padding-bottom: 3px; padding-top: 3px;"></td></tr>
     <tr><td><input type="radio" id="o2" name='radiobutton'><span>&nbsp &nbsp</span><span id="o22"></span></td><td style="padding-bottom: 3px; padding-top: 3px;"></td></tr>
     <tr><td><input type="radio" id="o3" name='radiobutton'><span>&nbsp &nbsp</span><span id="o33"></span></td><td  style="padding-bottom: 3px; padding-top: 3px;"></td></tr>
     <tr><td><input type="radio" id="o4" name='radiobutton'><span>&nbsp &nbsp</span><span id="o44"></span></td><td  style="padding-bottom: 3px; padding-top: 3px;"></td></tr>
  <tr><td colspan="3"> <input type="submit" value="Submit" style="display:block;" onclick="check()"  id="submit" class="btn btn-warning"></td></tr>
  <tr><td colspan="3"><p style="display:none;color:green;" id="correct">Correct<p></td></tr>
    

          <tr><td colspan="3"><p style="display:none;color:red;" id="wrong">Wrong<p></td></tr>
            <tr><td colspan="3"><p style="display:none;color:rgb(4, 125, 133);" id="desc"><p></td></tr>
            
            <tr><td colspan="3"><input type="button" value="Next" style="display:none;" id="next" onclick="next1()" class="btn btn-success"></td></tr>
            <tr><td colspan="3"><p style="display:none;" id="demo"><p></td></tr>
                <tr><td colspan="3"><p style="display:none;" id="demoscore"><p></td></tr>
        </table>
   </div>

   <table style="display: none;" id="ta2" >
    <tr><td><span>•&nbsp</span><span id="q1"> </span> <span>&nbsp-&nbsp</span><span id="a1"></span></td></tr>
     <tr><td><span>•&nbsp</span><span id="q2"> </span> <span>&nbsp-&nbsp</span><span id="a2"></span></td></tr>
      <tr><td><span>•&nbsp</span><span id="q3"> </span> <span>&nbsp-&nbsp</span><span id="a3"></span></td></tr>
       <tr><td><span>•&nbsp</span><span id="q4"> </span> <span>&nbsp-&nbsp</span><span id="a4"></span></td></tr>
        <tr><td><span>•&nbsp</span><span id="q5"> </span> <span>&nbsp-&nbsp</span><span id="a5"></span></td></tr>
         <tr><td><span>•&nbsp</span><span id="q6"> </span> <span>&nbsp-&nbsp</span><span id="a6"></span></td></tr>
          <tr><td><span>•&nbsp</span><span id="q7"> </span> <span>&nbsp-&nbsp</span><span id="a7"></span></td></tr>
           <tr><td><span>•&nbsp</span><span id="q8"> </span> <span>&nbsp-&nbsp</span><span id="a8"></span></td></tr>
            <tr><td><span>•&nbsp</span><span id="q9"> </span> <span>&nbsp-&nbsp</span><span id="a9"></span></td></tr>
</table>
<br>
</div>
   <BUTTON id="restart" style="display:none " onclick="re()" class="btn btn-info">Restart</BUTTON>
   </section> -->
    </body>
</html>