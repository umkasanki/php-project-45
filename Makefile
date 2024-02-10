# Makefile
install:
	composer install
	chmod +x bin/brain-games
	chmod +x bin/brain-even
	chmod +x bin/brain-calc
	chmod +x bin/brain-gcd
	chmod +x bin/brain-progression
	chmod +x bin/brain-prime

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

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime