
<VirtualHost *:80>
    ServerAdmin caiqinglinbeihai@gmail.com
    DocumentRoot "/var/www/nbt/web/"
    ServerName nanbiantang.top
    ErrorLog "/var/logs/"
    CustomLog "logs/netbean-access.log" common
    DirectoryIndex index.html index.php index.htm
    <Directory "/var/www/nbt">
        Options Indexes
        <IfModule mod_rewrite.c>
                RewriteEngine on
                RewriteBase /
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteCond %{REQUEST_FILENAME} !-f
                
                RewriteRule ^(.*)$ index.php?$1 [QSA,PT,L]
        </IfModule>        
    </Directory>
</VirtualHost>
    
