<?php
$command=escapeshellcmd("sudo python input_hdmi2.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>