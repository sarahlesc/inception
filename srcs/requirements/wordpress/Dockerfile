FROM debian:buster

# INSTALLATION
RUN apt-get update -qy \
&& apt-get upgrade -qy

# PHPMYADMIN

RUN apt-get -yq install wget php7.3-fpm php-mysql php-fpm php-pdo php-gd php-cli php-mbstring

# WORDPRESS

ADD https://wordpress.org/latest.tar.gz /tmp/latest.tar.gz
RUN cd /tmp \
	&& tar -zxvf latest.tar.gz \
	&& mkdir /var/www \
	&& mkdir /var/www/html \
	&& mv -f wordpress /var/www/html/wordpress \
	&& chown -R www-data:www-data /var/www/html/wordpress \
	&& chmod 755 -R /var/www/html/wordpress/
COPY conf/wp-config.php /var/www/html/wordpress/
RUN rm -rf /var/www/html/wordpress/wp-config-sample.php

#COPY /conf/www.conf /var/www/etc/php/7.3/fpm/pool.d/www.conf
RUN	sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf"
RUN mkdir -p /run/php/
RUN touch /run/php/php7.3-fpm.pid

CMD [ "/usr/sbin/php-fpm7.3", "--nodaemonize"]

EXPOSE 9000

#CMD ["php-fpm7.3 -F"]
