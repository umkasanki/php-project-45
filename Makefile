# Makefile
install:
	composer install
	chmod +x bin/brain-games

brain-games:
	./bin/brain-games

validate:
	composer validate