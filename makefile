install:
	composer install

script-std:
	php src/scriptStd.php

bin-std:
	./bin/binStd

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin tests

phpunit:
	composer exec --verbose phpunit -- tests

phpunit-coverage:
	composer exec --verbose phpunit -- tests --coverage-text

phpunit-coverage-html:
	composer exec phpunit -- tests --coverage-html coverage

