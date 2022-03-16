<?php
$handle = fopen ("php://stdin","r");
system ('clear');
system ('figlet auto line ');
echo "token => : ";
$token=trim(fgets($handle));
echo "message => : ";
$mes=trim(fgets($handle));
echo "amount => : ";
$nam=trim(fgets($handle));
echo "\n";
function run1($mes,$nam,$x,$token) {
$header = "";
$message = $header. $mes;
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = $token;
$queryData = array('message' => $message);
$queryData = http_build_query($queryData,'','&');
$headerOptions = array(
'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",'content' => $queryData));
$context = stream_context_create($headerOptions);
$result = file_get_contents($LINE_API, FALSE, $context);
$res = json_decode($result);
}

function run2($mes,$nam,$x,$token) {
$header = "";
$message = $header. $mes;
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = $token;
$queryData = array('message' => $message);
$queryData = http_build_query($queryData,'','&');
$headerOptions = array(
'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",'content' => $queryData));
$context = stream_context_create($headerOptions);
$result = file_get_contents($LINE_API, FALSE, $context);
$res = json_decode($result);
}

function run3($mes,$nam,$x,$token) {
$header = "";
$message = $header. $mes;
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = $token;
$queryData = array('message' => $message);
$queryData = http_build_query($queryData,'','&');
$headerOptions = array(
'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",'content' => $queryData));
$context = stream_context_create($headerOptions);
$result = file_get_contents($LINE_API, FALSE, $context);
$res = json_decode($result);
}

function run4($mes,$nam,$x,$token) {
$header = "";
$message = $header. $mes;
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = $token;
$queryData = array('message' => $message);
$queryData = http_build_query($queryData,'','&');
$headerOptions = array(
'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",'content' => $queryData));
$context = stream_context_create($headerOptions);
$result = file_get_contents($LINE_API, FALSE, $context);
$res = json_decode($result);
}
function run5($mes,$nam,$x,$token) {
$header = "";
$message = $header. $mes;
$LINE_API = "https://notify-api.line.me/api/notify";
$LINE_TOKEN = $token;
$queryData = array('message' => $message);
$queryData = http_build_query($queryData,'','&');
$headerOptions = array(
'http' => array('method' => 'POST','header' => "Content-Type: application/x-www-form-urlencoded\r\n"."Authorization: Bearer ".$LINE_TOKEN."\r\n"."Content-Length: ".strlen($queryData)."\r\n",'content' => $queryData));
$context = stream_context_create($headerOptions);
$result = file_get_contents($LINE_API, FALSE, $context);
$res = json_decode($result);
}
for ($x = 1; $x <= $nam; $x++) {
run1($mes,$nam,$x,$token);
run2($mes,$nam,$x,$token);
run3($mes,$nam,$x,$token);
run4($mes,$nam,$x,$token);
run5($mes,$nam,$x,$token);
echo "attack $x \n";
}
?>
