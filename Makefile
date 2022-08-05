enter-php:
	docker-compose exec php /bin/bash

enter-mariadb:
	docker-compose exec mariadb /bin/bash

enter-postgres:
	docker-compose exec postgres /bin/bash

phpunit:
	docker-compose exec php ./vendor/bin/phpunit
