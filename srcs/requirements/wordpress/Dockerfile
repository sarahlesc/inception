FROM debian:buster

# INSTALLATION
RUN apt-get update -qy \
&& apt-get upgrade -qy
RUN apt-get -yq install wget php7.3-fpm php-mysql php-fpm php-pdo php-gd php-cli php-mbstring

WORKDIR /var/www

# PHPMYADMIN
RUN wget -c https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-english.tar.gz \
&& tar -xzvf phpMyAdmin-4.9.2-english.tar.gz
RUN mv phpMyAdmin-4.9.2-english phpmyadmin
COPY conf/config.inc.php phpmyadmin
RUN chown -R www-data: phpmyadmin #donne les droits pour y avoir acces

# WORDPRESS
RUN wget -c https://wordpress.org/latest.tar.gz \
&& tar -xzvf latest.tar.gz
RUN chown -R www-data: wordpress #donne les droits pour y avoir acces
COPY conf/wp-config.php html

RUN service php7.3-fpm start
COPY /conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000

CMD ["php-fpm7.3 -F"]
