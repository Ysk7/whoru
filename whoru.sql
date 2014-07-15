create database whoru;

grant all privileges on whoru.* to wruroot@localhost identified by 'wjdqhqhdks'

create table members(
    uid int auto_increment primary key,
    email varchar(50) not null,
    passwd varchar(100) not null,
    name varchar(20) not null,
    nickname varchar(20) not null,
    dept varchar(50) not null,
    userip varchar(20) not null,
    reg_date date not null
);