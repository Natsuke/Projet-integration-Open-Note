
PROJECT = open-note

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
	docker run -d --name $(PROJECT) --link mysql:mysql -p 3000:80 $(PROJECT)

log:
	docker logs $(PROJECT)
