# Makefile
install:
	composer install
	chmod +x bin/brain-games
	chmod +x bin/brain-even
	chmod +x bin/brain-calc

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc