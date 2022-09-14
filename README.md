# DBSeller - SDK_BANCO_ITAU

Conjuntos de ferramentas para desenvolvimento da integração da
API do banco Itaú com o sistema E-cidade.

## Requisitos

- php ">=5.6", "<=7.4"
- curl
- json
- mbstring
- guzzle ~6.5.5

## Instalar

A instalação é super fácil através do (Composer)[https://getcomposer.org/].

```
composer require dbseller/sdk_banco_itau
```
## Exemplo de uso

Antes de fazer uma requisição para a API é necessário configurar o host e 
fazer a autenticação na api, para obter acesso aos recursos da mesma.

E para fazer isso é necessário configurar a classe de configuração.
```php
use DBSeller\SdkBancoItau\Configuration;

$config = Configuration::getDefaultConfiguration();

$config->setModoProducao(false);         // Define o mode de uso
$config->setHost('');                    // Host da API
$config->setUrlOAuth('');                // Url de autenticação
$config->setApiKey('client_id', '');     // Cliente ID
$config->setApiKey('client_secret', ''); // Cliente Secret
```

Esse pacote foi construído para usar o GuzzleHttp como cliente HTTP e também é 
necessário configurar ele na nossa classes de configuração

```php

use GuzzleHttp\Client;

$clientHTTP = new Client();
```

Após efetuar a criação e configuração da nossa classe de configurações é necessário 
efetuar a autenticação na API.

```php
use DBSeller\SdkBancoItau\API\OauthApi;

$clienteOauth     = new OauthApi($clientHTTP, $config);
$accessTokenOauth = $clienteOauth->gerarAccessToken();

$config->setAccessToken($accessTokenOauth);
```

Com essa etapa finalizada já é possível efetuar requisições para a API utilizados as 
classes disponíveis no

## License
Proprietary DBSeller
