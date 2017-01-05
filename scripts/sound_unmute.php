<?php
$command=escapeshellcmd("sudo python sound_unmute.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>