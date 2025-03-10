FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Restart Apache to apply changes
RUN service apache2 restart

# Start Apache in foreground
CMD ["apache2-foreground"]
