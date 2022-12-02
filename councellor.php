<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Councellors Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Middle/Other Name(s)</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>CV</th>
                    <th>Personal Statement</th>
                    <th>SSCE Certificate</th>
                    <th>International Passport Data Page</th>
                    <th>Marriage Certificate</th>
                    <th>Official Reference Letter</th>
                    <th>Academic Reference letter</th>
                    <th>BSCE/HND</th>
                    <th>Transcript</th>
                    <th>Priority</th>
                    <!-- <th>Download</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "connect.php";
                    $stmt = $db->prepare("SELECT * FROM cth");
                    $stmt->execute();
                    while ($row = $stmt->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['fname'] ?></td>
                        <td><?php echo $row['mname'] ?></td>
                        <td><?php echo $row['lname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><a href="download1.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['cv']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['ps']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download2.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['ssce']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download3.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['dp']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download4.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['mc']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download5.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['orl']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download6.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['arl']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download7.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['bh']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><a href="download8.php?id=<?php echo $row["id"]?>" class="btn btn-primary"><object data="data:application/pdf;base64,<?php echo base64_encode($row['trans']) ?>" type="application/pdf" style="height:60px;width:60px"></object></a></td>
                        <td><?php echo $row['priority'] ?></td>
                        <!-- <td class="text-center"><a href="download.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Download</a></td> -->
                    </tr>    
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>