<?php
header("Content-type: text/html; charset=utf-8");
$test = $_POST["s"];
$json_string = file_get_contents($test . '.json');
echo $json_string;
