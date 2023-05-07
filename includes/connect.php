<?php

$con = mysqli_connect('localhost', 'root', '', 'cat');
if (!$con) {
    // echo "Connected";
    die(mysqli_error($con));
}
