<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $team = mysqli_real_escape_string($conn, $_POST['team']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   

   if($team === "team a"){
      $select = mysqli_query($conn, "SELECT * FROM `cta` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team A';
      }
   }elseif($team === "team b"){
      $select = mysqli_query($conn, "SELECT * FROM `ctb` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team B';
      }
   }elseif($team === "team c"){
      $select = mysqli_query($conn, "SELECT * FROM `ctc` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team C';
      }
   }elseif($team === "team d"){
      $select = mysqli_query($conn, "SELECT * FROM `ctd` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team D';
      }
   }elseif($team === "team e"){
      $select = mysqli_query($conn, "SELECT * FROM `cte` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team E';
      }
   }elseif($team === "team f"){
      $select = mysqli_query($conn, "SELECT * FROM `ctf` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team F';
      }
   }elseif($team === "team g"){
      $select = mysqli_query($conn, "SELECT * FROM `ctg` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team G';
      }
   }elseif($team === "team h"){
      $select = mysqli_query($conn, "SELECT * FROM `cth` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team H';
      }
   }elseif($team === "team i"){
      $select = mysqli_query($conn, "SELECT * FROM `cti` WHERE email = '$email' AND password = '$pass'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $row = mysqli_fetch_assoc($select);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['user_team'] = $row['team'];
         header('location:home.php');
      }else{
         $message[] = 'Login Details Does Not Match Any Data Registered Under The Chosen Team I';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Counsellor Login</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <label for="team">Select Team and Input Login Details:</label>
      <select class="box" name="team" id="team">
         <option value="team a">Team A</option>
         <option value="team b">Team B</option>
         <option value="team c">Team C</option>
         <option value="team d">Team D</option>
         <option value="team e">Team E</option>
         <option value="team f">Team F</option>
         <option value="team g">Team G</option>
         <option value="team h">Team H</option>
         <option value="team i">Team I</option>
      </select>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="submit" name="submit" value="login now" class="btn">
      <!-- <p>don't have an account? <a href="register.php">regiser now</a></p> -->
   </form>

</div>

</body>
</html>