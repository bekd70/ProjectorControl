<?php
$command=escapeshellcmd("sudo python power_off.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>