<?php
include('includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us form validation Using Javascript</title>
</head>
<style>
     @import url("https://font.googleapis.com/css?family=Poppins:300,600,700,800,900");

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: Poppins;
}

body{
  background: #00ccff;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 350px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px #11101D; 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #11101D;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #11101D;
  border-radius: 5px;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #11101D;
  color: white;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #11101D;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
  color: red;
}
</style>
<script>
    function validate()
{
  var firstname = document.getElementById("fname").value;
  var lastname = document.getElementById("lname").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var yourfeedback = document.getElementById("yourfeedback").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(fname.length < 3)
  {
    text = "Please Enter a valid First Name!";
    error_message.innerHTML = text;
    return false;
  }
  if(lname.length < 3)
  {
    text = "Please Enter a Valid Last Name!";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10)
  {
    text = "Please Enter valid Phone Number!";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email!";
    error_message.innerHTML = text;
    return false;
  }
  if(address.length <= 140)
  {
    text = "Please Enter More Than 140 Characters!  ";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
</script>
<body>
<?php include('navbar.php'); ?>
    <div id="nav-placeholder">

    </div>
<div class="wrapper">
  <h2>Feedback Form</h2>
  <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();" method="post">
    <div class="input_field">
        <input type="text" placeholder="First Name" id="fname">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Last Name" id="lname">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Your Feedback" id="yourfeedback"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name="done">
    </div>
  </form>
</div>
<?php
    if(isset($_POST["done"]))
    {
        echo "<script>alert('Form submitted successfully');</script>";
    }
?>
</body>
</html>