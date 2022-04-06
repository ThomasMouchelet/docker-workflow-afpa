.PHONY: up
up: ## up and build containers
	docker-compose up -d --build

.PHONY: install
install: ## install composer dependencies
	docker exec php composer install

.PHONY: migration
migration: ## execute migration
	docker exec php php bin/console d:m:m -q

.PHONY: fixtures
fixtures: ## execute fixtures
	docker exec php php bin/console d:f:l -q

.PHONY: init
init: up install migration fixtures