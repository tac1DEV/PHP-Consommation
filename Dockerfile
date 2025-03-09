# Utiliser une image de base PHP avec Apache
FROM php:8.1-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers de l'application dans le conteneur
COPY . /var/www/html/

# Donner les permissions appropriées
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exposer le port 80
EXPOSE 80