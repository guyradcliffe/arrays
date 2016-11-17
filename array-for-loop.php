<html>
<head>
	<title>Array with For Loop</title>
</head>
<body>
<?php
$medschoolsmenu = array ("ERAS Support Services Overview","ECFMG Medical School Web Portal (EMSWP)","Resources and Publications"); /* text for buttons */
$docslength=count($medschoolsmenu);
for($dx=0;$dx<$docslength;$dx++)
	{
  		echo "<p>" . $medschoolsmenu[$dx] . "</p>" . PHP_EOL;
  	}
?>
</body>
</html>