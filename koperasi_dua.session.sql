use koperasi_dua;
create table member(
    Id_member varchar(15),
    Nama char(20),
    Alamat char(20),
    primary key(Id_member)
);
--@block
insert into member
values ('1111', 'Anang', 'Cipondoh'),
    ('1112', 'Budi', 'Ciledug'),
    ('1113', 'Cici', 'Cinangka'),
    ('1114', 'Darma', 'Cikupa'),
    ('1115', 'Endang', 'Cipondoh');
--@block
create table pinjam(
    Nota varchar(15),
    Id_member varchar(20),
    Tanggal date,
    Jumlah char(10),
    primary key(Nota)
);
--@block
insert into pinjam
values ('A100', '1111', '2014-02-04', '500000'),
    ('B100', '1113', '2014-02-06', '700000'),
    ('C100', '1112', '2014-02-07', '400000'),
    ('D100', '1114', '2014-02-09', '900000');
--@block
select *
from member
    inner join pinjam using(id_member);
--@block
