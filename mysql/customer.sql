create table customer (
	id int not null auto_increment,
	name char(30) not null,
	phone char(30) not null,
	address char(100) not null,
	mileage int,
	primary key(id)
);