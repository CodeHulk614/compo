<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="path/to/file/jquery.min.js"></script>
    <link href="path/to/file/select2.min.css" rel="stylesheet" />
    <script src="path/to/file/select2.min.js"></script>
</head>
<body onload="changeValue()">

    <h1>Foundation Student Registration</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <!-- <label for="uid">Student Registeration ID <span style="font-size: small; color: red;"> *</span></label> -->
        <!-- <div class="row"> -->
            <!-- <div class="col"> -->
                <input type="text" name="uid" id="uid" style="display: none;">
            <!-- </div>
        </div> -->
        <!-- <input type="text" name="uid" id="uid"> <button onclick="changeValue()">Assign ID</button><br> -->

        <label for="fname">First Name <span style="font-size: small; color: red;"> *</span></label>
        <input type="text" id="fname" name="fname" required>

        <label for="mname">Other/Middle Name(s) <span style="font-size: small; color: red;"> *</span></label>
        <input type="text" id="mname" name="mname" required>

        <label for="lname">Last Name <span style="font-size: small; color: red;"> *</span></label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email <span style="font-size: small; color: red;"> *</span></label>
        <input type="email" id="email" name="email" required>

        <label for="number">Phone Number <span style="font-size: x-small;"> (A Callable Phone Number)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="text" id="number" name="number" required>

        <fieldset>
            <legend>Gender <span style="font-size: small; color: red;"> *</span></legend>

            <label>
                <input type="radio" name="gender" value="male" checked >
                Male
            </label>

            <br>

            <label>
                <input type="radio" name="gender" value="female">
                Female
            </label>

            <br>

            <label>
                <input type="radio" name="gender" value="others">
                Others
            </label>

        </fieldset>

        <label for="degree">Degree</label>
        <select id="degree" name="degree" required>
            <option value="PHD">PHD</option>
            <option value="Masters" selected>Masters</option>
            <option value="Pre Masters">Pre Masters</option>
            <option value="Top Up">Top Up</option>
            <option value="Bsce">BSCE</option>
            <option value="Foundation">Foundation</option>
        </select>

        <label for="course">Course Name</label>
        <input type="course" id="course" name="course" required>

        <label for="cv">CV <span style="font-size: x-small;"> (PDF Format Only) </span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="cv" name="cv" >

        <label for="ps">Personal Statement <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="ps" name="ps" required>

        <label for="ssce">SSCE Certificate <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="ssce" name="ssce" required>

        <label for="dp">International Passport Data Page <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="dp" name="dp" required>

        <label for="mc">Marriage Certificate <span style="font-size: x-small;"> (Only If Married)</span> <span style="font-size: x-small;"> (PDF Format Only)</span> </label>
        <input type="file" id="mc" name="mc">

        <label for="orl">Official Reference Letter <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="orl" name="orl" >

        <label for="arl">Academic Reference Letter <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="arl" name="arl" >

        <label for="bh">BSC/HND <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="bh" name="bh" >

        <label for="trans">Transcript <span style="font-size: x-small;"> (PDF Format Only)</span> <span style="font-size: small; color: red;"> *</span></label>
        <input type="file" id="trans" name="trans" >
    

        <label for="year">Intake Year</label>
        <select id="year" name="year" required>
        <option value="2023" selected>2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        </select>

        <label for="month">Intake Month</label>
        <select id="month" name="month" required>
            <option value="January">January</option>
            <option value="Mid" selected>Mid Year</option>
            <option value="September">September</option>
        </select>

        

        <label for="team">Team <span style="font-size: x-small; color: red;"> (Pick A Councelling Team)</span> <span style="font-size: small; color: red;"> *</span></label>
        <select id="team" name="team" required>
            <option value="team a">Team A</option>
            <option value="team b" selected>Team B</option>
            <option value="team c">Team C</option>
            <option value="team d">Team D</option>
            <option value="team e" >Team E</option>
            <option value="team f">Team F</option>
            <option value="team g">Team G</option>
            <option value="team h" >Team H</option>
            <option value="team i">Team I</option>
        </select>

        

        <label>
            <input type="checkbox" name="terms" required>
            I agree to the terms and conditions <span style="font-size: small; color: red;"> *</span>
        </label>

        <br>

        <button type="submit" name="submit">Submit</button>

    </form>

    <script type="text/javascript">
        

        function changeValue(){
            var uid = Math.floor(  Math.random() * 100000)
            var str = uid.toString()
            var id = "Student" + str
            var gen = document.querySelector('#uid')
            gen.value= id
        }
       

    // var uid = Math.floor(  Math.random() * 100000)
    // var str = uid.toString()
    // var id = "Student" + str
    

   
