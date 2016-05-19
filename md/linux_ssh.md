#generate public/private rsa key pair
ssh-keygen

#copy public key to server
ssh-copy-id -p 29902 root@nanbiantang.top

#login
ssh -p 29902 root@nanbiantang.top