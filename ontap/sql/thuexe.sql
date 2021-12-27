create database thuexe;
use thuexe;
create table khachhang(
	MAKH int not null,
    HOTEN varchar(255) not null,
    SDT int not null,
    primary key(MAKH)
);
create table hangxe(
	MAHANG int not null,
    TENHANG varchar(255) not null,
    primary key(MAHANG)
);
create table xe(
	MAXE int not null,
    TENXE varchar(255) not null,
    MAUXE varchar(255) not null,
    SOCHO int not null,
    MAHANG int not null,
    primary key(MAXE),
    foreign key(MAHANG) references hangxe(MAHANG)
);
alter table hopdong  modify column NGAYLAP datetime default current_timestamp();
create table hopdong(
	MAHD int not null ,
    TENHD varchar(255) not null,
    NGAYLAP datetime default current_timestamp(),
    MAKH int not null,
    TONGTIEN int not null,
    primary key(MAHD),
    foreign key(MAKH) references khachhang(MAKH)
);
create table cthd(
	MAHD int not null,
    MAXE int not null,
    foreign key(MAHD) references hopdong(MAHD),
    foreign key(MAXE) references xe(MAXE)
);
-- them du lieu vao table hang xe
insert into hangxe(MAHANG,TENHANG) values("1","BWM");
insert into hangxe(MAHANG,TENHANG) values("2","HONDA");

-- them du lieu vao table xe
insert into xe values("111","AE86","Trang","4","2");
insert into xe values("121","Vios","Den","2","1");