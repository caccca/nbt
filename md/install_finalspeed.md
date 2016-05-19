#centos 

#######
NOTE: accept ports 443 80 150 29561
#######
service iptables start
iptables -I INPUT -p tcp --dport 443 -j ACCEPT
iptables -I INPUT -p tcp --dport 80 -j ACCEPT
iptables -I INPUT -p tcp --dport 150 -j ACCEPT
iptables -I INPUT -p tcp --dport 29651 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 443 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 80 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 150 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 29561 -j ACCEPT
service iptables save


#finalspeed required
yum install java

#install finalspeed server
rm -f install_fs.sh
wget  http://fs.d1sm.net/finalspeed/install_fs.sh
chmod +x install_fs.sh
./install_fs.sh 2>&1 | tee install.log

#start finalspeed
sh /fs/start.sh


####
NOTE:
config shadowsocks server
change server to "0.0.0.0"
####
vi /root/ss.json
```
{
"server":"0.0.0.0",
"server_port":443,
"local_address":"127.0.0.1",
"local_port":1080,
"password": "30ngmcyt800lly&y",
"timeout":600,
"method":"aes-256-cfb"
}
```