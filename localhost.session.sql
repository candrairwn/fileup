--@block
create database uts_CandraIrawan_191011402920;
use uts_CandraIrawan_191011402920;
--@block
create table religion(
    religion_id int(20),
    name varchar(10),
    primary key (religion_id)
);
create table employee(
    employee_id int(20),
    name varchar(100),
    religion_id int(20),
    primary key(employee_id),
    foreign key(religion_id) references religion(religion_id)
);
insert into religion
values (1, 'Budha'),
    (2, 'Hindu'),
    (3, 'Islam'),
    (4, 'Katolik'),
    (5, 'Kristen');
insert into employee (employee_id, name, religion_id)
values (1, 'Jacob', 1),
    (2, 'Billy', 2),
    (3, 'Steve', 1),
    (4, 'Wanda', 1),
    (5, 'Lisa', 5);
--@block
create table address(
    id int(10),
    employee_id int(20),
    seq int(10),
    Address text,
    primary key (id),
    foreign key (employee_id) references employee(employee_id)
);
--@block
create table payroll(
    id int(10),
    employee_id int(20),
    type varchar(20),
    amount int(30),
    primary key (id),
    foreign key (employee_id) references employee(employee_id)
);
--@block
insert into address(id, employee_id, seq, Address)
values (1, 1, 3, 'Gading Serpong, Tangerang'),
    (2, 1, 2, 'Tanjung Duren, Jakarta Barat'),
    (3, 1, 1, 'Pluit, Jakarta Utara'),
    (4, 4, 3, 'Karawaci, Tangerang'),
    (5, 4, 2, 'BSD, Tangerang');
--@block
insert into payroll(id, employee_id, type, amount)
values (1, 2, 'GAJI', 1000000),
    (2, 2, 'LEMBUR', 500000),
    (3, 3, 'GAJI', 1000000),
    (4, 3, 'THR', 300000),
    (5, 3, 'THR', 1000000);

--@block
select distinct employee_id from payroll;


