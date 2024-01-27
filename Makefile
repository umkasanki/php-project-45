# Makefile
install:
	composer install
	chmod +x bin/brain-games

brain-games:
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin