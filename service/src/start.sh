#!/bin/bash

rm -r /var/www/html/
cp -r /app/ /var/www/html/

chown -R root:root /var/www/html/
chmod -R 555 /var/www/html/

a2enmod rewrite
a2dissite 000-default.conf
a2ensite workshop.conf
service apache2 start
service apache2 reload
service mysql start

(crontab -l ; echo "* * * * * /bin/bash -c '/sanity.sh 127.0.0.1 80 10'") | crontab
service cron start

tail -f /var/log/apache2/access.log