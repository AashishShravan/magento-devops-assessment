FROM php:8.3-fpm

ARG UID=1001
ARG GID=1001

RUN groupadd -g ${GID} clp && \
    useradd -u ${UID} -g clp -m -s /bin/bash test-ssh

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    vim \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxslt1-dev && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg	

RUN docker-php-ext-install \
    pdo_mysql \
    intl \
    soap \
    bcmath \
    sockets \
    zip \
    ftp \
    xsl \
    gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN chown -R test-ssh:clp /var/www/html

USER test-ssh

CMD ["php-fpm"]
