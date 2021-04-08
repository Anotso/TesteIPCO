# API para cadastro de Customer e Payment





## Documentação oficial do Lumen

Link para acessar a documentação oficial: [Lumen website](https://lumen.laravel.com/docs).

## Rotas para consumir a API

* Verbo Post HTTP:
  - /customer => rota para cadastro de customer;
  - /payment => rota para cadastro de customer;

* Verbo Get HTTP:
  - /customer/all => retorna todos os customers cadastrados na base de dados;
  - /customer/{id} => retorna todos os dados do customer que possui o ID informado;
  - /customer/{id}/payments  =>  retorna todos os dados do customer e as informações existentes na tabela de payments com base no ID informado;
  - /payment /all => retorna todos os payments cadastrados na base de dados;
  - /payment /{id} => retorna todos os dados do payment que possui o ID informado;
* Verbo Put HTTP:
  - /customer/{id} => caminho para atualizar todos os dados do customer que possui o ID informado;
  - /payment/{id} => caminho para atualizar todos os dados do customer que possui o ID informado;
* Verbo Delete HTTP:
  - /customer/{id} => caminho para excluir os dados do customer que possui o ID informado;
  - /payment/{id} => caminho para excluir os dados do payment que possui o ID informado;



## Comando para executar os Testes

```
./vendor/bin/phpunit
```



## Comandos para executar após git clone

```
#Instalar a dependências do projeto
composer install

#Criar as tabelas no BD
php artisan migrate

```



## Estrutura aguardada de Json

* Customer:

```
{
 “name”: string|length:100,
 “dtNasc”: string|length:10,
 “email”: string|length:100
}

```

* Payment:

```
{
 “customer_id”: int,
 “dtPayment”: string|length:10,
 “payment ”: float|length:10
}

```

