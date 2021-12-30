drop database baoduong;
create database baoduong;
use baoduong;
create table KHACHHANG(
	MAKH int not null,
    HOTENKH varchar(255) not null,
    DIACHI varchar(255) not null,
    DIENTHOAI int not null,
    primary key(MAKH)
);
create table XE(
	SOXE varchar(255) not null,
    HANGXE varchar(255) not null,
    NAMSX varchar(255) not null,
    MAKH int not null,
    primary key(SOXE),
    foreign key(MAKH) references KHACHHANG(MAKH)
);
drop table BAODUONG;
create table BAODUONG(
	MABD varchar(255) not null,
    NGAYNHAN varchar(255)  not null,
	NGAYTRA varchar(255) null,
    SOKM int not null,
    NOIDUNG text not null,
    SOXE varchar(255) not null,
    THANHTIEN int  null,
    primary key(MABD),
    foreign key(SOXE) references XE(SOXE)
);
create table CONGVIEC(
	MACV varchar(255) not null,
    TENCV varchar(255) not null,
    DONGIA int not null,
    primary key(MACV)
);
create table CT_BD(
	MABD varchar(255) not null,
    MACV varchar(255) not null,
    foreign key(MABD) references BAODUONG(MABD),
    foreign key(MACV) references CONGVIEC(MACV)
);
insert into CONGVIEC values("123","Thay nhơt",120000);
insert into CT_BD values("BD001","123");