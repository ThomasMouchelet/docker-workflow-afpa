de := docker exec php
sy := $(de) php bin/console

.PHONY: up
up: ## up and build containers
	docker-compose up -d --build

.PHONY: install
install: ## install composer dependencies
	$(de) composer install

.PHONY: migration
migration: ## execute migration
	$(sy) d:m:m -q

.PHONY: fixtures
fixtures: ## execute fixtures
	$(sy) d:f:l -q

.PHONY: start
start: ## start react app
	cd app && npm i && npm start

.PHONY: clear
clear: 
	$(sy) cache:clear

.PHONY: init
init: up install migration fixtures start