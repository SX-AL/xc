#'°√SX</>.AL

## LINUX COMMANDS CHEAT SHEET
```
https://www.linuxtrainingacademy.com/linux-commands-cheat-sheet/
```
```
https://www.tecmint.com/linux-commands-cheat-sheet/#iptables
```
```
https://www.digitalocean.com/community/tutorials/how-to-set-up-a-firewall-with-ufw-on-ubuntu-14-04
```
```
https://www.digitalocean.com/community/tutorials/how-to-set-up-a-firewall-using-iptables-on-ubuntu-14-04
```
```
https://dev.mysql.com/doc/refman/5.7/en/mysqldump.html
```
```
https://gist.github.com/fevangelou/fb72f36bbe333e059b66
```
```
https://www.globo.tech/learning-center/tweak-mysql-server/
```
```
https://linuxize.com/post/remove-directory-linux/
```
```
https://linuxize.com/post/grep-multiple-patterns/
```
```
http://kbeezie.com/securing-nginx-php/2/
```

## INSTALL NEW EARLY RELEASE!

```
apt-get update && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/adtools/* /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/admin/* /home/xtreamcodes/iptv_xtream_codes/admin_backup && apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && rm -rf /home/xtreamcodes/iptv_xtream_codes/adtools && wget "https://xtream-ui.com/install/early.php?username=$USERNAME$&password=$PASSWORD$" -O /tmp/update.zip -o /dev/null && unzip /tmp/update.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
 ```

## INSTALL NEW EARLY RELEASE MANUALLY!

```
apt-get update && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/adtools/* /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/admin/* /home/xtreamcodes/iptv_xtream_codes/admin_backup && apt-get update && apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && wget "http://DOMAIN.ml/ui/update_ui/release_22e.zip" -O /tmp/update.zip -o /dev/null && unzip /tmp/update.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && chmod +x /home/xtreamcodes/iptv_xtream_codes/permissions.sh && /home/xtreamcodes/iptv_xtream_codes/permissions.sh && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
```
http://DOMAIN.ml/ui/update_ui/release_22e.zip
## UPDATE DB TABLES MANUALLY!

```
touch /home/xtreamcodes/iptv_xtream_codes/admin/.update && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && echo "" > /home/xtreamcodes/iptv_xtream_codes/admin/.update && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
```

## PERMISSIONS

```
chmod -R 0777 /home/xtreamcodes ; chown -R xtreamcodes:xtreamcodes /home/xtreamcodes
```

## NGINX PERMISSIONS
```
chmod -R 0777 /home/xtreamcodes && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx_rtmp/sbin/nginx_rtmp && sudo chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx && /etc/init.d/xtreamcodes
```
```
find /home/xtreamcodes/iptv_xtream_codes/admin/ -type f -exec chmod 644 {} \; && find /home/xtreamcodes/iptv_xtream_codes/admin/ -type d -exec chmod 755 {} \; && \
find /home/xtreamcodes/iptv_xtream_codes/wwwdir/ -type f -exec chmod 644 {} \; && find /home/xtreamcodes/iptv_xtream_codes/wwwdir/ -type d -exec chmod 755 {} \; && \
chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx && chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx_rtmp/sbin/nginx_rtmp
```

## DECRYPT & ENCRYPT DB INFORMATION

```
wget https://raw.githubusercontent.com/SX-AL/xc/master/encrypt_decrypt.py -O config.py && python config.py DECRYPT && rm config.py
```

and then Run same file but with ENCRYPT and change to your New Main info 
 
```
wget https://raw.githubusercontent.com/SX-AL/xc/master/encrypt_decrypt.py -O config.py && python config.py ENCRYPT && rm config.py
```

and then delete stream logs + restart xtreamcodes

```
rm -rf /home/xtreamcodes/iptv_xtream_codes/streams/* ; /etc/init.d/xtreamcodes
```

## CHANGE MYSQL PASSWORD 

```mysql -u root -p$$mysqlpassword$$```

```ALTER USER 'user_iptvpro'@'%' IDENTIFIED BY 'NEW-PASS-HERE';```

```FLUSH PRIVILEGES;```

- Change to new pass on config.py with Decrypt & Encrypt on Main and all LB's.

Restart XC/MySQL if needed only / reboot.

## EDIT NGINX.config

open nginx.conf with;

```
sudo nano /home/xtreamcodes/iptv_xtream_codes/nginx/conf/nginx.conf
```

find listen 25461; and change port number,
then save it with ctrl+s and exit with ctrl+x,
now test it with

```
sudo /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -t
```

then reload nginx if test is successfull,

```
sudo /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -s reload
```

Go to Manage Serverspage, edit the server's http broadcast port.
restart services on servers with,

```
sudo /home/xtreamcodes/iptv_xtream_codes/start_services.sh
```
or
```
/etc/init.d/xtreamcodes
```

## INSTALL MAIN XC
```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget http://DNSHERE.ml/ui/officialXCui/install.offline.with.admin.py -O install.py ; sudo python install.py
```
OR Emre's Install.py
```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget https://www.codepile.net/raw/rxA1NBx0.py -O install.py ; sudo python install.py
```
## INSTALL LB WITH UBUNTU 14
```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget http://DNSHERE/ui/ui_install/LB_INSTALL/Ubuntu14_ExtremeUI_V2_Install.sh ; chmod +x Ubuntu14_ExtremeUI_V2_Install.sh ; sudo ./Ubuntu14_ExtremeUI_V2_Install.sh
```

## MOVE ADMIN TO THE RIGHT FOLDER ( INSTALL MAIN )
```
mv -v /home/xtreamcodes/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/
```

## ERROR 500 FIX

`````
apt-get update && apt-get install e2fsprogs -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && wget https://archive.org/download/geolite2_201910/GeoLite2.mmdb -O /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown xtreamcodes.xtreamcodes /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && clear && echo "If you see this message, 500 errors are probably fo0king fixed!" && /etc/init.d/xtreamcodes
`````
`````
apt-get update && apt-get install e2fsprogs -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb ; wget http://####.ml/ui/ui_install/GeoLite2.mmdb -O /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown xtreamcodes.xtreamcodes  /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb  && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh && clear && echo "If you see this message, 500 errors are probably fucking fixed"
`````

## LIBCURL3 INSTALL AND REMOVE LIBCURL4

```
apt-get purge libcurl4
apt-get install libcurl3

OR

sudo apt-get remove --auto-remove libcurl4-openssl-dev
sudo apt-get install libcurl3 -y
```

## OFFICIAL MIRROR INSTALLATIONS [ MAIN - LB - ADMIN ]

@World Of IPTV Mirror

```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget https://worldofiptv.com/downloads/xtreamui/install.py ; sudo python install.py
```

@urgodfather's Mirror

```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget https://panel.undaderadaar.cf/install/install.py ; sudo python install.py
```
@'°√SX</>.AL's Mirror
```
apt-get update ; apt-get install libxslt1-dev libcurl3 libgeoip-dev python -y ; wget http://DNS.ml/ui/officialXCui/install.offline.with.admin.py ; sudo python install.offline.with.admin.py
```

## BACKUP DATABASE

```
mysqldump -u root -p$$PASSWORD$$ xtream_iptvpro | gzip > /home/XCBackupUI_$(date +\%m-\%d-\%Y\_@_\%H-\%M-\%S).gz
```
or
```
mysqldump xtream_iptvpro > xtcdump_backUpDB.sql
```

## RESTORE DATABASE
```
mysql -u root -pPA$$WORD xtream_iptvpro < /root/backup_2020.sql
```
or with gzip
```
gunzip < backup_2020.sql.gz | mysql -u root -p xtream_iptvpro
```

## DELETE LOGS 

