<?php
include "connection.php";
$fname= null;
$email= null;
$contact= null;
$age = null;
$checkbfood = null;
$fullname_error = null;
$age_error = null;
$success = null;
$fullname_error = null;
if(isset($_POST['submit']))
{
   if($_POST['submit']=="submit")
     {
        $fname= $_POST['fname'];
        $email= $_POST['email'];
        $contact= $_POST['contact'];
        $birth = $_POST['birth'];
        $age = (date("Y-m-d") - $birth);
        $checkbfood = implode(', ', $_POST['food']);
        $scale_eat = $_POST['scale_eat'];
        $scale_mov = $_POST['scale_mov'];
        $scale_tv = $_POST['scale_tv'];
        $scale_rad = $_POST['scale_rad'];
        $chkfood = "";
        $chkeat = "";
        $chktv = "";
        $chkmov = "";
        $chkrad = "";
        $ageValidation = "/^[0-9-]/";
        $contactValidation = "/^[0-9-]{10}$/";
        //food
        foreach ($checkbfood as $chkfood1) {
        $chkfood.=$chkfood1.",";}
        //eat
        foreach ($scale_eat as $chkeat1) {
        $chkeat.=$chkeat1."";}
        //tv
        foreach ($scale_tv as $chktv1) {
        $chktv.=$chktv1."";}
        //movie
        foreach ($scale_mov as $chkmov1) {
        $chkmov.=$chkmov1."";}
        //radio
        foreach ($scale_rad as $chkrad1) {
        $chkrad.=$chkrad1."";}

        if (empty(trim($fname))) {
            echo $fullname_error = "Field Full Names is empty";
        }

	}


    if(!preg_match($contactValidation,$contact)){
        echo "Incorrect contact format";
    }

    if ($age < 5) {
        echo "
			<script>alert('Must be above 5 or older!.')</script>
		";
    }else{

        $query ="INSERT INTO user_survey (full_name, email, contact, age, fav_food, scale_eat, scale_mov, scale_tv, scale_radio) VALUES ('$fname','$email','$contact','$age','$checkbfood','$chkeat','$chkmov','$chktv','$chkrad')";
        $result=mysqli_query($conn,$query) or die("ERROR: Could not connect. ". mysqli_connect_error());
          header("Location: user-input.php?submit=" . "Successfully Registered!!");
      }
}
        

?>
        