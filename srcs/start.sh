# !/bin/bash
service mysql start
service php7.3-fpm start
service php7.3-fpm status
mariadb <<MYSQL_SCRIPT
CREATE DATABASE wordpress;
GRANT ALL ON *.* TO 'wordpress_user'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

mariadb <<MYSQL_SCRIPT 
SOURCE /usr/src/app/site/phpmyadmin/sql/create_tables.sql 
MYSQL_SCRIPT

nginx -g 'daemon off;'
