<?php

//$data = $_POST;
$postdata = file_get_contents("php://input");

file_put_contents("testingmenu3.json", $postdata);

echo $postdata;