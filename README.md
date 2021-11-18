<h1 align="center">Aplicação PHP do jeito certo</h1>

## Projeto

Este é um exemplo de aplicação PHP do jeito certo.

## Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP ^7.2](https://www.php.net/)
- [Doctrine ORM](https://www.doctrine-project.org/)
- [SQLite](https://www.sqlite.org/index.html)

Recursos em destaque

- Implementação do padrão Repository
- Uso do ORM Doctrine para abstrair a conexão com o banco de dados
- Uso do Doctrine Migrations para manter a estrutura do banco de dados

## Como executar

- Clone o repositório
- Execute `composer install` para baixar as dependências
- Execute `vendor/bin/doctrine-migrations migrate` para criar as tabelas do banco de dados.
- Execute o `php -S localhost:3000` para iniciar a aplicação.

Por fim, a aplicação estará disponível em `http://localhost:3000`

## Licença

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE.md) para mais detalhes.
