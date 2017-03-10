# for frontend
```
server {
    charset utf-8;
    client_max_body_size 128M;

    listen 80; ## listen for ipv4

    server_name nanbiantang.top www.nanbiantang.top;
    root        /var/www/nbt/frontend/web;
    index       index.php index.html;

    access_log  /var/www/nbt/frontend/log/access.log main;
    error_log   /var/www/nbt/frontend/log/error.log;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        include fastcgi.conf;
        fastcgi_pass   127.0.0.1:9000;
    }

    location ~ /\.(ht|svn|git) {
        deny all;
    }
}
```
# for backend
```
server {
    # ...other settings...
    listen 81;
    server_name localhost;
    root /path/to/digpage.com/backend/web;
    # ...other settings...
}
```
