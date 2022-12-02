<?php
    session_start();
    require 'dbbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Councellors Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="path/to/file/jquery.min.js"></script>
<link href="path/to/file/select2.min.css" rel="stylesheet" />
<script src="path/to/file/select2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <div class="row">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center; font-style: normal; font-size: xx-large;">Counsellor Team E's Hub
                            
                        </h4>
                    </div>
                    <input  id="gfg" type="text" placeholder="Search School Name, Location, Intake Year/Month and Degree ..." style="text-align: center;">
                    <div class="card-body">
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">S/N</th>
                    <th style="text-align: center;">Full Name</th>
                    <th style="text-align: center;">Email</th>
                    <th style="text-align: center;">Phone Number</th>
                    <th style="text-align: center;">Gender</th>
                    <th style="text-align: center;">Documents</th>
                    <!-- <th>Personal Statement</th>
                    <th>SSCE Certificate</th>
                    <th>International Passport Data Page</th>
                    <th>Marriage Certificate</th>
                    <th>Official Reference Letter</th>
                    <th>Academic Reference letter</th>
                    <th>BSCE/HND</th>
                    <th>Transcript</th> -->
                    <th style="text-align: center;">Intake Year</th>
                    <th style="text-align: center;">Intake Month</th>
                    <th style="text-align: center;">Priority</th>
                    <!-- <th>Download</th> -->
                </tr>
            </thead>
            <tbody id="geeks">
                <?php 
                    include "connect.php";
                    $stmt = $db->prepare("SELECT * FROM cte");
                    $stmt->execute();
                    while ($row = $stmt->fetch()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td> <a style="color: black;" href="full-view.php?id=<?= $row['id']; ?>" ><?php echo $row['fname'] ?> <?php echo $row['mname'] ?> <?php echo $row['lname'] ?></a></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['number'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td style="text-align: center;">
                        <?php if(empty($row["cv"])){ ?>
                            <a style="margin-top: 10px;" href="" class="btn btn-danger">CV not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download1.php?id=<?php echo $row["id"]?>" class="btn btn-primary">CV.pdf</a> 
                          <?php  } ?> 

                          <?php if(empty($row["ps"])){ ?>
                            <a style="margin-top: 10px;" href="" class="btn btn-danger">PS not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download.php?id=<?php echo $row["id"]?>" class="btn btn-primary">PS.pdf</a> 
                          <?php  } ?> 

                          <?php if(empty($row["ssce"])){ ?>
                            <a style="margin-top: 10px;" href="" class="btn btn-danger">SSCE not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download2.php?id=<?php echo $row["id"]?>" class="btn btn-primary">SSCE.pdf</a> 
                          <?php  } ?> 

                          <?php if(empty($row["dp"])){ ?>
                            <a style="margin-top: 10px;" href="" class="btn btn-danger">DP not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download3.php?id=<?php echo $row["id"]?>" class="btn btn-primary">DP.pdf</a> 
                          <?php  } ?> 
                          
                          <?php if(empty($row["mc"])){ ?>
                                    <a style="margin-top: 10px;" href="" class="btn btn-danger">MC not Uploaded</a>      
                                    <?php }else{ ?>
                                    <a style="margin-top: 10px;" href="download4.php?id=<?php echo $row["id"]?>" class="btn btn-primary">MC.pdf</a> 
                          <?php  } ?> 
                          

                          <?php if(empty($row["orl"])){ ?>
                                    <a style="margin-top: 10px;" href="" class="btn btn-danger">ORL not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download5.php?id=<?php echo $row["id"]?>" class="btn btn-primary">ORL.pdf</a> 
                          <?php  } ?>

                          <?php if(empty($row["arl"])){ ?>
                                    <a style="margin-top: 10px;" href="" class="btn btn-danger">ARL not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download6.php?id=<?php echo $row["id"]?>" class="btn btn-primary">ARL.pdf</a> 
                          <?php  } ?>

                          <?php if(empty($row["bh"])){ ?>
                                    <a style="margin-top: 10px;" href="" class="btn btn-danger">BH not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download7.php?id=<?php echo $row["id"]?>" class="btn btn-primary">BH.pdf</a> 
                          <?php  } ?>

                          <?php if(empty($row["trans"])){ ?>
                                    <a href="" style="margin-top: 10px;" class="btn btn-danger">Trans not Uploaded</a>      
                                    <?php }else{ ?>
                                        <a style="margin-top: 10px;" href="download8.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Trans.pdf</a> 
                          <?php  } ?>
                          
                          
                          
                          </td>
                        <!-- <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td> -->
                        <!-- <td></td>
                        <td></td> -->
                        <td><?php echo $row['year'] ?></td>
                        <td><?php echo $row['month'] ?></td>
                        <td><?php 
                            if($row["year"] === "2023" && $row["month"] === "January"){
                                echo "High";
                            }elseIf($row["year"] === "2023" && $row["month"] === "Mid"){
                                echo "Medium";
                            }elseif($row["year"] === "2023" && $row["month"] === "September"){
                                echo "Low";
                            }else {
                                echo $row["year"];
                            }
                        ?></td>
                        <td>
                                                    <a href="cmessage.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Send Message</a>
                                                    
                                                </td>
                    </tr>    
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    <script>
        
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#geeks tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
  
           
        </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>