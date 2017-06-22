<?php
AddDefaultCharset Off
<IfModule dir_module>
    DirectoryIndex index.php
</IfModule>
AddDefaultCharset UTF-8
php_flag display_errors off
<IfModule mod_rewrite.c>
RewriteEngine On
Options +FollowSymlinks
RewriteBase /

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L,QSA]
</IfModule>

