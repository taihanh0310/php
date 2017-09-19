<html>
<head>
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
$year = null;
		
$month = null;

if (null == $year && isset ( $_GET ['year'] )) {
	
	$year = $_GET ['year'];
} else if (null == $year) {
	
	$year = date ( "Y", time () );
}

if (null == $month && isset ( $_GET ['month'] )) {
	
	$month = $_GET ['month'];
} else if (null == $month) {
	
	$month = date ( "m", time () );
}

include './calendar.php';

$calendar = new Calendar ();

echo $calendar->show ($month, $year);
?>
</body>
</html>
