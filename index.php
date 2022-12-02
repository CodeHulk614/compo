<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Contact</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname">

        <label for="mname">Other/Middle Name(s)</label>
        <input type="text" id="mname" name="mname">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <fieldset>
            <legend>Gender</legend>

            <label>
                <input type="radio" name="gender" value="1" checked>
                Male
            </label>

            <br>

            <label>
                <input type="radio" name="gender" value="2">
                Female
            </label>

            <br>

            <label>
                <input type="radio" name="gender" value="3">
                Others
            </label>

        </fieldset>

        <label for="cv">CV</label>
        <input type="file" id="cv" name="cv">

        <label for="ps">Personal Statement</label>
        <input type="file" id="ps" name="ps">

        <label for="ssce">SSCE Certificate</label>
        <input type="file" id="ssce" name="ssce">

        <label for="dp">International Passport Data Page</label>
        <input type="file" id="dp" name="dp">

        <label for="mc">Marriage Certificate</label>
        <input type="file" id="mc" name="mc">

        <label for="orl">Official Reference Letter</label>
        <input type="file" id="orl" name="orl">

        <label for="arl">Academic Reference Letter</label>
        <input type="file" id="arl" name="arl">

        <label for="bh">BSC/HND</label>
        <input type="file" id="bh" name="bh">

        <label for="trans">Transcript</label>
        <input type="file" id="trans" name="trans">
        
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        

        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button type="submit" name="submit">Submit</button>

    </form>

</body>
</html>

<?php 
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "tgm");

    if(isset($_POST['submit'])){
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $gender = filter_input(INPUT_POST, "gender", FILTER_VALIDATE_INT);
        $cv = addslashes(file_get_contents($_FILES["cv"]["tmp_name"]));
        $ps = addslashes(file_get_contents($_FILES["ps"]["tmp_name"]));
        $ssce = addslashes(file_get_contents($_FILES["ssce"]["tmp_name"]));
        $dp = addslashes(file_get_contents($_FILES["dp"]["tmp_name"]));
        $mc = addslashes(file_get_contents($_FILES["mc"]["tmp_name"]));
        $orl = addslashes(file_get_contents($_FILES["orl"]["tmp_name"]));
        $arl = addslashes(file_get_contents($_FILES["arl"]["tmp_name"]));
        $bh = addslashes(file_get_contents($_FILES["bh"]["tmp_name"]));
        $trans = addslashes(file_get_contents($_FILES["trans"]["tmp_name"]));
        $message = $_POST["message"];
        $priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);


        $query = "INSERT INTO users (`fname`, `mname`, `lname`, `email`, `gender`, `cv`, `ps`, `ssce`, `dp`, `mc`, orl, `arl`, `bh`, `trans`, `body`, `priority`)
        VALUES ('$fname','$mname', '$lname','$email','$gender','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$message', '$priority')";
        $query_run = mysqli_query($connection, $query);


        if($query_run){
            $message = 'Successful';
            header("location:success.html");
            // exit;
        }else {
            $message = 'Unsuccessful';
            header("location:error.html");
            // exit;
        }
    }
?>