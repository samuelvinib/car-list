@echo off

REM Constrói as imagens Docker
docker-compose build

REM Inicia os contêineres Docker
docker-compose up -d

REM Executa o composer install dentro do contêiner da aplicação
docker-compose exec php composer install

REM Informa que o setup foi concluído
echo Setup finalizado!
