## Antes de Subir o Docker
- Altere o arquivo website/url.api.php com o IP do servidor que irá rodar a aplicação.

## Construir o Docker
```bash
$ docker compose build
```

## Iniciar os Serviços
```bash
$ docker compose up -d
```

## Acessar os Serviços
- API: http://IP_DO_SERVIDOR:9001/api/docs

- Web: http://IP_DO_SERVIDOR:9002/

