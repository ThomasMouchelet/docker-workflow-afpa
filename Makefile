de := docker exec php
sy := php bin/console

.PHONY: up
up: ## up and build containers
	docker-compose up -d --build

.PHONY: install
install: ## install composer dependencies
	$(de) composer install

.PHONY: migration
migration: ## execute migration
	$(de) $(sy) d:m:m -q

.PHONY: fixtures
fixtures: ## execute fixtures
	$(de) $(sy) d:f:l -q

.PHONY: start
start: ## start react app
	cd app && npm i && npm start

.PHONY: init
init: up install migration fixtures start