```
sudo mysql -u root
use xtream_iptvpro;
```
```
CREATE TABLE client_logs_new LIKE client_logs; RENAME TABLE client_logs TO client_logs_old, client_logs_new TO client_logs; DROP TABLE client_logs_old;

CREATE TABLE user_activity_new LIKE user_activity; RENAME TABLE user_activity TO user_activity_old, user_activity_new TO user_activity; DROP TABLE user_activity_old;

CREATE TABLE stream_logs_new LIKE stream_logs; RENAME TABLE stream_logs TO stream_logs_old, stream_logs_new TO stream_logs; DROP TABLE stream_logs_old;
```
or
```
/usr/bin/mysql -uroot -p$$PASSWORD$$ -hlocalhost -Dxtream_iptvpro -e"TRUNCATE TABLE client_logs" &&
/usr/bin/mysql -uroot -p$$PASSWORD$$ -hlocalhost -Dxtream_iptvpro -e"TRUNCATE user_activity" && 
/usr/bin/mysql -uroot -p$$PASSWORD$$ -hlocalhost -Dxtream_iptvpro -e"CREATE TABLE stream_logs_new LIKE stream_logs; RENAME TABLE stream_logs TO stream_logs_old, stream_logs_new TO stream_logs; DROP TABLE stream_logs_old;"
```
## RESTART MYSQL UBUNTU 18 & 14

Restart sql U14:  
```
service mysql restart
```
Restart sql U18: 
```
/etc/init.d/mysql restart
```

Truncate MySQL logs: 
```
truncate /var/lib/mysql/mysql_error.log --size 0
truncate /var/log/mysql/error.log --size 0
```
check mysql status: `service mysql status` 

check mysql.service: `sudo nano /lib/systemd/system/mysql.service`

And then try :
```
mysql -u root -e "truncate table xtream_iptvpro.client_logs;"
mysql -u root -e "truncate table xtream_iptvpro.stream_logs;"
mysql -u root -e "truncate table xtream_iptvpro.user_activity;"
```
Mostly a RESTART HELP!
```sudo reboot```

## FIX/DELETE HIGH RAM DUE TO STREAM LOGS? / STREAM RESTARTS / TPMFS 100%
```
rm -rf /home/xtreamcodes/iptv_xtream_codes/streams/* ; /etc/init.d/xtreamcodes
```
or
```
find /home/xtreamcodes/iptv_xtream_codes/streams/* -delete > /dev/null
```

## CHECK/SEE OPEN PORTS COMMAND
```
sudo lsof -i -P -n | grep LISTEN
```
or
```
lsof -i -P -n
```
or
```
-tulpn | grep LISTEN
```

## IP-TABLES
Check IF ip is blocked/logged: 
```
iptables -L INPUT -v -n | grep "IPAddressHERE"
```
RUN this command on all your servers manually, it will remove all the Block IP and allow all IP
```
sudo iptables -P INPUT ACCEPT && iptables -P FORWARD ACCEPT && iptables -P OUTPUT ACCEPT && iptables -t nat -F && iptables -t mangle -F && iptables -F && iptables -X
```

## CHECK IP/MAG ON LOGS SCANNED OR BLOCKED
```
grep -c "IPHEREORMAG" /home/xtreamcodes/iptv_xtream_codes/logs/*.log
```
```
grep -c "IPHEREORMAG" /home/xtreamcodes/iptv_xtream_codes/logs/error.log
```
```
grep "IPHEREORMAG" /home/xtreamcodes/iptv_xtream_codes/magscan/logs/*.txt
```
or
```
grep -rnw /home/xtreamcodes/iptv_xtream_codes -e 'User_IP_Mag_Here' > CheckScanLog.txt
```

## DELETE XTREAMCODES COMPLETELY FROM SERVER
```
sudo pkill -9 nginx
sudo pkill -9 php
sudo pkill -9 php && /home/xtreamcodes/iptv_xtream_codes/php/sbin/php-fpm
sudo pgrep -u xtreamcodes
rm -rf /usr/bin/ffprobe
rm -rf /usr/bin/ffmpeg
crontab -u xtreamcodes -e
crontab -r -u xtreamcodes
killall -KILL -u xtreamcodes
userdel -r -f xtreamcodes
if u get error saying cnt as in use
umount -l /home/xtreamcodes/iptv_xtream_codes/tmp
umount -l /home/xtreamcodes/iptv_xtream_codes/streams
remove immunity from geolite2
chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb
rm -rf /home/xtreamcodes/
```
