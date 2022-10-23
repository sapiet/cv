FROM php:8.0-fpm

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip libpng-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install gd

WORKDIR /var/www/app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
# RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
	&& apt-get install -y nodejs

RUN git config --global user.email "xavier.quievre@gmail.com" \
    && git config --global user.name "Xavier QUIÈVRE"

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini && \
  echo 'max_execution_time = 300' >> /usr/local/etc/php/conf.d/docker-php-max-execution-time.ini
