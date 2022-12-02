<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="path/to/file/jquery.min.js"></script>
<link href="path/to/file/select2.min.css" rel="stylesheet" />
<script src="path/to/file/select2.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/
css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/
jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/
js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/
bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/
bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">

    <title>Search CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Search Engine Details
                            <a href="search-form.php" class="btn btn-primary float-end">Add Data</a>
                        </h4>
                    </div>
                    <input  id="gfg" type="text" placeholder="Search School Name, Location, Intake Year/Month and Degree ..." style="text-align: center;">
                    <div class="card-body">
                    

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">S/N</th>
                                    <th scope="col">School Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Faculty</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Intake month</th>
                                    <th scope="col">Intake Year</th>
                                    <th scope="col">Availability</th>
                                </tr>
                            </thead>
                            <tbody id="geeks">
                                <?php 
                                    $query = "SELECT * FROM search";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr style="text-align: center;" >
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['school']; ?></td>
                                                <td><?= $student['location']; ?></td>
                                                <td><?= $student['faculty']; ?></td>
                                                <td><?= $student['course']; ?></td>
                                                <td><?= $student['degree']; ?></td>
                                                <td><?= $student['month']; ?></td>
                                                <td><?= $student['year']; ?></td>
                                                <td><?= $student['available']; ?></td>
                                                <td>
                                                <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student_editz.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form  action="code.php" method="POST" class="d-inline">
                                                        <button style="margin-top: 10px;" type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $("#school").select2();
        }); 
</script>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>