<?php
require_once(__DIR__.'/vendor/autoload.php');
use Monolog\Logger;

$logger = new Logger('db');
$logger->info('This is a log! ^_^ ');

$link = mysqli_connect("db", "lorenzo", "root", "test-db");

if (!$link) {
    $logger->error('This is an ERROR! ^_^ ');
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

if($_SERVER['REQUEST_METHOD']==='GET'){
    echo 'Method GET';
}
else{
    echo 'Method diverso';
}
?>