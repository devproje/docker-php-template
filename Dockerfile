FROM php:8.2-fpm-alpine3.17

RUN apk update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

CMD ["php-fpm"]
