FROM php:7.4-apache
WORKDIR /var/www/html
COPY . .
RUN apt-get update
EXPOSE 80
EXPOSE 443
CMD ["apache2-foreground"]
