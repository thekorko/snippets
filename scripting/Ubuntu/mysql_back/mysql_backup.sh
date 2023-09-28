#!/bin/bash

# Database credentials
user=""
password=""
host=""
db_name=""

# Other options
backup_path="/path/to/your/home/_backup/mysql"
date=$(date +"%d-%b-%Y")

# Set default file permissions
umask 177

# Dump database into SQL file
mysqldump --no-tablespaces --user=$user --password=$password --host=$host $db_name > $backup_path/$db_name-$date.sql

# Delete files older than 30 days
find $backup_path/* -mtime +30 -exec rm {} \;
