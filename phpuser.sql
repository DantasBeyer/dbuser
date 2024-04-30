drop database if exists phpuser;
create database phpuser;
use phpuser;


create table User
(
    id    int primary key auto_increment,
    fname varchar(255),
    lname varchar(255),
    email varchar(255)
);


INSERT INTO User (fname, lname, email)
value ('john', 'doe', 'john@doe.de'),
       ('bill', 'bob', 'bob@bill.de'),
       ('steve', 'jobs', 'steve@jobs.de');



