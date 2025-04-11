# Verwende PHP mit Apache
FROM --platform=linux/amd64 php:7.4-apache

# Installiere die mysqli Erweiterung
RUN docker-php-ext-install mysqli

# Kopiere die HTML-Dateien in den Webserver-Ordner
COPY ./html /var/www/html

# Exponiere Port 80
EXPOSE 80