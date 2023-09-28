On ubuntu you can create an ssh alias:
alias my_server='ssh username@VPS_IP_ADRESS'

On windows otherwise you have to create this function and make it usable everytime you boot
function sshalias { ssh -i PATH_TO_YOUR_KEY "username@VPS_IP_ADRESS" }

Using SSH
ssh username@VPS_IP_ADRESS

Using mv command
mv /var/www/wordpress_site/wp-content/themes/TemplateName /home/user/my_backups/TemplateName-Date

Using cp command
sudo cp -r /home/user/repository/TemplateName /var/www/wordpress_site/wp-content/themes/TemplateName

cp /home/user/repository/TemplateName/example-file.php /var/www/wordpress_site/wp-content/themes/TemplateName/example-file.php

Using git
git pull origin
user
pass
or setup a token

Copy a wordpress file
scp C:\xampp_server\apps\wordpress\htdocs\wp-content\themes\TemplateName\example-file.php username@VPS_IP_ADRESS:/var/www/wordpress_site/wp-content/themes/TemplateName/qtx-rss/qtx-rss-load.php

cd /var/www/wordpress_site/wp-content/themes/TemplateName

nano /var/www/wordpress_site/wp-content/themes/TemplateName/front-page.php

chmod -v 755 /var/www/wordpress_site/wp-content/themes/TemplateName

find TemplateName -type d -exec chmod -v 755 {} \;

find TemplateName -type f -exec chmod -v 644 {} \;

chmod -exec -v 440 Example/config.php
find /var/www/wordpress_site/wp-content/themes/apps -type f -exec chmod -v 644 {} \;
find Example/front -type f -exec chmod -v 644 {} \;

Using wget and tar for decompressing:
wget -O wp.tar.gz https://wordpress.org/latest.tar.gz
tar -xf wp.tar.gz
crontab:
sudo crontab -e

Check available methods in WordPress xmlrpc:
curl -X POST -d "<methodCall><methodName>system.listMethods</methodName><params></params></methodCall>" http://examplewp.com/xmlrpc.php

Update certbot domains:
certbot -d examplewp.com,support.examplewp.com,www.examplewp.com --expand

Basic mysql:
CREATE USER 'username'@'localhost' IDENTIFIED BY RANDOM PASSOWRD;
GRANT ALL ON wp_demo.* TO 'wpdemo321'@'localhost';
GRANT ALL ON wp_demo.* TO 'wpdemo321'@'localhost' IDENTIFIED BY 'passwd';