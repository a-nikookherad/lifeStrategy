<?php
header("content-type=>application/json");
$data = ["data" => [
	[
		"name" => "Tiger Nixon" ,
		"position" => "System Architect" ,
		"salary" => "$3,120" ,
		"start_date" => "2011/04/25" ,
		"office" => "Edinburgh" ,
		"extn" => "5421"
	] ,
	[
		"name" => "Garrett Winters" ,
		"position" => "Director" ,
		"salary" => "$5,300" ,
		"start_date" => "2011/07/25" ,
		"office" => "Edinburgh" ,
		"extn" => "8422"
	]
]];
echo json_encode($data , JSON_UNESCAPED_UNICODE);
