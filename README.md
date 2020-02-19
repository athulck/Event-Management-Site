# Event-Management-Site
This is a database based project (CS-333). We created a website on Codeignitor and Bootstrap which is used to manage various college events.

##Database Setup

Start the mysql service and run the program

```
$ sudo service mysql start
$ sudo mysql
```

In the CLI, execute
```
> SELECT * FROM mysql.user;
```
Configure 'application/config/database.php' with the result from the query.

[Stack Overflow](https://stackoverflow.com/questions/4371/how-do-i-retrieve-my-mysql-username-and-password) - How do I retrieve my MySQL username and password

Create a database in MySQL and name it 'EventGuy'

```
> CREATE DATABASE EventGuy;
> USE EventGuy;
```

Now, create the tables according to the file 'DB_tables' in the 'EventGuy' database.


##Server Requirements

PHP version 5.6 or newer is recommended.
CodeIgniter 3.x
MySQL 5.6.30-1 or higher
Apache Server

If you are using apache server (apache2 service), make sure that you override .htaccess files in Apache configuration. Follow the steps to do that:
```
sudo nano /etc/apache2/apache2.conf
```

Change
```
<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride None
        Require all granted
</Directory>
```
to
```
<Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
```

Install Php 7.0

```
$ sudo apt-get install python-software-properties -y && sudo add-apt-repository ppa:ondrej/php-7.0
$ sudo apt-get update
$ sudo apt-get install php7.0
```
