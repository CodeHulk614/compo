<?php if(isset($_POST["query"]))
{
	$connect = new PDO("mysql:host=localhost;dbname=tgm", "root", "");

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

	$query = "
	SELECT course, school, location, available FROM search 
		WHERE CONCAT(course, ' ',
        school, ' ',
        location, ' ',
        available) LIKE '%".$condition."%' 
		ORDER BY id DESC 
		LIMIT 5
	";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'course'		=>	str_ireplace($condition, $replace_string, $row["course"]),
			'available'		=>	str_ireplace($condition, $replace_string, $row["available"]),
			'school'		=>	str_ireplace($condition, $replace_string, $row["school"]),
			'location'		=>	str_ireplace($condition, $replace_string, $row["location"])
		);
	}

	echo json_encode($data);
}
?>
