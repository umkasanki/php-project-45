# Makefile
install:
	composer install
	chmod +x bin/brain-games
	chmod +x bin/brain-even

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin