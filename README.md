docker-compose down
docker-compose up -d --build

### Connect to container
docker exec -it <container name> /bin/sh


mysql --host=localhost --user=api --password=api api


### Starting project
```bash
docker exec php composer install
docker exec php php bin/console d:m:m
docker exec php php bin/console d:f:l
```