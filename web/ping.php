<?php
header('Content-Type: text/plain');
echo "PONG - Web container is alive!\n";
echo "Server time: " . date('Y-m-d H:i:s') . "\n";
echo "PHP Version: " . phpversion() . "\n";
echo "MySQL Host: " . ($_SERVER['MYSQL_HOST'] ?? 'not set') . "\n";
echo "Host Header: " . ($_SERVER['HTTP_HOST'] ?? 'not set') . "\n";
