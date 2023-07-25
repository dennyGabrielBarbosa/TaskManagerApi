<h1>Task Manager API</h1>

> Status do projeto: Em desenvolvimento

para rodar o projeto na sua máquina siga esses passo:

navegue até a pasta onde ficará o projeto e execute:

`git clone https://github.com/dennyGabrielBarbosa/TaskManagerApi.git`

acesse a pasta criada com o nome de TaskManagerApi e execute esses comandos:

`composer install`

`cp .env.example .env`
ou
`copy .env.example .env` para windows

`php artisan key:generate`

`php artisan migrate`

`php artisan serve`

Em seguida vá para seu navegador e acesse: http://localhost:8000
