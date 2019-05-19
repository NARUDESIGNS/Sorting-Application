<html>
	<head>
		<title>converter</title>
		<link href="div_convert.css" rel="stylesheet">
	</head>
<body>
	<?php
// define nested array
	$Dalu = 	array(
						'name' => 'Dalu Lawrrence',
						'tel' => '1234567',
						'email' => 'ray@bunnyplanet.in',
	);
	// access nested value
	echo "Dalu's email is: " . $Dalu['email'];
	echo "<br />";

	$str = range(1, 1000000);
	echo 'PHC'.$str[rand(0, 900000)].'LAG';
?>
<input type = 'radio' name = 'gender' value = 'male'>Male</input>
<input type = 'radio' name = 'gender' value = 'female'>female</input><br />

</body>	
</html>