FROM tommylau/php-5.2

# RUN a2enmod rewrite

COPY ./config/php.ini /usr/local/etc/php/
COPY . /var/www/html/

RUN usermod -u 1000 www-data

RUN touch /var/log/php_errors.log && \
  chown www-data: /var/log/php_errors.log && \
  chmod +rw /var/log/php_errors.log

RUN chown -R www-data: .
