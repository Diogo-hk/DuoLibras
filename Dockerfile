# 1. Usar imagem oficial do PHP com Apache
FROM php:8.2-apache

# 2. Instalar dependências do sistema (Zip, Git, Postgres, Node.js)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    libpq-dev \
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Limpar cache para deixar a imagem leve
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# 4. Instalar extensões do PHP que o Laravel exige
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

# 5. Ativar mod_rewrite do Apache (para as rotas funcionarem)
RUN a2enmod rewrite

# 6. Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 7. Definir pasta de trabalho
WORKDIR /var/www/html

# 8. Copiar os arquivos do projeto para dentro do servidor
COPY . .

# 9. Configurar permissões de pasta (Crucial pro Laravel não dar erro 500)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Rodar instalação das dependências
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# 11. Configurar o Apache para apontar para a pasta 'public'
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 12. Expor a porta 80
EXPOSE 80

# 13. Comando final: Rodar migrations e Iniciar o servidor
CMD php artisan migrate --force && apache2-foreground