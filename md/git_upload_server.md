#setup git server
#git repository
```
mkdir /var/git
mkdir /var/git/nbt
cd /var/git/nbt
git init --bare
```
#hook
```
cd /var/git/nbt/hooks
cat > post-receive
#!/bin/sh
git --work-tree=/var/www/nbt --git-dir=/var/git/nbt.git checkout -f
chmod +x post-receive
```

#setup git client
git remote add nbt ssh://root@nanbiantang.top/var/git/nbt
git remote set-url nbt ssh://root@nanbiantang.top:29561/var/git/nbt
