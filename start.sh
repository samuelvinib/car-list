#!/bin/bash

# Renomeia o arquivo .env.example para .env
mv .env.example .env

# Constrói as imagens Docker
docker-compose build

# Inicia os contêineres Docker
docker-compose up -d

# Executa o composer install dentro do contêiner da aplicação
docker-compose exec php composer install

# Executa o comando de migrations para criar as tabelas
docker-compose exec php php artisan migrate

# Informa que o setup foi concluído
echo "Setup finalizado!"
echo "Acesse: http://localhost:8000/"
