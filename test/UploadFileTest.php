<?php
require_once "../vendor/autoload.php";

use ligkwww\UploadFile;

$upload = new UploadFile();

$ret = $upload->say();

var_dump($ret);
