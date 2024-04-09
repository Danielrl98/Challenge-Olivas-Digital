## Instalação

Você precisará ter o GIT instalado na sua máquina, e, após isso, clonar este repositório:

```sh
   git clone https://github.com/Danielrl98/Challenge-Olivas-Digital.git
```

```sh
   cd Challenge-Olivas-Digital
```

Você precisará ter o Docker e Docker compose na sua máquina, após isso, executar o comando na pasta raiz do projeto

```sh
   sudo docker-compose -f "docker-compose.yml" up -d --build
```

Arquivo de banco de dados está configurado para importar automáticamente, por isso será necessário a mudança dos links permanentes

```sh
   sudo docker exec -it challenge-olivas-digital-db-1 mysql -u root -pexample_password
```

Após acessar o banco de dados, executar as seguintes instruções:

```mysql
   use wordpress;
```

adicione o IP público da sua instância na variável <SUBSTITUIR_POR_IP>

```mysql
   UPDATE wp_posts
    SET guid = REPLACE(guid, 'http://localhost/olivas-digital', '<SUBSTITUIR_POR_IP>:8000/')
    WHERE guid LIKE '%http://localhost/olivas-digital%';

```
adicione o IP público da sua instância na variável <SUBSTITUIR_POR_IP>

```mysql
   UPDATE wp_options
    SET option_value = REPLACE(option_value, 'http://localhost/olivas-digital', '<SUBSTITUIR_POR_IP>:8000/')
    WHERE option_value LIKE '%http://localhost/olivas-digital%';
```

