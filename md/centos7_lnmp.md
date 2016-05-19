#centos7 setup yum repository
yum install epel-release
rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
rpm -Uvh http://repo.mysql.com/mysql-community-release-el7-5.noarch.rpm

#centos6 setup yum repository
yum install epel-release
rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el6/latest.rpm
rpm -Uvh http://repo.mysql.com/mysql-community-release-el6-5.noarch.rpm

#install php7
yum install php70w
yum install php70w-mysql php70w-xml php70w-soap php70w-xmlrpc
yum install php70w-mbstring php70w-json php70w-gd php70w-mcrypt

#install ngnix 
yum install nginx
systemctl enable nginx.service
systemctl start nginx.service

#install mysql 5.6
yum install mysql-community-server
systemctl start mysqld.service
mysql_secure_installation
systemctl restart mysqld.service
systemctl enable mysqld.service

#install php-fpm
yum install php70w-fpm

#create ngnix virtualhost
vi /etc/nginx/conf.d/nbt.conf

```
server {
        listen   80;

        root /var/www;
        index index.php index.html index.htm;
        server_name  nanbiantang.top www.nanbiantang.top;

        location / {
                try_files $uri $uri/ /index.html;
        }

        error_page 404 /404.html;
        error_page 500 502 503 504 /50x.html;
        location = /50x.html {
              root /usr/share/nginx/www;
        }

        location ~ .php$ {
                try_files $uri =404;
                fastcgi_pass 127.0.0.1:9000;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
        }
}
```

#
systemctl restart nginx.service
systemctl restart php-fpm.service