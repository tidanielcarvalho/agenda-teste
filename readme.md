# Agenda de contatos
> Projeto desenvolvido com o framework Laravel + AdminLTe

> Atenção: o campo "Pesquisar" permite a busca por nome e e-mail

## Acesso via Heroku

- Para facilitar o acesso, a plataforma foi hospedada no Hekoku.

- Acesso via __https://agenda-danielcarvalho.herokuapp.com/login__
- Entre na ferramenta com o usuário:
    - E-mail: __admin@admin.com__  
    - Senha: __secret__


## Acesso via Local

- Para clonar o repositório, abra a ferramenta de linha de comando de sua preferência, navegue até a pasta desejada (exemplo: Desktop) e cole o comando a seguir: __git clone https://github.com/tidanielcarvalho/agenda-teste.git agenda__
- Na pasta do projeto, copie o arquivo __.env.example__ e cole na mesma pasta (será criado um novo arquivo de nome ".env - Copia.example ", por exemplo), então altere o nome desse arquivo para __.env__ e edite os campos DB_DATABASE, DB_USERNAME e DB_PASSWORD.
- Ainda no arquivo .env, em APP_URL atribua o valor: http://localhost:8000, ficando assim: APP_URL=http://localhost:8000
- Voltando na linha de comando, abra a basta do projeto: cd agenda
- execute: __composer install__
- depois: __composer dump-autoload__
- em seguida: __php artisan key:generate__
- e __php artisan migrate --seed__

- por fim __php artisan serve__

- Entre na ferramenta com o usuário:
    - E-mail: __admin@admin.com__  
    - Senha: __secret__

   
