This project involves the creation of a robust web application. It makes use of 4 dockerised containers. They are
	a) A centos/httpd load balancer
	b) Two php:7.0 apache web servers
	c) A mysql database server.
	
Make sure you have all the directories and files saved in the same structure as in this repository. The outermost Dockerfile is used to setup and configure the webservers. The Dockerfile within the "lb" directory is used to configure the centos/httpd load balancer. 

In order to change the php script, go to the "web" directory and change the "index.php" file as you wish. Note: mysqli is installed and enabled. 

In order to change the contents of the database (named "cloud"), go the the "dbdata" directory and change the contents of the "basic.sql" sql file. As of right now, the sql file just adds a few simple entries into a table called "basic". 

The two php-apache web server containers listen on port 80 (on the container). The ports on the host that connect to the container ports are randomly chosen. 

The load balancing container listens on port 80 on the container and port 8080 on the host name. So in order to access the web servers' contents, you need to enter "http://localhost:8080/index.php" (or replace localhost with your current LAN ip address). 

The database server listens on port 3306  on the container. The port on the host that connects to this container port is randomly chosen. 

In order to use the docker application, make sure you have the docker daemon turned on. This can be done using "systemctl start docker". To run the docker-compose file, go to the directory where the "docker-compose.yml" file is present and hit "docker-compose up --build"

In order to check the status of the load balancer, go to "http://localhost:8080/balancer-manager. The web page shows a list of all the web servers and how many requests each web server has received up until the current time.

For more information about this project, you can reach me at saki8093@colorado.edu or samkishan@icloud.com



Latest modifications done on 15/04/2018
