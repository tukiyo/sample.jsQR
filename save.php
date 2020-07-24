<?php
if (! $_GET["data"]) {
	die();
}

date_default_timezone_set('Asia/Tokyo');

$data = sprintf('[%s] "%s"' . PHP_EOL
	, date("Y-m-d H:i:s")
	, $_GET["data"]);

file_put_contents("result.txt", $data, FILE_APPEND);
