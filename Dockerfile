FROM php:8.1-apache

# ติดตั้ง mysqli สำหรับเชื่อมต่อ MySQL ด้วย PHP
RUN docker-php-ext-install mysqli
RUN mkdir -p /var/www/html/posters \
 && chown -R www-data:www-data /var/www/html/posters \
 && chmod -R 755 /var/www/html/posters
