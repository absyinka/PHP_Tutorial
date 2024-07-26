# FROM php:7.4-alpine

# # Copy your application
# COPY . /var/www/html

# # Set working directory
# WORKDIR /var/www/html

# EXPOSE 8700

# # Command to run your application
# CMD ["php", "-S",  "localhost:8700", "/var/www/html/01_FirstPage"]

FROM php:7.4-alpine

WORKDIR /var/www/html

# Install dependencies (if you have any, e.g., via Composer)
# RUN apk add --no-cache bash git
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# WORKDIR /var/www/html
# COPY composer.json composer.lock ./
# RUN composer install --no-dev

# Copy your application
COPY . /var/www/html

# Set permissions if necessary
# RUN chown -R www-data:www-data /var/www/html

EXPOSE 8700

# Command to run your application
CMD ["php", "-S", "localhost:8700", "-t", "/var/www/html"]
