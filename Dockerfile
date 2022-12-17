FROM php:8.1-apache
COPY --from=composer /usr/bin/composer /usr/bin/composer
EXPOSE 80
RUN apt-get update
RUN docker-php-ext-install mysqli 
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis
RUN apt-get install -y git && \
    apt-get install -y libpng-dev && \
    apt-get install -y zip unzip && \
    docker-php-ext-install gd