#config virtualHost
vi /etc/apache2/sites_available/nbt.conf

#add to ensite
sudo a2ensite nbt

#apache2 reload
sudo service apache2 reload