# Simple_Questions_App
Simple_Question_App simplifies the creation of multiple choice customizable questions sheet written in HTML5, PHP5, CSS3 and MariaDB.  
* Copy app files under the www folder of your php server 
* Database configuration:
```
'DB_SERVER', 'localhost'
'DB_USERNAME', 'root'
'DB_PASSWORD', 'root'
'DB_DATABASE', 'questionApp'
```
* Database and table creation:
```
create database questionApp;
create table login(id integer primary key auto_increment,username varchar(10), passwd varchar(10), root integer);
create table module (id integer primary key, module varchar(50), material varchar(50));
create table material(id integer auto_increment primary key, material varchar(50), id_module integer, FOREIGN KEY (id_module) REFERENCES module(id));
create table question(id integer auto_increment primary key, question varchar(200), id_material integer, FOREIGN KEY (id_material) REFERENCES material(id));
create table choice(id integer auto_increment primary key, choice varchar(11), id_question integer, foreign key (id_question) references question(id),answer integer);
create table childQuestions(id integer primary key, question varchar(200));
```
* Load database with your data and enjoy :D
