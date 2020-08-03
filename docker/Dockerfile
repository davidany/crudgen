FROM php:7.3-apache

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo_mysql \
    && a2enmod rewrite

COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf

COPY docker/php/conf.d/*.ini /usr/local/etc/php/conf.d/
COPY docker/php/php.ini /usr/local/etc/php/php.ini
COPY docker/mysql/my.cnf /etc/mysql/conf.d/my.cnf
COPY docker/phpmyadmin/config.user.inc.php /etc/phpmyadmin/config.user.inc.php

COPY docker/php/composer-installer.sh /usr/local/bin/composer-installer

RUN chmod +x /usr/local/bin/composer-installer \
    && /usr/local/bin/composer-installer \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && composer --version

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html


# Installs xdebug
#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug