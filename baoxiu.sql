# Host: localhost  (Version: 5.5.47)
# Date: 2017-06-23 08:52:41
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "repairs"
#

DROP TABLE IF EXISTS `repairs`;
CREATE TABLE `repairs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '类型',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `describe` text NOT NULL COMMENT '问题描述',
  `place` varchar(255) NOT NULL DEFAULT '' COMMENT '地点',
  `photo` varchar(255) NOT NULL DEFAULT 'photo.jpg' COMMENT '报修照片',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '报修人',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '报修人邮箱',
  `time` varchar(64) NOT NULL DEFAULT '' COMMENT '报修时间',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态 -1：失败，0：未处理，1:完成',
  `engineer` varchar(255) NOT NULL DEFAULT '' COMMENT '维修人员',
  `comment` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `star` tinyint(3) NOT NULL DEFAULT '0' COMMENT '评分1-5',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "repairs"
#

/*!40000 ALTER TABLE `repairs` DISABLE KEYS */;
INSERT INTO `repairs` VALUES (1,1,'电脑','电脑坏了','5420教室','photo.jpg','','','1',1,'1','1',1),(2,3,'123','123','123','photo.jpg','123','123','',0,'','',0),(3,3,'123','123','123','photo.jpg','123','123','',0,'','',0),(4,2,'方法','方法','发','photo.jpg','发','','',0,'','',0),(5,2,'方法','方法','发','photo.jpg','发','','',0,'','',0),(6,2,'方法','方法','发','photo.jpg','发','','',0,'','',0),(7,2,'方法','方法','发','photo.jpg','发','','',0,'','',0),(8,2,'方法ewrq','方法','发','photo.jpg','发','','',0,'','',0),(9,2,'方法ewrq','方法','发','photo.jpg','发','','',0,'','',0),(10,2,'Test','test','hah','photo.jpg','dfsa','858134843@qq.com','',0,'','',0),(11,2,'啊发生大幅杀跌','安防','阿凡达斯','photo.jpg','阿凡达斯','','',0,'','',0),(12,2,'啊啊分','安防','安防','photo.jpg','阿道夫','','',1,'123','123',0),(13,2,'阿的说法','阿斯蒂芬','阿道夫','photo.jpg','阿凡达','','',0,'','',0),(14,2,'阿的说法','阿斯蒂芬','阿道夫','photo.jpg','阿凡达','','',0,'','',0),(15,2,' 其二','爱如','瑞琪儿','photo.jpg','微软','','',0,'','',0),(16,2,'gagaga','asfd','afsd','photo.jpg','afsd','','',0,'','',0),(17,2,'afd','afds','afds','photo.jpg','sadf','','',0,'','',0),(18,2,'fadsfadsss','fads','afds','photo.jpg','dfas','','',0,'','',0);
/*!40000 ALTER TABLE `repairs` ENABLE KEYS */;

#
# Structure for table "type"
#

DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(64) NOT NULL DEFAULT '' COMMENT '类型',
  `describe` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='报修类型';

#
# Data for table "type"
#

/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (2,'宿舍',''),(3,'教学楼',''),(4,'校园设施',''),(5,'电脑',''),(6,'电器','');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '姓名',
  `phone` varchar(32) NOT NULL DEFAULT '' COMMENT '手机',
  `type` varchar(11) NOT NULL DEFAULT '' COMMENT '负责的类型，英文逗号分割',
  `power` tinyint(3) NOT NULL DEFAULT '0' COMMENT '权限，0：未审核，1:维修人员，2：管理员',
  `comment` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `authKey` varchar(255) NOT NULL DEFAULT '',
  `accessToken` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'123','123','程宇','17864127312','',2,'','',''),(2,'111','111','鸽子','000','',1,'','',''),(3,'000','0001','000发大水','000','4,5',0,'','',''),(6,'aaa','aaa','aaa','aaa','',0,'','',''),(7,'cy','123','123','','',2,'','',''),(8,'142','142','124','124','',0,'','',''),(9,'gaga','gaga','大法师','大法师','2,3,4,5,6',1,'收到罚单','','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
