







sudo docker-compose -f "docker-compose.yml" up -d --build

sudo docker exec -it mysql:5.7 mysql -u root -pexample_password

use wordpress;

UPDATE wp_posts
SET guid = REPLACE(guid, 'http://localhost/olivas-digital', 'SUBSTITUIR_POR_IP:8000')
WHERE guid LIKE '%http://localhost/olivas-digital%';

UPDATE wp_options
SET option_value = REPLACE(option_value, 'http://localhost/olivas-digital', 'SUBSTITUIR_POR_IP:8000')
WHERE option_value LIKE '%http://localhost/olivas-digital%';

