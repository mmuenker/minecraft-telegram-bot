FROM php:8.2-alpine

RUN apk add --update --no-cache \
    php-curl \
    php-mbstring \
    busybox-extras

RUN mkdir "/app"

WORKDIR "/app"

COPY crontab.txt /etc/crontabs/root

ADD . /app

ENV LANG "en"
ENV SERVER_PORT 25565

RUN chmod 755 cache

#CMD /usr/local/bin/php /app/index.php

CMD crond -f -d 8
