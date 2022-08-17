ARG PHP_VERSION=8.1

FROM php:${PHP_VERSION}-fpm-alpine AS dev

RUN apk add --no-cache --virtual .persistent-deps \
  openssl-dev \
  libzip-dev \
  zlib-dev \
  freetype-dev \
  libpng-dev \
  libjpeg-turbo-dev \
  nginx \
  supervisor \
  yarn
  # mysql-client \
  # shadow

RUN apk add --no-cache --virtual .build-deps \
  oniguruma-dev
  # autoconf \
  # g++ \
  # make \
  # musl-dev

# Install PHP extensions
RUN set -xe \
  && docker-php-ext-configure pdo_mysql --with-pdo-mysql \
  && docker-php-ext-install -j$(nproc) \
    opcache \
    mbstring \
    gd \
    pdo_mysql \
    exif \
    sockets \
    zip \
  && apk del .build-deps \
  && rm -rf /tmp/* /var/cache/apk/*

# Install Composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_HTACCESS_PROTECT 0
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN cp -f "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

ENTRYPOINT ["/usr/bin/supervisord", "-c", "/app/deploy/supervisord.conf"]

FROM dev AS prod

WORKDIR /app

RUN cp -f "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && rm -f /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY --from=geoip2 /app/geoip2 /app/geoip2
COPY app /app/app
COPY bootstrap /app/bootstrap
COPY deploy /app/deploy
COPY config /app/config
COPY database /app/database
COPY lang /app/lang
COPY public /app/public
COPY resources /app/resources
COPY routes /app/routes
COPY storage /app/storage
COPY artisan /app/
COPY vite.config.js /app/
COPY composer.json /app/

RUN composer install
RUN chown -R www-data:www-data /app