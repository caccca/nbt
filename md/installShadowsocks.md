#centos  install shadowsocks
yum install python-setuptools
easy_install pip
pip install shadowsocks

#ubuntu install shadowsocks
sudo apt-get install python-pip
pip install shadowsocks

#setup shadowsocks
vi ss.json

```
{
"server":"23.83.254.117",
"server_port":443,
"local_address":"127.0.0.1",
"local_port":1080,
"password": "30ngmcyt800lly&y",
"timeout":600,
"method":"aes-256-cfb"
}

```
#shadowsocks server start
ssserver -c /root/ss.json -d start

#shadowsocks client start
sslocal -c /home/c/ss.json -d start