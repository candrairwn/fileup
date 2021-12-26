use penjualan_dua;

--@block
use penjualan_dua;
create table buku(
    isbn varchar(15),
    judul char(20),
    pengarang char (30),
    harga varchar (15),
    stok char(10),
    primary key(isbn)
);
--@block
desc buku;

--@block
insert into buku values
('11231', 'Matematika Diksrit', 'Hanafi', '60000', '25'),
('11232', 'Pintar Java', 'Median', '50000', '20'),
('11233', 'Struktur Data', 'Andrianto', '70000', '15'),
('11234', 'Algoritma', 'SintaSari', '45000', '16'),
('11235', 'Kewarganegaraan', 'Ramdani', '64000', '22'),
('11236', 'Basisdata', 'Suginanto', '46000', '33'),
('11237', 'Sistem Berkas', 'Suginanto', '60000', '20'),
('11238', 'Web PHP', 'Median', '50000', '25');

--@block
select * from buku;

--@block
select distinct pengarang from buku;

--@block
select distinct sum(harga) from buku;

--@block
select abs(-90);
select acos(-0.90);
select atan(10);

--@BLOCK
select count(*) from buku;

--@block
select count(*) from buku where harga=60000;

--@BLOCK
select min(harga) from buku;
select max(harga) from buku;
select avg(harga) from buku;

--@BLOCK
select  distinct sum(harga*stok) from buku;
