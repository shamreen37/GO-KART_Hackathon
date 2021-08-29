<?php

  include("common.php");
     $id= $_POST['team_id'];
     $team_name= $_POST['team_name'];
     $leader_name= $_POST['leader_name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$institute= $_POST['institute']; 
$racer_id= $_POST['racer_id'];
$licence_no = $_POST['licence_no'];


    $submit_query="INSERT INTO teamregistration(team_name,leader_name,email,contact,institute,racer_id,licence_no) "
            . "values('$team_name','$leader_name','$email','$contact','$institute','$racer_id', '$licence_no')";
$user_registration_submit= mysqli_query($con,$submit_query) or die(mysqli_error($con));
header('location:success.php');
