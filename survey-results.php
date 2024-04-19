<?php require ("connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<title>Results</title>
</head>
<body>
    <?php include "header.php" ?>
<div class="container mx-auto px-4 py-2 my-2 text-center">
 <h2>Survey Results </h2>
    <!--MySQL Query for Fetching data from the database and displaying total surveys-->
<?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT COUNT(user_id) AS Total_surveys FROM user_survey";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $Total_Surveys = mysqli_fetch_assoc($result);
   ?>
<div class="row mb-4">
    <div class="col-md-6 col-md-6 fw-bold">Total number of surveys:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $Total_Surveys['Total_surveys'] ?></div>      
    </div>
    <!--MySQL Query for Fetching data from the database and displaying average age-->
<?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT AVG(age) As AvgAge FROM user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $AverAge = mysqli_fetch_assoc($result);
?>
<div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Average Age:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $AverAge['AvgAge'] ?></div>
  </div>
  <!--MySQL Query for Fetching data from the database and displaying oldest person-->
  <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT MAX(age) As Oldest FROM user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $OldestAge = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Oldest person who participated in survey:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $OldestAge['Oldest'] ?></div>
  </div>
  <!--MySQL Query for Fetching data from the database and displaying youngest person-->
  <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT MIN(age) As Youngest FROM user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $youngAge = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Youngest person who participated in survey:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $youngAge['Youngest'] ?></div>
  </div>
  <br>

    <!--MySQL Query for Fetching data from the database and displaying people who liked pizza-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND((COUNT(fav_food) / COUNT(user_id)) * 100, 1) AS PerPizza FROM user_survey WHERE fav_food LIKE '%pizza%';";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $PerPizza = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Percentage of people who like Pizza:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $PerPizza['PerPizza'], '%' ?></div>
  </div>
    <!--MySQL Query for Fetching data from the database and displaying people who liked pasta-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND((COUNT(fav_food) / COUNT(user_id)) * 100, 1) AS PerPasta FROM user_survey WHERE fav_food LIKE '%pasta%';";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $PerPasta = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Percentage of people who like Pasta:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $PerPasta['PerPasta'], '%' ?></div>
  </div>
    <!--MySQL Query for Fetching data from the database and displaying people who liked pap & wors-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND((COUNT(fav_food) / COUNT(user_id)) * 100, 1) AS PerPap_Wors FROM user_survey WHERE fav_food LIKE '%pap & wors%';";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $PerPap = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Percentage of people who like Pap and Wors:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $PerPap['PerPap_Wors'], '%' ?></div>
  </div>
  <!--MySQL Query for Fetching data from the database and displaying people who liked other-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND((COUNT(fav_food) / COUNT(user_id)) * 100, 1) AS Other FROM user_survey WHERE fav_food LIKE '%other%';";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $PerPap = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">Percentage of people who like Other:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $PerPap['Other'], '%' ?></div>
  </div>
  <br>
    <!--MySQL Query for Fetching data from the database and displaying average people who like to eat out-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND(AVG(scale_eat) , 1) AS AvgEat from user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $AvgEat = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">People like to eat out:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $AvgEat['AvgEat'] ?></div>
  </div>
    <!--MySQL Query for Fetching data from the database and displaying average people who like to watch movies-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND(AVG(scale_mov) , 1) AS AvgMov from user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $AvgMov = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">People like to watch moives:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $AvgMov['AvgMov'] ?></div>
  </div>
    <!--MySQL Query for Fetching data from the database and displaying average people who like to watch tv-->
    <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND(AVG(scale_tv) , 1) AS AvgTv from user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $AvgTv = mysqli_fetch_assoc($result);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">People like to watch tv:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $AvgTv['AvgTv'] ?></div>
  </div>
  <!--MySQL Query for Fetching data from the database and displaying average people who listen to the radio-->
  <?php 
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
    $sql = "SELECT ROUND(AVG(scale_radio) , 1) AS AvgRad from user_survey;";
    $result = mysqli_query($conn,$sql) or die("ERROR: Could not connect. ". mysqli_connect_error());
    $AvgRad = mysqli_fetch_assoc($result);
    mysqli_close($conn);
?>
  <div class="row mb-4">
    <div class="col-sm-5 col-md-6 fw-bold">People like to listen to the radio:</div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 fw-bold"><?php echo $AvgRad['AvgRad'] ?></div>
  </div>
</div>
</div>
</body>
</html>
