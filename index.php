<?php

// Cors response headers

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

//Content type application json

header("Content-Type: application/json; charset=UTF-8");

// give a sample json response in return

echo '{"notes":[["\"><img src=x onerror=alert()>","test\"><img src=x onerror=alert(1337)>s","Sat May 13 06:12:58 2023"]]}';

?>