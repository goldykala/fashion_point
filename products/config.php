<?php
include "stripe/init.php";

$publishablekey="pk_test_51OsmwUSJw1HYzIMs8AwReqOjCUKsvx7kVk8yODXqkxCk4czdBUtoQAD68eZ2xYSI9XkdNbe54oLWgwz13kevXLUi00yBMJ5XFK";
$secretkey="sk_test_51OsmwUSJw1HYzIMs8C9tahnIue7UNVpH9vzfJXp4pNiunJjPDZQxHEfamfbJQaJ73yAAFSb7xIyHT7qFcoAWhc3v00DPRXMryy";
\stripe\stripe::setApiKwy($secretkey);
?>