<?php
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

    <title>Student View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Search View Details 
                            <a href="search_edit.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM search WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>School Name</label>
                                        <p class="form-control">
                                            <?=$student['school'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <p class="form-control">
                                            <?=$student['location'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Faculty</label>
                                        <p class="form-control">
                                            <?=$student['faculty'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Course</label>
                                        <p class="form-control">
                                            <?=$student['course'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Degree</label>
                                        <p class="form-control">
                                            <?=$student['degree'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Intake Month</label>
                                        <p class="form-control">
                                            <?=$student['month'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Intake Year</label>
                                        <p class="form-control">
                                            <?=$student['year'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Availability</label>
                                        <p class="form-control">
                                            <?=$student['available'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>