FROM php:8.1-apache
EXPOSE 80
RUN docker-php-ext-install mysqli
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis