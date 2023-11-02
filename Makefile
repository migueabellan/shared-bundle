UID=$(shell id -u)
GID=$(shell id -g)

build:
	docker-compose build && \
	docker-compose pull

start:
	docker-compose up -d --force-recreate

stop:
	docker-compose down -v

composer/install:
	docker-compose exec php composer install

lint:
	# docker-compose exec php composer cscheck
	docker-compose exec php composer csfix
	docker-compose exec php composer phpstan

test:
	docker-compose exec php ./vendor/bin/phpunit --testdox tests/
