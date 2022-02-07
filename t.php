<?php
$headers = apache_request_headers();
foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";

}

echo $_SERVER['SERVER_ADDR'];

$host = '10.190.10.16';
$port = 8313;
$waitTimeoutInSeconds = 1;
if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){
   echo "it works";
} else {
  echo "wef yelem";
}
fclose($fp);
?>