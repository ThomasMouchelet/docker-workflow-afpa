docker-compose down
docker-compose up -d --build

### Connect to container
docker exec -it <container name> /bin/sh


mysql --host=localhost --user=api --password=api api