</script>

</body>
</html>

<?php 
   
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "tgm");

    if(isset($_POST['submit'])){
        $id = $_POST['uid'];
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $gender = $_POST["gender"];
        $degree = $_POST["degree"];
        $course = $_POST["course"];
        if(empty($_FILES["cv"]["tmp_name"])){
            $cv = move_uploaded_file($_FILES["cv"]["tmp_name"], $_FILES["cv"]["name"]);
        }else{
            $cv = addslashes(file_get_contents($_FILES["cv"]["tmp_name"]));
        }
        
        if(empty($_FILES["ps"]["tmp_name"])){
            $ps = move_uploaded_file($_FILES["ps"]["tmp_name"], $_FILES["ps"]["name"]);
        }else{
            $ps = addslashes(file_get_contents($_FILES["ps"]["tmp_name"]));
        }

        if(empty($_FILES["ssce"]["tmp_name"])){
            $ssce = move_uploaded_file($_FILES["ssce"]["tmp_name"], $_FILES["ssce"]["name"]);
        }else{
            $ssce = addslashes(file_get_contents($_FILES["ssce"]["tmp_name"]));
        }
        
        if(empty($_FILES["dp"]["tmp_name"])){
            $dp = move_uploaded_file($_FILES["dp"]["tmp_name"], $_FILES["dp"]["name"]);
        }else{
            $dp = addslashes(file_get_contents($_FILES["dp"]["tmp_name"]));
        }

        if(empty($_FILES["mc"]["tmp_name"])){
            $mc = move_uploaded_file($_FILES["mc"]["tmp_name"], $_FILES["mc"]["name"]);
        }else{
            $mc = addslashes(file_get_contents($_FILES["mc"]["tmp_name"]));
        }

        if(empty($_FILES["orl"]["tmp_name"])){
            $orl = move_uploaded_file($_FILES["orl"]["tmp_name"], $_FILES["orl"]["name"]);
        }else{
            $orl = addslashes(file_get_contents($_FILES["orl"]["tmp_name"]));
        }

        if(empty($_FILES["arl"]["tmp_name"])){
            $arl = move_uploaded_file($_FILES["arl"]["tmp_name"], $_FILES["arl"]["name"]);
        }else{
            $arl = addslashes(file_get_contents($_FILES["arl"]["tmp_name"]));
        }

        if(empty($_FILES["bh"]["tmp_name"])){
            $bh = move_uploaded_file($_FILES["bh"]["tmp_name"], $_FILES["bh"]["name"]);
        }else{
            $bh = addslashes(file_get_contents($_FILES["bh"]["tmp_name"]));
        }

        if(empty($_FILES["trans"]["tmp_name"])){
            $trans = move_uploaded_file($_FILES["trans"]["tmp_name"], $_FILES["trans"]["name"]);
        }else{
            $trans = addslashes(file_get_contents($_FILES["trans"]["tmp_name"]));
        }

        $year = $_POST["year"];
        $month = $_POST["month"];
        $team = $_POST["team"];

       
            if($team === "team a"){
                $query = "INSERT INTO cta (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`, `degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`,`year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month','$team')";
            $query_run = mysqli_query($connection, $query);
    
           
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team b"){
                $query = "INSERT INTO ctb (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
            
    
    
            if($query_run){
               echo "<script> window.location.href='success.html' </script>";
            }else {
                echo "<script> window.location.href='error.html' </script>";
            }
            }elseif($team === "team c"){
                $query = "INSERT INTO ctc (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
            
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team d"){
                $query = "INSERT INTO ctd (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
            
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team e"){
                $query = "INSERT INTO cte (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
           
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team f"){
                $query = "INSERT INTO ctf (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
           
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team g"){
                $query = "INSERT INTO ctg (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
            
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team h"){
                $query = "INSERT INTO cth (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
            
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }elseif($team === "team i"){
                $query = "INSERT INTO cti (`id`,`fname`, `mname`, `lname`, `email`, `number`, `gender`,`degree`, `course`, `cv`, `ps`, `ssce`, `dp`, `mc`, `orl`, `arl`, `bh`, `trans`, `year`, `month`, `team`)
            VALUES ('$id','$fname','$mname', '$lname','$email', '$number','$gender','$degree','$course','$cv','$ps','$ssce','$dp','$mc','$orl', '$arl', '$bh', '$trans', '$year', '$month', '$team')";
            $query_run = mysqli_query($connection, $query);
    
           
    
    
            if($query_run){
                echo "<script> window.location.href='success.html' </script>";
             }else {
                 echo "<script> window.location.href='error.html' </script>";
             }
            }
    }?>