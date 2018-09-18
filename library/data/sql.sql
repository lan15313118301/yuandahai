create database dannuo;

use dannuo;

set names gbk;

--新闻表
drop table if exists dn_news;
create table dn_news(
n_id int auto_increment primary key,
n_pai int(3),
n_title varchar(100) not null,
n_keys varchar(20),
n_picture varchar(40),
n_cate enum('公司新闻','行业新闻') default '公司新闻',
n_content text,
n_click int not null,
n_time int(11) not null,
n_upttime int(11)
);
--产品种类表
drop table if exists dn_cate;
create table dn_cate(
c_id int auto_increment primary key,
c_name varchar(30) not null,
c_pai int(4),
c_cate enum('详细页','列表页'),
c_time int(11) not null,
c_upttime int(11)
);
--产品表
drop table if exists dn_product;
create table dn_product(
p_id int auto_increment primary key,
p_pai int(4),
p_name varchar(30) not null,
p_keys varchar(20),
p_picture varchar(40),
p_intro varchar(100),
p_content text,
p_click int(9) default 0,
c_id int not null,
foreign key (c_id) references dn_cate (c_id),
p_cate enum('机械部分','电器部分') default '机械部分',
p_time int(11) not null,
p_upttime int(11)
);
--产品文章表
drop table if exists dn_pronews;
create table dn_pronews(
p_id int auto_increment primary key,
p_pai int(4),
p_keys varchar(20),
p_content text,
p_click int(9) default 0,
c_id int not null,
foreign key (c_id) references dn_cate (c_id),
p_time int(11) not null,
p_upttime int(11)
);
--公司信息表
drop table if exists dn_company;
create table dn_company(
cm_id int auto_increment primary key,
cm_pai int(4),
cm_name varchar(30) not null,
cm_keys varchar(20),
cm_content text,
cm_time int(11) not null,
cm_upttime int(11)
);
--首页大图
drop table if exists dn_banner;
create table dn_banner(
b_id int auto_increment primary key,
b_pai int(4),
b_picture varchar(40),
b_time int(11) not null,
b_upttime int(11)
);
--产品概述
drop table if exists dn_gaishu;
create table dn_gaishu(
g_id int auto_increment primary key,
g_name varchar(30) not null, 
g_pai int(4),
g_picture varchar(40),
g_content text,
g_time int(11) not null,
g_upttime int(11)
);
--合作企业
drop table if exists dn_cooperation;
create table dn_cooperation(
co_id int auto_increment primary key,
co_name varchar(30) not null, 
co_pai int(4),
co_picture varchar(40),
co_content text,
co_time int(11) not null,
co_upttime int(11)
);
--招聘表
drop table if exists dn_job;
create table dn_job(
j_id int auto_increment primary key,
j_pai int(4),
j_name varchar(30) not null,
j_keys varchar(20),
j_content text,
j_time int(11) not null,
j_upttime int(11)
);
--联系我们表
drop table if exists dn_lianxi;
create table dn_lianxi(
l_id int auto_increment primary key,
l_name varchar(50) not null,
l_hotline varchar(20) not null,
l_tel1 varchar(20) not null,
l_tel2 varchar(20) not null,
l_email varchar(50) not null,
l_fax varchar(20) not null,
l_qq int(13) not null,
l_addr varchar(100) not null,
l_web varchar(50) not null,
l_zhaopin varchar(100) not null,
l_content text,
l_erweima char(40)
);
--alter table dn_lianxi add l_zhaopin varchar(100) not null;
--其他信息表
drop table if exists dn_qita;
create table dn_qita(
q_id int auto_increment primary key,
q_name varchar(10) not null,
q_keys varchar(100),
q_content text,
q_time int(11) not null,
q_upttime int(11)
);
--留言表
drop table if exists dn_message;
create table dn_message(
id int auto_increment primary key,
state enum('0','1') default '1',
name varchar(10) not null,
dianhua varchar(20) not null,
content text,
m_time int(11) not null
);


--登录表
drop table if exists dn_admin;
create table dn_admin(
id int auto_increment primary key,
username char(32) not null,
password char(32) not null,
picture char(40),
role varchar(20)
);
INSERT INTO `dn_admin` VALUES (1,'21232f297a57a5a743894a0e4a801fc3','f2ea5c5bf51233cf841abf47fca29cbb','4bc7a93ab4f41718094fd7d0b72fa6c7.jpg','超级管理员');



