# API RESTful

Este projeto consiste em uma API RESTful que consome dados de um banco MySQL.

### Requisitos
- PHP 8.1
- Composer
- Git

### Bancos de dados compativeis
- Mysql

### Configuração

1. Clone este repositório para seu ambiente local.

2. Instale as dependências do Composer rodando o comando "composer install" no diretório do projeto.

3. Crie um arquivo ".env" a partir do ".env.example" e configure nele os parâmetros relacionados ao banco de dados: DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD. Além disso, insira o nome do schema e da tabela que deseja apontar sua API nas variáveis DB_SCHEMA e DB_TABLE respectivamente. (Obs.: Sua tabela deve conter uma coluna "id" como chave primária do tipo "integer")

4. Também no arquivo ".env", adicione na variável "JWT_KEY" a chave que será utilizada para criptografar o JWT usado para autenticação nos endpoints.

5. Execute no diretório do projeto o comando "php artisan serve" para iniciar o servidor de desenvolvimento.

6. A API estará disponível em "http://127.0.0.1:8000".

7. Acesse http://127.0.0.1:8000/api/documentation para ler a documentação da API.

#### Test

1. No diretorio da aplicação execute o comando "php artisan test" para rodar os teste de integração.
