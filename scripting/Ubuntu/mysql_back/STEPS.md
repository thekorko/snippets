First you need to setup each file

Then for each file you need to make it exectuable
chmod +x mysqldump.sh

sudo crontab -e

Put this line into crontab
30 7 * * * sh /backups/mysql_backup.sh
