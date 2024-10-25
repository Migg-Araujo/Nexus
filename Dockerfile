FROM php:8.2.18-apache

COPY . /var/www/html/

RUN a2enmod rewrite