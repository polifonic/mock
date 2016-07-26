build: build_admin build_wiki build_www

build_admin:
	docker build -t polifonic/backend:mock --build-arg build='mock' admin

build_wiki:
	docker build -t polifonic/wiki:mock -f wiki/Dockerfile --build-arg build='mock' wiki

build_www:
	docker build -t polifonic/www:mock -f www/Dockerfile --build-arg build='mock' www

run:
	docker-compose up -d

stop:
	docker-compose down