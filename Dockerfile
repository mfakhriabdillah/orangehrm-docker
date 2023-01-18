FROM php:7.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql

#RUN apk add --no-cache zip libzip-dev
#RUN docker-php-ext-configure zip
#RUN docker-php-ext-install zip
#RUN docker-php-ext-install pdo pdo_mysql 