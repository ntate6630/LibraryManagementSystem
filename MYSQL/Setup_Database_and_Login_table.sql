create database books;
use books;
create table profile(
    username varchar(30) not null,
    password varchar(30) not null,
    loggedin tinyint(1)
);
    
insert into books.profile (
	username,
    password,
    loggedin)
    values (
    'admin',
    '1234',
    '0'
);
    
create table users_info( 
	user_id int auto_increment,
	full_name varchar(30),
    student_number varchar(30),
    primary key(user_id),
    unique(student_number)
);

create table book_info(
	book_id int auto_increment unique key,
	isbn varchar(30),
    title varchar(30),
    author varchar(30),
    edition varchar(30),
    publication varchar(30),
    unique key(book_id),
    unique(isbn)
);

create table borrowed_books(
	user_id int not null,
	book_id int not null,
    ts timestamp default current_timestamp on update current_timestamp,
	foreign key(user_id) references users_info(user_id),
    foreign key(book_id) references book_info(book_id),
    unique(book_id)
);