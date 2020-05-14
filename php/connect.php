<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<title> PHP </title>
	</head>
	<body>

	
<?php
$connection = pg_connect ("host=ec2-54-217-236-206.eu-west-1.compute.amazonaws.com dbname=dc63fijc2cjsgd user=epwtkajqmcuxwh password=5a020fac88c1bdbc73c2bb2fe303ca4e4a61e378b3fa245220035023ea46d9a6");
if($connection) {
echo '<p>connected</p>';
}
else {
echo 'there has been an error connecting';
} 

?>
        
        	
	
	
	
	</body>
</html>