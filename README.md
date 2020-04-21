#'°√SX</>.AL

## INSTALL NEW EARLY RELEASE!

```
apt-get update && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/adtools/* /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/admin/* /home/xtreamcodes/iptv_xtream_codes/admin_backup && apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && rm -rf /home/xtreamcodes/iptv_xtream_codes/adtools && wget "https://xtream-ui.com/install/early.php?username=$USERNAME$&password=$PASSWORD$" -O /tmp/update.zip -o /dev/null && unzip /tmp/update.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
 ```

## INSTALL NEW EARLY RELEASE MANUALLY!

```
apt-get update && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/adtools/* /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/admin/* /home/xtreamcodes/iptv_xtream_codes/admin_backup && apt-get update && apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && rm -rf /home/xtreamcodes/iptv_xtream_codes/adtools && wget "http://DOMAIN.ml/ui/update_ui/release_22e.zip" -O /tmp/update.zip -o /dev/null && unzip /tmp/update.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx_rtmp/sbin/nginx_rtmp && sudo chmod +x /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
```

## UPDATE DB TABLES MANUALLY!

```
touch /home/xtreamcodes/iptv_xtream_codes/admin/.update && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && echo "" > /home/xtreamcodes/iptv_xtream_codes/admin/.update && /home/xtreamcodes/iptv_xtream_codes/start_services.sh
```


## DECRYPT & ENCRYPT DB INFORMATION

```
wget https://www.codepile.net/raw/5WoOY9Wj.py -O config.py && python config.py DECRYPT && rm config.py
```

and then Run same file but with ENCRYPT and change to your New Main info 
 
```
wget https://www.codepile.net/raw/5WoOY9Wj.py -O config.py && python config.py ENCRYPT && rm config.py
```


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


## ERROR 500 FIX

`````
apt-get update && apt-get install e2fsprogs -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && wget https://archive.org/download/geolite2_201910/GeoLite2.mmdb -O /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown xtreamcodes.xtreamcodes /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && clear && echo "If you see this message, 500 errors are probably fo0king fixed!" && /etc/init.d/xtreamcodes
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

BEFORE MAKE THIS:
restart sql U14:  `service mysql restart`
restart sql U18: `/etc/init.d/mysql restart`

check mysql status: `service mysql status` 

And then try :
```
mysql -u root -e "truncate table xtream_iptvpro.client_logs;"
mysql -u root -e "truncate table xtream_iptvpro.stream_logs;"
mysql -u root -e "truncate table xtream_iptvpro.user_activity;"
```
Mostly a RESTART HELP!
```sudo reboot```

## FIX HIGH RAM / STREAM RESTARTS / TPMFS 100%
```
rm -rf /home/xtreamcodes/iptv_xtream_codes/streams/* ; /etc/init.d/xtreamcodes
```
or
```
find /home/xtreamcodes/iptv_xtream_codes/streams/* -delete > /dev/null
```