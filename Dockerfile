FROM php:7.4-fpm

RUN apt-get update && apt-get install -y git && \
    rm -rf /var/lib/apt/lists/* && \
    apt autoremove -y && apt autoclean -y

RUN curl https://getcomposer.org/composer-2.phar --output /usr/local/bin/composer && chmod 0777 /usr/local/bin/composer

WORKDIR /src

COPY . /src
