# Utilisez une image PHP officielle avec Apache
FROM php:7.4-apache

# Installez les dépendances requises
RUN apt-get update && apt-get install -y \
    libssl-dev \
    && docker-php-ext-install pdo pdo_mysql

# Copiez le contenu de votre application
COPY . /var/www/html/

# Configurez Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Exposez le port 80
EXPOSE 80

# Commande pour démarrer Apache
CMD ["apache2-foreground"]
