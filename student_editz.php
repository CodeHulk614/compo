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

    <title>Search Engine Data Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Search Engine Data Edit
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>School Name</label>
                                        <input type="text" name="school" value="<?=$student['school'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <input type="text" name="location" value="<?=$student['location'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Faculty</label>
                                        <input type="text" name="faculty" value="<?=$student['faculty'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Course</label>
                                        <input type="text" name="course" value="<?=$student['course'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Degree</label>
                                        <input type="text" name="degree" value="<?=$student['degree'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Intake Month</label>
                                        <input type="text" name="month" value="<?=$student['month'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Intake Year</label>
                                        <input type="text" name="year" value="<?=$student['year'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Availability</label>
                                        <input type="text" name="available" value="<?=$student['available'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Search Engine
                                        </button>
                                    </div>

                                </form>
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