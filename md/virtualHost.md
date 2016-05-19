
<VirtualHost *:80>
    ServerAdmin caiqinglinbeihai@gmail.com
    DocumentRoot "/var/www/html/nbt/frontend/web/"
    ServerName nbt.cn
    ErrorLog "/var/logs/nbt-error.log"
    CustomLog "logs/netbean-access.log" combine
    DirectoryIndex index.html index.php index.htm
    <Directory "/var/www/html/nbt/frontend/web">
        Options Indexes FollowSymLinks
        <IfModule mod_rewrite.c>
                RewriteEngine on
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteCond %{REQUEST_FILENAME} !-f
                
                RewriteRule ^(.*)$ index.php?$1 [QSA,PT,L]
        </IfModule>        
    </Directory>
</VirtualHost>
    
