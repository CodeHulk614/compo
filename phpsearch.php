<?php
include 'coonnect_test_db.php';
session_start();
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
	if(!empty($_POST['search_box']))
	{
		$search = $_POST['search_box'];
		$stmt = $con->prepare("select * from search where CONCAT(course, ' ',
        degree, ' ',
        school, ' ',
        location, ' ',
        available) like '%$search%'");
		$stmt->execute();
		$employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($employee_details);
		
	}
	else
	{
		$searchErr = "Please  Search by Name of course, Name of School or Location";
	}

	
   
}
if(isset($_POST['enter'])){
	$_SESSION['course'] = $row['course'];
	header('location:http://localhost/students/register.php');

}

?>
<html>
<head>
<title>Search Engine Page</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<style>
.each .item .upc{
  font-style:italic;
  color:blue;
}
</style>
</style>
</head>

<body>
	<div class="container">
	
	<form class="form-horizontal" action="#" method="post">
	<div class="row">
		<div class="form-group">
        <div class="row mt-5 mb-5">
          <div class="col col-sm-2">??</div>
          <div class="col col-sm-8">
            <input style="text-align: center;" type="text" id="gfg" name="search_box" class="form-control form-control-lg" placeholder="Course Search Here..." onkeyup="javascript:load_data(this.value)" />
           
            <span id="search_result"></span>
          </div>
          <div class="col-sm-2">
		      <button type="submit" name="save" class="btn btn-success btn-lg">Search</button>
		    </div>
        </div>    	

  
    <div class="row justify-content-center">
        <div class="col-6">
            <div style="text-align: center;" id="card"> </div>
        </div>
    </div> 
		   
		</div>
		<div class="form-group" style="text-align: center;">
			<span class="error" style="color:red;"><?php echo $searchErr;?></span>
		</div>
		
	</div>
    </form>
	<br/><br/>
	<h3 style="text-align: center;"><u>Search Result</u></h3><br/>
	<div>          
	  
	    		<?php
		    	 if(!$employee_details)
		    	 {
		    		echo '<h1 style="text-align: center;">No Search Result</h1>';
		    	 }
		    	 else{
		    	 	foreach($employee_details as $key=>$row)
		    	 	{
		    	 		?>
		    	 	
		    	 		<div style="margin-bottom: 30px;" class="col-sm-3">
                        <div class="card" >
                            <img class="card-img-top img-fluid" src="https://media.istockphoto.com/id/1328488607/photo/portrait-of-african-american-female-teacher-smiling-in-the-class-at-school.jpg?b=1&s=170667a&w=0&k=20&c=e1eCZEsldaHDfCeHPl5VjADjeYEnmuxDgaj7va-L4sg=" alt="">
                            <div class="card-body">
                                <form action="http://localhost/students/register.php" method="post"></form>
                                <h5 class="card-title"><?php echo $key+1;?>. <?php echo $row['school'] ?></h5>
                                <p class="card-text"><?php echo $row['location'] ?></p>
                                <p class="card-text"><?php echo $row['faculty'] ?></p>
                                <p class="card-text" ><?php echo $row['course'];
								$_SESSION['course'] = $row['course']; ?></p>
                                <p class="card-text"><?php echo $row['degree'] ?></p>
                                <p class="card-text"><?php echo $row['year'] ?>, <?php echo $row['month'] ?></p>
                                <p class="card-text"><small><?php if($row['available'] === 'available'){ ?><button disabled="disabled" class="btn btn-success btn-sm">AVAILABLE</button><?php }elseif($row['available'] === 'unavailable'){ ?><button disabled="disabled" class="btn btn-danger btn-sm">UNAVAILABLE</button><?php } ?></small></p>
                                <p class="card-text"><?php 
                            if($row['degree'] === "Masters" || $row['degree'] === "Pre Masters" || $row['degree'] === "PHD"){
                        ?><a class="btn btn-primary btn-lg" name="enter" onclick="love()"  href="http://localhost/students/register.php">Apply Now!</a><?php }elseif($row['degree'] === "Top Up"){ ?><a class="btn btn-primary btn-lg" name="enter" onclick="love()"  href="http://localhost/students/register.php">Apply Now!</a><?php }elseif($row['degree'] === "Bsce"){ ?><a class="btn btn-primary btn-lg" name="enter" onclick="love()"  href="http://localhost/students/register.php">Apply Now!</a><?php }elseif($row['degree'] === "Foundation"){ ?><a class="btn btn-primary btn-lg"  name="enter" onclick="love()" href="http://localhost/students/register.php">Apply Now!</a><?php } ?></p>
                            </div>
                        </div>
                    </div>
		    	 	
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
	    	
	    
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
                    $("#geeks div").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
            </script>


<script>

function get_text(event)
{
	var string = event.textContent;

	document.getElementsByName('search_box')[0].value = string;

	document.getElementById('search_result').innerHTML = '';
}

function load_data(query)
{
	if(query.length > 2)
	{
		var form_data = new FormData();

		form_data.append('query', query);

		var ajax_request = new XMLHttpRequest();

		ajax_request.open('POST', 'fetchData.php');

		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function()
		{
			if(ajax_request.readyState == 4 && ajax_request.status == 200)
			{
				var response = JSON.parse(ajax_request.responseText);

				var html = '<div class="list-group">';

				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="" class="list-group-item list-group-item-action" onclick="get_text(this)">'+response[count].school+'  '+response[count].location+'  '+response[count].course+'  '+response[count].available+' </a>';
					}
				}
				else
				{
					html += '<a href="#" class="list-group-item list-group-item-action disabled">No Data Found</a>';
				}

				html += '</div>';

				document.getElementById('search_result').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('search_result').innerHTML = '';
	}
}

</script>



        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>