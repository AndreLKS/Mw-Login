[![N|Solid](https://sancon.com.br/wp-content/uploads/2021/06/Logo-Escuro.svg)](htto://www.sancon.com.br)



## Entrega Pedido MW
- Projeto Desenvolvido para o cliente MW com o objetivo de auxiliar um melhor controle de estoque

## Instalação

 - Instalar PHP 8.2.8
 - Instalar Symfony 5.5.7
 - Instalar Composer 2.5.8

## Configuração do Ambiente

- Clone o ambiente na pasta desejada
- Para uma melhor configuração do ambiente recomendo que crie um projeto com o symfony (Realize isso em uma pasta diferente da do projeto clonado)
  composer create-project symfony/skeleton entregapedido-mw-backend
- Assim terá uma pasta Vendor e uma configuração do symfony de acordo com o seu ambiente,
- Copie as pastas geradas e cole sem substituir na pasta clonada do git. 

- Posteriormente, entre na pasta e instale as seguintes dependencias do composer
 (composer require)
- EventListener
 ```composer require request-listener```
- JWT (WebService Authentication)
 ```composer require lexik/jwt-authentication-bundle```
- Doctrine Annotations
 ```composer require doctrine/annotations```
- ORM (Gerenciamento de Objetos Relacionais)
 ```composer require symfony/orm-pack```

- Abra um Terminal na pasta que a aplicação foi instalada
- Suba o backend com o comando: ```php -S 0.0.0.0:(porta desejada) -t public```
- Para acessar o backend deveremos passar o ip do localhost:porta ou somente localhost:porta

- Ao final do arquivo temos um arquvio .env, onde deverá ser adicionado as seguintes configurações de variaveis:

- #(As configurações do banco de dados podem mudar de acordo com o banco de dados utilizado)
- #Exemplo Para SqlServer
- DATABASE_DRIVER=driver do banco
- DATABASE_URL="driver do banco://usuario:senha@servidor:1433/db"
- DATABASE_CHARSET="UTF-8"
- NOTE QUE PARA OUTROS BANCOS O PROPRIO SYMFONY JA MONTA EXEMPLOS NO ARQUIVO .ENV
- ### < lexik/jwt-authentication-bundle ###
- WEBSERVICE_URL="http://ip do servidor do webservice:porta"
- USUARIO_WS="Usuario de acesso ao WebService"
- SENHA_WS="Senha do Usuario com acesso ao WebService"

## IMPORTANTE

- A Aplicação utiliza comunicação inteiramente por WebService, desde a validação para Login até o preenchimento da grid.
- Portanto, necessita-se obrigatoriamente que os Webservices estejam acessiveis e configurados.

