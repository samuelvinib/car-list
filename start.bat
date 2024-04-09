@echo off

ren .env.example .env

REM Constrói as imagens Docker
docker-compose build

REM Inicia os contêineres Docker
docker-compose up -d

REM Executa o composer install dentro do contêiner da aplicação
docker-compose exec php composer install

REM Execute o comando de migrations para criar as tabelas
docker-compose exec php php artisan migrate

REM Informa que o setup foi concluído
echo Setup finalizado!
echo Acesse: http://localhost:8000/
