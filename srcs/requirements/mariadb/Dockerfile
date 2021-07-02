FROM debian:buster

RUN apt-get update -qy \
&& apt-get upgrade -qy \
&& apt-get install -qy default-mysql-server mariadb-server

COPY conf/database.sql /database.sql

mysql < srcs_docker/data_base.sql  #creation de la base de donnees du serveur


EXPOSE 3306
