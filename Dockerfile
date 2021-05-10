FROM debian:buster

RUN apt-get update && apt-get install -y
RUN apt-get install nginx -y
RUN apt install mariadb-server mariadb-client -y
RUN apt install php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline -y php7.3-xml php7.3-mbstring -y
RUN apt-get install wget -y
WORKDIR /usr/src/app/

# nginx
COPY ./srcs /usr/src/app/
RUN cp /usr/src/app/mysite.conf /etc/nginx/sites-available/
RUN cp /usr/src/app/mysite.conf /etc/nginx/sites-enabled/
RUN rm -rf /etc/nginx/sites-available/default && rm -rf /etc/nginx/sites-enabled/default

# wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -zxvf latest.tar.gz
RUN cp wp-config.php wordpress/wp-config.php
RUN cp -a wordpress /usr/src/app/site

# phpMyAdmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
RUN tar -zxvf phpMyAdmin-5.1.0-all-languages.tar.gz
RUN mv phpMyAdmin-5.1.0-all-languages /usr/src/app/site/phpmyadmin
RUN mv /usr/src/app/config.inc.php /usr/src/app/site/phpmyadmin/config.inc.php
RUN mkdir /usr/src/app/site/phpmyadmin/tmp

RUN chown -R www-data:www-data /usr/src/app/site

# ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
 -keyout /etc/ssl/private/nginx.key \
 -out /etc/ssl/certs/nginx.crt \
 -subj "/C=RU/ST=Moscow/L=Moscow/O=comp/OU=me/CN=nginx"

ENTRYPOINT ["/bin/sh", "start.sh"]

EXPOSE 80
EXPOSE 443