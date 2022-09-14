# SDK_BANCO_ITAU

SDK para usar os recursos da API do banco do Itaú no projeto E-cidade

## Getting started

Adicione o repositório da DBSeller no seu composer.json

```
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@bitbucket.org:vendor/my-private-repo.git"
        }
    ]
```

Depois rode o comando

```
composer require dbseller/sdk_banco_itau
```

## Requisitos

- php:               ">5.6" "<7.4"
- ext-curl:          "*",
- ext-json:          "*",
- ext-mbstring:      "*",
- guzzlehttp/guzzle: "~6.5.5"
## License
Proprietary DBSeller
