<?php
$command=escapeshellcmd("sudo python input_usb_b.py");
$output=shell_exec($command);
//echo $output;
header("Location: ../projector.html");
die();
?>