FROM debian:buster

RUN apt-get update -qy && apt-get install -qy nginx openssl

COPY conf/nginx-config /etc/nginx/sites-available

RUN ln -s /etc/nginx/sites-available/nginx-config  /etc/nginx/sites-enabled/nginx-config #creation d'un lien symbolique entre les sites dispo et les sites ou on peut avoir acces
RUN rm -rf /etc/nginx/sites-enabled/default
RUN rm -rf /etc/nginx/sites-available/default

COPY /conf/index.html /var/www/html/
RUN rm -rf /var/www/html/index.nginx-debian.html
RUN chown -R www-data: /var/www/html/index.html #donne les droits pour y avoir acces

RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/ssl/slescure.42.fr.pem -keyout /etc/ssl/slescure.42.fr.key -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=slescure/CN=slescure.42.fr"

EXPOSE 443

#CMD ["nginx", "-g", "daemon off;"]
