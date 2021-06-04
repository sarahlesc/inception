FROM debian:buster

RUN apt-get update -qy \
&& apt-get upgrade -qy \
&& apt-get install -qy default-mysql-server mariadb-server wget

EXPOSE 80 443
