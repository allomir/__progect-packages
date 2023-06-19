# project
script-std:
	php src/scriptStd.php

bin-std:
	./bin/binStd

validate:
	composer validate

# packajes
install:
	composer install

# packajes. Тесты
lint:
	composer --verbose exec phpcs -- --standard=PSR12 src bin tests

tests-standard:
	php tests/tests.php

phpunit:
	composer --verbose exec phpunit -- tests

phpunit-coverage:
	composer --verbose exec phpunit -- tests --coverage-text

phpunit-coverage-html:
	composer --verbose exec phpunit -- tests --coverage-html coverage


