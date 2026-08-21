FROM wordpress:php8.2-apache

# 2. Install and update packages
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        mysqli \
        pdo_mysql \
        zip \
        intl \
        opcache \
    && rm -rf /var/lib/apt/lists/*

# 3. Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# 4. Add configuration
RUN { \
    echo 'upload_max_filesize = 64M'; \
    echo 'post_max_size = 64M'; \
    echo 'memory_limit = 512M'; \
    echo 'max_execution_time = 300'; \
    echo 'max_input_vars = 3000'; \
} > /usr/local/etc/php/conf.d/wp-limits.ini

# 5. Rewrite
RUN a2enmod rewrite

# 6. Copy wpc-content to container

COPY ./wp/wp-content /usr/src/wordpress/wp-content

# 7. Delete default Wordpress themes
RUN rm -rf /var/www/html/wp-content/themes/twentytwentyfive
RUN rm -rf /var/www/html/wp-content/themes/twentytwentyfour
RUN rm -rf /var/www/html/wp-content/themes/twentytwentythree

# 8. Adjust permissions
RUN chown -R www-data:www-data /var/www/html/wp-content
RUN chmod g+w /var/www/html/wp-content -R

EXPOSE 8080