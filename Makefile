
PROJECT = open-note
MYSQL = mysql

start:
	make clean
	make build
	make run

clean:
	docker stop $(PROJECT) || exit 0
	docker rm $(PROJECT) || exit 0

build:
	docker build -t $(PROJECT) .

run:
	docker run -d --name $(MYSQL) -p 3306:3306 $(MYSQL) || docker start $(MYSQL)
	docker run -d --name $(PROJECT) --link $(MYSQL):$(MYSQL) -p 3000:80 $(PROJECT) || docker start $(PROJECT)

log:
	docker logs $(PROJECT)
