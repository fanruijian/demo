CREATE TABLE IF NOT EXISTS `ly_access` (
  `role_id` smallint(6) unsigned NOT NULL COMMENT '角色ID',
  `node_id` smallint(6) unsigned NOT NULL COMMENT '节点ID',
  `level` tinyint(3) NOT NULL COMMENT '节点类型',
  `module` varchar(50) DEFAULT NULL,
  KEY `role_id` (`role_id`),
  KEY `node_id` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `ly_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '节点名称',
  `title` varchar(50) DEFAULT NULL COMMENT '节点中文名',
  `status` tinyint(1) DEFAULT 1 COMMENT '启用状态 1启用 2禁用',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注信息',
  `sort` smallint(6) unsigned DEFAULT NULL COMMENT '排序值',
  `pid` smallint(6) unsigned NOT NULL DEFAULT 0 COMMENT '父节点ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '节点类型：1:表示应用（模块）；2:表示控制器；3：表示方法',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `ly_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(20) NOT NULL COMMENT '角色名称',
  `pid` smallint(6) DEFAULT 0 COMMENT '父角色对应ID',
  `status` tinyint(1) unsigned DEFAULT 1 COMMENT '启用状态 1启用 2禁用',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注信息',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
 
CREATE TABLE IF NOT EXISTS `ly_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL COMMENT '角色ID',
  `user_id` char(32) DEFAULT NULL COMMENT '用户ID',
  KEY `role_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `ly_user` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` varchar(16) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `email` varchar(50) NOT NULL COMMENT '用户邮箱',
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `logintime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '最近一次登录时间',
  `loginip` varchar(20) NOT NULL COMMENT '最近登录的IP地址',
  `status` tinyint NOT NULL DEFAULT 1 COMMENT '用户状态 1启用 2禁用',
  `remark` varchar(255) COMMENT '备注信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;