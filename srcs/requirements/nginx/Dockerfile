FROM debian:buster

RUN apt-get update -qy \
&& apt-get upgrade -qy \
&& apt-get install -qy nginx wget

EXPOSE 443

ENTRYPOINT [ "/bin/bash" ]

CMD ["nginx", "-g", "daemon off;"]
