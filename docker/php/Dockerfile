FROM php:8

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN ln -s /composer.phar /usr/bin/composer
RUN chmod +x /usr/bin/composer
RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

CMD [ "composer" ]
