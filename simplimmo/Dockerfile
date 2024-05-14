FROM php:8.0-apache 
RUN apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl \
&& docker-php-ext-install pdo_mysql \
&& a2enmod rewrite
WORKDIR /var/www/html
COPY ./index.php /var/www/html/index.php