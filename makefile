script-std:
	php src/scriptStd.php
exe-std:
	./bin/exeStd
validate:
	composer validate
linter:
	phpcs --standard=PSR12 bin src tests
phpunit:
	composer exec --verbose phpunit -- tests

