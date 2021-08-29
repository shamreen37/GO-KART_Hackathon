<?php

  include("common.php");
     $id= $_POST['team_id'];
     $full_name= $_POST['full_name'];
     $team_code= $_POST['team_code'];
     $team_name= $_POST['team_name'];
$email= $_POST['email'];
$contact= $_POST['contact'];



    $submit_query="INSERT INTO registration_member(full_name,team_code,team_name,email,contact) "
            . "values('$full_name','$team_code','$team_name','$email','$contact')";
$user_registration_submit= mysqli_query($con,$submit_query) or die(mysqli_error($con));





header('location:registration.php');