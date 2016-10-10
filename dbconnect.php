<?php
/**
 * Created by PhpStorm.
 * User: 1403775
 * Date: 10/10/2016
 * Time: 15:27
 */
define('DB_SERVER', 'servername');
define('DB_USERNAME', 'servername');
define('DB_PASSWORD', 'servername');
define('DB_DATABASE', 'servername');

$db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if($db->connect_errno){
    die('Connect failed['.$db->connect_error.']');
}