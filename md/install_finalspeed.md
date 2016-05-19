#centos 

#######
NOTE: accept ports 443 80 150 29561
#######
service iptables start
iptables -I INPUT -p tcp --dport 443 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 443 -j ACCEPT
iptables -I INPUT -p tcp --dport 80 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 80 -j ACCEPT
iptables -I INPUT -p udp --dport 150 -j ACCEPT
iptables -I OUTPUT -p udp --sport 150 -j ACCEPT
iptables -I OUTPUT -p tcp --sport 22 -j ACCEPT
iptables -I INPUT -p tcp --dport 22 -j ACCEPT
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

####
install finalspeed client
####
#required:libpcap java
##ubuntu
apt-get -y install libpcap-dev
##centos
yum -y install libpcap

#install java
sudo apt-get purge openjdk*
sudo add-apt-repository ppa:webupd8team/java
sudo apt-get update
sudo apt-get install oracle-java8-installer
sudo apt-get install oracle-java8-set-default
sudo java -jar finalspeed_client.jar