<?php

$app_shell = __DIR__.'/mehr.sh';

$client = new stdClass;
$client->ftp_port = "21";
$client->ftp_domain = "mehr2.nrp.co";
$client->ftp_username = "mehr2";
$client->ftp_password = "IKHSERsXi";
$client->ftp_directory = "/domains/mehr2.nrp.co/public_html";



$c = "$app_shell $client->ftp_port $client->ftp_domain $client->ftp_username $client->ftp_password $client->ftp_directory staging";

$command = escapeshellcmd($c);

$output = exec($command);

