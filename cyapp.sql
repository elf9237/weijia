/*  
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : cyapp

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2016-03-21 20:53:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) COLLATE utf8_bin NOT NULL,
  `userid` varchar(64) COLLATE utf8_bin NOT NULL,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of authassignment
-- ----------------------------
INSERT INTO `authassignment` VALUES ('admin', 'admin', null, 0x4E3B);
INSERT INTO `authassignment` VALUES ('test', 'admin', null, null);

-- ----------------------------
-- Table structure for `authitem`
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of authitem
-- ----------------------------
INSERT INTO `authitem` VALUES ('admin', '2', '', null, 0x4E3B);
INSERT INTO `authitem` VALUES ('create', '0', '', null, 0x4E3B);
INSERT INTO `authitem` VALUES ('delete', '0', '', null, 0x4E3B);
INSERT INTO `authitem` VALUES ('index', '0', '', null, 0x4E3B);
INSERT INTO `authitem` VALUES ('test', '0', null, null, null);
INSERT INTO `authitem` VALUES ('update', '0', '', null, 0x4E3B);
INSERT INTO `authitem` VALUES ('view', '0', '', null, 0x4E3B);

-- ----------------------------
-- Table structure for `authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of authitemchild
-- ----------------------------
INSERT INTO `authitemchild` VALUES ('admin', 'create');
INSERT INTO `authitemchild` VALUES ('admin', 'delete');
INSERT INTO `authitemchild` VALUES ('admin', 'index');
INSERT INTO `authitemchild` VALUES ('admin', 'update');
INSERT INTO `authitemchild` VALUES ('admin', 'view');

-- ----------------------------
-- Table structure for `cy_agentform`
-- ----------------------------
DROP TABLE IF EXISTS `cy_agentform`;
CREATE TABLE `cy_agentform` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` int(10) NOT NULL COMMENT '申请人',
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '申请人姓名',
  `user_idno` varchar(18) COLLATE utf8_bin NOT NULL COMMENT '身份证',
  `province` varchar(18) COLLATE utf8_bin NOT NULL COMMENT '省',
  `city` varchar(18) COLLATE utf8_bin NOT NULL COMMENT '市',
  `zone` varchar(18) COLLATE utf8_bin NOT NULL COMMENT '区',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `audit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '处理时间',
  `audit_status` int(10) NOT NULL DEFAULT '0' COMMENT '处理状态',
  `audit_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '处理人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_agentform
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_complaint`
-- ----------------------------
DROP TABLE IF EXISTS `cy_complaint`;
CREATE TABLE `cy_complaint` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `user_id` int(10) NOT NULL COMMENT '被举报人',
  `compl_id` int(10) NOT NULL COMMENT '举报人',
  `complaint` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '举报内容',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `deal_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '处理时间',
  `deal_status` int(10) NOT NULL DEFAULT '0' COMMENT '处理状态',
  `deal_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '处理人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_complaint
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_equip`
-- ----------------------------
DROP TABLE IF EXISTS `cy_equip`;
CREATE TABLE `cy_equip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `equip` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '装备名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_equip
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_favorite`
-- ----------------------------
DROP TABLE IF EXISTS `cy_favorite`;
CREATE TABLE `cy_favorite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `info_id` int(10) NOT NULL COMMENT '房源',
  `user_id` int(10) NOT NULL COMMENT '收藏人',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_favorite
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_info`
-- ----------------------------
DROP TABLE IF EXISTS `cy_info`;
CREATE TABLE `cy_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `province` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '省',
  `city` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '市',
  `zone` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '区',
  `price` int(10) NOT NULL DEFAULT '0' COMMENT '整租价格每月',
  `style` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '装修风格',
  `lend_type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '出租方式',
  `rooms` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '几居室',
  `area` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '面积',
  `floors` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '楼层数目',
  `nfloor` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所在楼层',
  `direction` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '南' COMMENT '方向',
  `house_type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '户型',
  `district` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '小区',
  `detail` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '详情描述',
  `map` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '地图坐标',
  `bus` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '交通状况',
  `market` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '市场状况',
  `public_url` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '公共空间图片',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `user_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '发布人',
  `lend_status` int(10) NOT NULL DEFAULT '0' COMMENT '是否租出',
  `audit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `audit_status` int(10) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `audit_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '审核人',
  `audit_content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '审核原因',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_info
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_message`
-- ----------------------------
DROP TABLE IF EXISTS `cy_message`;
CREATE TABLE `cy_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `info_id` int(10) NOT NULL COMMENT '房源编号',
  `room_id` int(10) DEFAULT NULL COMMENT '房间编号',
  `sender` int(10) NOT NULL COMMENT '发送人',
  `receiver` int(10) NOT NULL COMMENT '接收人',
  `message` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '消息内容',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `read_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '阅读时间',
  `order_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '预约时间',
  `message_type` int(10) NOT NULL DEFAULT '0' COMMENT '消息类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_message
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_order`
-- ----------------------------
DROP TABLE IF EXISTS `cy_order`;
CREATE TABLE `cy_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_no` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '订单编号',
  `user_id` int(10) NOT NULL COMMENT '下单人',
  `info_id` int(10) NOT NULL COMMENT '房源编号',
  `room_id` int(10) NOT NULL COMMENT '房间编号',
  `order_type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '租房|广告置顶',
  `pay_type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '定金or押金or租金',
  `pay_price` int(10) NOT NULL COMMENT '金额',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `begin_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `audit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `audit_status` int(10) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `audit_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '审核人',
  `audit_content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '审核原因',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_order
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_page`
-- ----------------------------
DROP TABLE IF EXISTS `cy_page`;
CREATE TABLE `cy_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `banner_url` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '横幅',
  `title` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '标题',
  `page` varchar(5000) COLLATE utf8_bin NOT NULL COMMENT '富文本内容',
  `user_id` int(10) NOT NULL COMMENT '申请人',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_page
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_room`
-- ----------------------------
DROP TABLE IF EXISTS `cy_room`;
CREATE TABLE `cy_room` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `info_id` int(10) unsigned NOT NULL COMMENT 'info_id',
  `room_id` int(10) unsigned NOT NULL COMMENT 'room_id',
  `room` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '主卧or次卧',
  `price` int(10) NOT NULL DEFAULT '0' COMMENT '价格每月',
  `style` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '装修风格',
  `image_url` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '公共空间图片',
  `direction` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '南' COMMENT '方向',
  `detail` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '详情描述',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `lend_status` int(10) NOT NULL DEFAULT '0' COMMENT '是否租出',
  `audit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `audit_status` int(10) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `audit_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '审核人',
  `audit_content` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '审核原因',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_room
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_room_comment`
-- ----------------------------
DROP TABLE IF EXISTS `cy_room_comment`;
CREATE TABLE `cy_room_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `info_id` int(10) NOT NULL COMMENT '房源编号',
  `room_id` int(10) NOT NULL COMMENT '房间编号',
  `equip_id` int(10) NOT NULL COMMENT '装备编号',
  `comment` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '详情描述',
  `user_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '评论人',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `audit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核时间',
  `audit_status` int(10) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `audit_id` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '审核人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_room_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_room_equip`
-- ----------------------------
DROP TABLE IF EXISTS `cy_room_equip`;
CREATE TABLE `cy_room_equip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `info_id` int(10) NOT NULL COMMENT '房源编号',
  `room_id` int(10) NOT NULL COMMENT '房间编号',
  `equip_id` int(10) NOT NULL COMMENT '装备编号',
  `equiped` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否装备',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_room_equip
-- ----------------------------

-- ----------------------------
-- Table structure for `cy_user`
-- ----------------------------
DROP TABLE IF EXISTS `cy_user`;
CREATE TABLE `cy_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `username` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '登录账号',
  `password` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `gender` varchar(64) COLLATE utf8_bin NOT NULL COMMENT '登录账号',
  `image_url` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '头像',
  `birthday` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '生日',
  `cellphone` varchar(13) COLLATE utf8_bin NOT NULL COMMENT '手机',
  `type` varchar(10) COLLATE utf8_bin NOT NULL COMMENT '用户类型',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `inviter` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT '邀请人',
  `status` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '审核状态',
  `openid` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '微信',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cy_user
-- ----------------------------
INSERT INTO `cy_user` VALUES ('1', '123', '123', '12', '', '0', '', '', '0', '0', null, '0', '');
