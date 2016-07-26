FROM php:7.0-fpm

MAINTAINER Olivier Pichon <op@united-asian.com>

ARG timezone='Asia/Hong_Kong'

ARG memory_limit=-1

ARG build='build'

ENV SYMFONY__BUILD $build

ADD ./etc/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && apt-get install -y --force-yes --fix-missing \
        cron \
        git \
        libcurl4-gnutls-dev \
        libicu-dev \
        libldap2-dev \
        libmcrypt-dev \
        openssh-client \
        zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure ldap --with-libdir=/lib/x86_64-linux-gnu/ \
    && docker-php-ext-install \
        curl \
        intl \
        ldap\
        mcrypt \
        pdo_mysql \
        zip \
    && echo "date.timezone="$timezone > /usr/local/etc/php/conf.d/date_timezone.ini \
    && echo "memory_limit="$memory_limit > /usr/local/etc/php/conf.d/memory_limit.ini \
    && usermod -u 1001 www-data

COPY . /var/www

RUN rm -rf /var/www/html \
    && mkdir -p /var/www/app/cache /var/www/app/logs \
    && chown -R www-data:www-data /var/www \
    && chmod -R 777 /var/www/app/cache /var/www/app/logs \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

USER www-data

WORKDIR /var/www

ENV PATH "/var/www/.composer/vendor/bin:$PATH"
