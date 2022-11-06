FROM php:8

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN ln -s /composer.phar /usr/bin/composer
RUN chmod +x /usr/bin/composer
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install pdo pdo_mysql

CMD [ "composer" ]
