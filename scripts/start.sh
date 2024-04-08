#!/bin/bash

# Constrói as imagens Docker
docker-compose build

# Inicia os contêineres Docker
docker-compose up -d

# Executa o composer install dentro do contêiner da aplicação
docker-compose exec app composer install

# Informa que o setup foi concluído
echo "Setup concluído!"
