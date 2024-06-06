<?php
// get server ip
$localIP = $_SERVER['SERVER_ADDR'];
if ($localIP === '::1') {
    $localIP = '127.0.0.1';
}

// markdown content
$markdownContent = <<<EOD

## Configs

### xampp\apache\httpd.conf

```
Listen 3000
```

### xampp\apache\httpd-vhosts.conf

~~~
<VirtualHost *:3000>
    DocumentRoot "C:\pathtoxampp\htdocs\sample"
    ServerName localhost
    <Directory "C:\pathtoxampp\htdocs\sample">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
~~~


### Open XAMPP as Admin

Right-click XAMPP icon and 'Run as Admin'.

Potential issues not running as admin:
- Port Conflicts
- File Permissions
- Service Limitations


### Access

site is accessible on the same network at:
- http://$localIP:3000
- http://$localIP/sample-xampp-project

EOD;

// Include Parsedown library
require 'Parsedown.php';
$Parsedown = new Parsedown();
echo $Parsedown->text($markdownContent);

?>
