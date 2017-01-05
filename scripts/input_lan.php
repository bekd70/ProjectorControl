<?php
$command=escapeshellcmd("sudo python input_lan.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>