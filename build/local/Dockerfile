FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install dependencies
    # $command = "ifconfig | grep ether | awk '{print $2}'";
RUN apt-get update && apt-get install -y net-tools iputils-ping

# Copy project files
COPY . .


# Start Apache in foreground
CMD ["apache2-foreground"]
