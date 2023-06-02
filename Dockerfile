FROM php:8.1-fpm-alpine3.16

#Install basic PHP libraries
RUN apk --no-cache add php-pdo php-mbstring php-openssl php-json php-dom curl \
php-curl php-tokenizer php-phar php-xml php-xmlwriter

#Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

#Copy all of the file in folder to /src
WORKDIR /var/www/html/
COPY ./api /var/www/html/

RUN composer update

#Run tests
RUN vendor/bin/phpunit

#Swagger
RUN php artisan cache:clear
RUN php artisan swagger-lume:generate
RUN php artisan swagger-lume:publish
