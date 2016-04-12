<?php
/**
 * Created by PhpStorm.
 * User: Edgardo Acosta
 * Date: 4/11/2016
 * Time: 11:08 PM
 */
require_once '/opt/lampp/htdocs/ssma/web_service/include/DB_Function.php';
$dbf = new DB_Function();

$data = $dbf->getAll();

var_dump($data);