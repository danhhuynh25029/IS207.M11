create database baoduong;
use baoduong;
create table KHACHHANG(
	MAKH int not null auto_increment,
    HOTENKH varchar(255) not null,
    DIACHI varchar(255) not null,
    DIENTHOAI int not null,
    primary key(MAKH)
);
create table XE(
	SOXE int not null auto_increment,
    HANGXE varchar(255) not null,
    DIACHI varchar(255) not null,
    NAMSX varchar(255) not null,
    MAKH int not null,
    primary key(SOXE),
    foreign key(MAKH) references KHACHHANG(MAKH)
);
create table BAODUONG(
	MABD int not null auto_increment,
    NGAYNHAN varchar(255) not null,
	NGAYTRA varchar(255) not null,
    SOKM int not null,
    NOIDUNG text not null,
    SOXE int not null,
    THANHTIEN int not null,
    primary key(MABD),
    foreign key(SOXE) references XE(SOXE)
);
create table CONGVIEC(
	MACV int auto_increment not null,
    TENCV varchar(255) not null,
    DONGIA int not null,
    primary key(MACV)
);
create table CT_BD(
	MABD int not null,
    MACV int not null,
    foreign key(MABD) references BAODUONG(MABD),
    foreign key(MACV) references CONGVIEC(MACV)
);