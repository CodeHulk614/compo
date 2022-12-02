
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
                                        <!-- FORM CODES -->
    <div>
        <form method="POST" action="">
            <div class="jumbotron" style="margin-left:55px; margin-right: 55px; margin-top: 25px;">
                <h1 class="display-4" style="text-align:center">Admin Signup</h1>
                <div class="form-group" style="margin-left:25px; margin-right: 25px;">
            <label for="fname">Full Name</label>
            <input type="text"
                class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="Input Full Name" required>
                <br>

                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email"  placeholder="Input Email" required>
                <br>

                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Input Password" required>
                <br>

                <div class="error-text" style="margin-left: 20px; margin-right: 20px; background-color: indianred; color: white; border-radius: 20px; text-align: center; display: none;">Passwords Do Not Match
                <br>
                </div>

                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="password" id="confirm" placeholder="Must Match Password" required>
                <br>
                
                <button type="submit" name="submit" class="btn btn-dark">Submit</button>
            </div>
            </div>
        </form>
    </div>

                        <!-- PASSWORD SIMILARITY CHECK CODES -->
<script>
    
    const errorText = document.querySelector('.error-text')
    const btn = document.querySelector('.btn').onclick = function(){
        const ps2 = document.querySelector('#confirm').value
        const ps1 = document.querySelector('#password').value

        if(ps2 != ps1){
            errorText.style.display= "block";
            return false
        } else {
            errorText.style.display = "none";
        }
    }

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php 
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "admin");

    if(isset($_POST['submit'])){
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        $query = "INSERT INTO users (`fname`, `email`, `password`)
        VALUES ('$fname','$email', '$password')";
        $query_run = mysqli_query($connection, $query);


        if($query_run){
            echo '<script>alert("Saved Successfully, Press The OK button to Login")</script>';
            header("location:admin_login.php");
            exit;
        }else {
            echo '<script>alert("Something Went Wrong")</script>';
            header("location:admin_signup.php");
            exit;
        }
    }
?>