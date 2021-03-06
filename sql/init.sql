
DROP TABLE IF EXISTS `wechat`;
CREATE TABLE `wechat` (
    id int(11) not null auto_increment,
	appid varchar(30) not null,
	appsecret varchar(50) not null,
	token varchar(20) not null,
	access_token varchar(100),
	ticket varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `amdin_user`;
CREATE TABLE `admin_user` (
    id int(11) not null auto_increment,
    name varchar(20) not null,
    password varchar(36) not null,
    phone varchar(11) not null,
    comment text(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `bind_wechat`;
CREATE TABLE `bind_wechat` (
    id int(11) not null auto_increment,
    user_id int(11) not null,
    wechat_id int(11) not null
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
    id int(11) not null auto_increment,
    pid int(11) not null,
    level tinyint not null,
    name varchar(20) not null,
    title varchar(20),
    comment text(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `docter`;
CREATE TABLE `docter` (
    id int(11) not null auto_increment,
    project_id int(11) not null,
    name varchar(20) not null,
    password varchar(36) not null,
    phone varchar(11) not null,
    lat varchar(30) comment '纬度',
    lng varchar(30) comment '经度',
    service_range varchar(50),
    age int not null, 
    comment text(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    id int(11) not null auto_increment,
    name varchar(20) not null,
    password varchar(36) not null,
    phone varchar(11) not null,
    lat varchar(30) comment '纬度',
    lng varchar(30) comment '经度',
    comment text(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
    id int(11) not null auto_increment,
    order_no varchar(20) not null,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


























