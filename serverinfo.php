<?php
// Get and display the local IP address of the server
$localIP = $_SERVER['SERVER_ADDR'];

// Check if the IP address is IPv6 loopback "::1" and 
// replace it with IPv4 localhost "127.0.0.1"
if ($localIP === '::1') {
    $localIP = '127.0.0.1';
}

echo "Server IP Address: $localIP";
?>
