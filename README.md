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

3. Certifique-se de configurar corretamente os parâmetros relacionados ao banco de dados, como DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD no seu arquivo ".env" (DB_CONNECTION deve ser "mysql").

4. Também no arquivo ".env", adicione a variável "JWT_KEY" com a chave que será utilizada para criptografar o JWT usado para autenticação nos endpoints.

5. Execute no diretório do projeto o comando "php artisan serve" para iniciar o servidor de desenvolvimento.

6. A API estará disponível em "http://127.0.0.1:8000".

7. Acesse http://127.0.0.1:8000/api/documentation para ler a documentação da API.

#### Test

1. No diretorio da aplicação execute o comando "php artisan test" para rodar os teste de integração.
