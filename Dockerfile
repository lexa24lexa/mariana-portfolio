FROM php:8.2-apache

RUN apt-get update && \
    apt-get install -y zip unzip git

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}/!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN mkdir -p /var/www/html/public /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/public /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public /var/www/html/storage /var/www/html/bootstrap/cache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apache2ctl configtest

RUN service apache2 restart

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-dev --optimize-autoloader -vvv || \
    { echo 'Composer install failed, trying without optimization'; composer install --no-dev -vvv; }

EXPOSE 80

CMD ["apache2-foreground"]
