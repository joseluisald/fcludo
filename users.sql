/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : 127.0.0.1:3306
 Source Schema         : crud

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 24/04/2023 17:54:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `active` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Luis Aldrighi', 'jaldrighi@gmail.com', 'Zjk1ZTY2YmNlYTJmNzcyOTJmOGRmNWYzZmRlOTFjNTc0ZTVmM2RjNQ==', '53981302738', 'A', 'Y', '2023-03-16 15:47:27', '2023-04-17 20:20:35');
INSERT INTO `users` VALUES (5, 'Luis S Aldrighi', 'jaldrighi@gmail.com', 'Zjk1ZTY2YmNlYTJmNzcyOTJmOGRmNWYzZmRlOTFjNTc0ZTVmM2RjNQ==', '53981302738', 'A', 'Y', '2023-03-23 01:24:49', '2023-03-23 03:28:05');
INSERT INTO `users` VALUES (6, 'José Luis', 'joseluis.ald@hotmail.com', 'ZDc1NzVhODcxMGEyNmNhNzBjYzNiYWQ1MGQzYjViNzgyYTgwMTE1NA==', '53981302738', 'A', 'Y', '2023-04-13 15:23:47', NULL);
INSERT INTO `users` VALUES (7, 'José Luis', 'joseluis.ald@hotmail.com', 'OGUxYmFlZWUxMTA5ZWFmYmUyYWU3MDI1NzU3ZWVlZDZmZGNjN2RiOQ==', '53981302738', 'A', 'Y', '2023-04-18 03:42:57', NULL);

SET FOREIGN_KEY_CHECKS = 1;
