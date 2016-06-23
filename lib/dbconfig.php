<?php

$DB_host = "128.199.65.229";
$DB_user = "root";
$DB_pass = "srikar_fita";
$DB_name = "acs";

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	$e->getMessage();
}