
start:
	echo 'Stop and remove older containers'
	docker stop open-note || exit 0
	docker rm open-note || exit 0
	echo 'Start mysql container if not started'
	docker start mysql || exit 0
	echo 'Start building app container'
	docker build -t open-note .
	echo 'Start applicaiton'
	docker run -d --name open-note --link mysql:mysql -p 3000:80 open-note
	echo 'Application running at http://192.168.99.100:3000'
