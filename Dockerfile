FROM php:8.2-apache
# Устанавливаем mysqli
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
# Копируем файлы проекта
COPY . /var/www/html/
# Права для www-data
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80