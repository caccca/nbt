#show the name of apache user
ps -ef | grep apache | grep -v grep

#change  user group of the folder
sudo chgrp www-data /home/c/nbt/console/runtime

#the folder access
sudo chmod g+w /home/c/nbt/console/runtime