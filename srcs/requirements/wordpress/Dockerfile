FROM debian:buster

# INSTALLATION
RUN apt-get update -qy \
&& apt-get upgrade -qy
RUN apt-get -yq install wget php7.3-fpm php-mysql php-fpm php-pdo php-gd php-cli php-mbstring

WORKDIR /var/www

# PHPMYADMIN
RUN wget -c https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-english.tar.gz -O - | tar -xz -C /var/www
#RUN mv var/www/phpMyAdmin-4.9.2-english /var/www/phpmyadmin
COPY conf/config.inc.php /var/www/phpmyadmin
RUN chown -R www-data: /var/www/phpmyadmin #donne les droits pour y avoir acces

# WORDPRESS
RUN wget -c https://wordpress.org/latest.tar.gz -O - | tar -xz -C /var/www
RUN chown -R www-data: /var/www/wordpress #donne les droits pour y avoir acces
COPY conf/wp-config.php /var/www/html

EXPOSE 9000

CMD ["php-fpm7.3 -F"]
