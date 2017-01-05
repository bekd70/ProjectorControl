<?php
$command=escapeshellcmd("sudo python pic_unmute.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>