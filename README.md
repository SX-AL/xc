#SX.AL

#INSTALL NEW EARLY RELEASE!

```mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup && mkdir -p /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/adtools/* /home/xtreamcodes/iptv_xtream_codes/admin_backup/adtools_backup && cp -avr /home/xtreamcodes/iptv_xtream_codes/admin/* /home/xtreamcodes/iptv_xtream_codes/admin_backup && apt-get install unzip e2fsprogs python-paramiko -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && rm -rf /home/xtreamcodes/iptv_xtream_codes/admin && rm -rf /home/xtreamcodes/iptv_xtream_codes/pytools && rm -rf /home/xtreamcodes/iptv_xtream_codes/adtools && wget "https://xtream-ui.com/install/early.php?username=$USERNAME$&password=$PASSWORD$" -O /tmp/update.zip -o /dev/null && unzip /tmp/update.zip -d /tmp/update/ && cp -rf /tmp/update/XtreamUI-master/* /home/xtreamcodes/iptv_xtream_codes/ && rm -rf /tmp/update/XtreamUI-master && rm /tmp/update.zip && rm -rf /tmp/update && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown -R xtreamcodes:xtreamcodes /home/xtreamcodes/ && /home/xtreamcodes/iptv_xtream_codes/start_services.sh```


*DECRYPT & ENCRYPT

```
wget https://www.codepile.net/raw/5WoOY9Wj.py -O config.py && python config.py DECRYPT && rm config.py
```

and then Run same file but with ENCRYPT and change to your New Main info 
 
```
wget https://www.codepile.net/raw/5WoOY9Wj.py -O config.py && python config.py ENCRYPT && rm config.py
```


*EDIT NGINX.config

open nginx.conf with;

```sudo nano /home/xtreamcodes/iptv_xtream_codes/nginx/conf/nginx.conf```

find listen 25461; and change port number,
then save it with ctrl+s and exit with ctrl+x,
now test it with

```sudo /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -t```

then reload nginx if test is successfull,

```sudo /home/xtreamcodes/iptv_xtream_codes/nginx/sbin/nginx -s reload```

Go to Manage Serverspage, edit the server's http broadcast port.
restart services on servers with,

```sudo /home/xtreamcodes/iptv_xtream_codes/start_services.sh```


*INSTALL LB WITH UBUNTU 14

```wget http://DNSHERE.ml/ui/ui_install/LB_INSTALL/Ubuntu14_ExtremeUI_V2_Install.sh ; chmod +x Ubuntu14_ExtremeUI_V2_Install.sh```


*ERROR 500 FIX

```apt-get update && apt-get install e2fsprogs -y && chattr -i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb ; wget https://archive.org/download/geolite2_201910/GeoLite2.mmdb -O /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && chown xtreamcodes.xtreamcodes  /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb  && chattr +i /home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb && clear && echo "If you see this message, 500 errors are probably fo0king fixed!" && /etc/init.d/xtreamcodes```


#LIBCURL3 INSTALL AND REMOVE LIBCURL4

```apt-get purge libcurl4
apt-get install libcurl3

OR

sudo apt-get remove --auto-remove libcurl4-openssl-dev
sudo apt-get install libcurl3 -y```