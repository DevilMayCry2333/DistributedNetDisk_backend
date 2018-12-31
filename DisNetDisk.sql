/*
 Navicat Premium Data Transfer

 Source Server         : hi
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : hifafu.com
 Source Database       : DisNetDisk

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : utf-8

 Date: 12/19/2018 21:00:46 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `netdisk_user`
-- ----------------------------
DROP TABLE IF EXISTS `netdisk_user`;
CREATE TABLE `netdisk_user` (
  `username` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(60) DEFAULT NULL,
  `salt` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `netdisk_user_username_uindex` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `netdisk_user`
-- ----------------------------
BEGIN;
INSERT INTO `netdisk_user` VALUES ('13720815211', 'd12abf439d1c2dda0b35c2881c782078', 'c701610a94b7d965a0e1db797d8bd70fc37dfd4f9da4e6e58afe761b56f17d96e86985486f5b3aef60f8eff4230620b16766b65cbace8e52c82062218d06c705', '23'), ('13720815212', 'ab29516dc869bcc5b45b0778979dfe9e', '9a6ba964aeaeaac755472963ecb2dfeb2bd31b4ba101309633026d064a8905e6e1378f8487111bf6dcbaa8fb1f987b1cbbbc483094b092c5cbe136b065947c89', '24'), ('13720815213', '3e1fdac0091c89b644d1db44191c93b8', '878e72bf99f70c14ead96ee479301fc05fc8e13889948a3fdafe67a3f3ebd11ec4199a3578d12962a0cd29a235612b1cf55404fb5fa6ce5b25a97e1aea970f6a', '25'), ('13720815219', 'f2bd38d9a52406c3db7ff38c86fac275', '8c7e49e6554a942470ec4986c5cbead12628502db8e8fc428da72c30837eb4317f7300f9fc650f8f6da6fbb59ddad196b4a273e1230457feef3a1c83c97a1ab8', '26'), ('13720815220', '9c58036990653b3da57a0c912eb0b13e', '06eedbc59d73822d787e26fc622c187ecafe540adb113d328792161f50d8734e6a0c60e5d7a98f033c8b7fc7b21614d879f97a20e8e6f9cc0368bb29fb17b079', '27'), ('13720815221', '09cef54f639bde23587aa7e8cbfe8998', '8637bfa0a37736f66225a92443ea42131c803981c05ad41c305f2b5f2a216d1881bb682f05708978e1d8e4bed7f6f0e47b5f02f5e1da0eacdbc9c642bd596fb0', '28'), ('13720815222', 'd1b77411a173fbf4b7aad509e27b82c3', '30e114d66f1407a4398bfd8941bc8b7d815ad945401f9266598f658a716d05bbbc03f3e58816ee16c2ef6b2b96e172c5aba38610485d5eb3b132b088e8cc58b5', '29'), ('13023801558', '2fe7405dda7c1acb801339da71fa7fdd', 'b1f562c4a49fb006b26b61e5b3008668', '31'), ('svjiang@foxmail.com', 'ab23260b5f14b165b821a4cbbd4cfcc9', '38d958e644e596fe897c20157607b20f2e81cfbf3cf3e0b68b96d3ab24374385ab331b1a8ed09c50f5413da526830f47efff5a1f742d48c586fe01a73067479e', '32'), ('18559111641', '0ebb5c86f713c329c5dc4b66411f33b3', '7535b49af8ed0a666c683fe55b666a4298c1f21d3864b88b101c8956e49925607b653d3eb92f75098448be4846a015c9a50f36058088e27fcb943e0e841ebabc', '33'), ('17689449522', '070a43314ab5070b9f611f1fb8e20677', 'ab26d6b0e9a87943531f5ebb4f34b20ade9a806f2feb37b19b6f9bdd928aa3a41a83ddf80e855802f6928f62ed8a24c7cc6e9fd1cfa0dd215333c0f5ebc529c9', '34'), ('17689449523', '66b1c7669f71c824516a4f49161ce233', '8a3c4b6437811780454bdecd73ad8d265a323732b0c6a0e0d2dc015045acd09bfcb4a9eae02c3e239cfd89bc3243ba7220eb728c22b7aec02daaa6055a17d86d', '35'), ('17689449529', 'e873df75468c32f1e78d173185ee74f5', 'b10a89166be30356f319ce9cff6d28132e639b7a3ff93f1adf526d78bff9f1a4e6d9af13b8e60034f8af82a53498b0016e367928408acf31985ca55a7febcc11', '36'), ('17689449521', 'd9a9959998fbcfb358926e774f551fe0', 'e31c04b1b38971b4a5107cfdc8b57877eb0700c90ef1b71e4e2d0e00874ccaf2b2fcf7044092219acd93f0a010d2f3acf8dd463a1c6992438b22a2bc3f39c132', '37'), ('17689449599', '9a6774bc8dcae0aa4cd37be8b2fbb8a3', 'e06a8e6101f19985cb11c1540f099ab8b10cbf8b5a47b4ddb9aeee756c91c3e0dee9db7513f35490ce626324274168eb5832d168513d0ef9d06f2a9c458f6f9f', '38'), ('17689441111', 'e829f5b0f3e8677beebf97456c7d0003', 'd4fbf0019b64fc70f8eb5c55bd3310880ad52ccf2a25c287c6a3cc437b71f76ffa6444b6f9111072af06faba3205e0e929d96b463004660ac72f235e23aa0f70', '39'), ('17689449524', '1db0ade9eff1bfca6b18070e081d6fb7', '60e451d46f0a9b35d8b74424c67237e8c4874ccb44e82e6be1f72fe3d2837d7b22cd36d49b0dca336f622c49ea6c998c59bc69892b3bde4ff7061a4e9e9abf99', '40'), ('17689448989', '795070e348b5e615ec2b1a7403c807d8', '553001a67af2b749be9a8d15079df1c7b0d70e998c6ce1e344a47dc6995b9c5864f44757b383097cbcfeb92252c12f8eebb6e08b5cf7340c72a7e21be8affff0', '41'), ('17689449898', '886fb1b29463e7b434087eaada6bf04b', '948056d920c4a3fd69cff8c0773a1f3f481081a4dc5d8b4bda30aa92a47795019a0b4bdf8a5246da6fbbb8dc3b5169da0a7a8b653d141c1995a5a9a73ed525f4', '42'), ('1045070166@qq.com', 'ceaf29e6325a16acb8698ef6f64783ef', '5ca320ca78ffc2006a6c247076159c300aa232c0026a07b7d3954092ca6da213d481cebf07691f555a09f0e8ca8a62f488498014cd006ecc426986607e8b9bd7', '43'), ('12345678901', 'e2904eea94345a56e791751b096730c1', 'd617645c43b6cc2f065fc13de79e9607896ba6a99a26d627ba4e22f2218e4a4034e5f28f0f0acb502b07b4e2eff4552c59540378617a4f00604ed9495d773096', '44'), ('13720815215', '7a4cd4dc7afe3d5c0883dda1933463b4', 'c4f0c8e7af971ce128010c7772ae7bfb0d63f966f3f913847598526ddd0c07f2e8b01d0e02a66a419d5db321eee451458052c03f38a6ad82379f93e8382a8000', '45'), ('18960781958', '6fccebfcaf2208a7bc0b255cbfbdc09c', '2d9a7b3de7323ef837bd89b41315ac63b48f8c1d2ba545d5f12b05e8c2ee97dea070a39d9bf1e6b4c477100ea34a7ca969b1a38cd708312f3906b2a8531711d6', '46'), ('13000000000', '516a675f0a7ec5384997fab4158dbb90', '4e23a888353f5b4cf93ebe7d3da4fd1932b2a8d5298e5064756aa2d97c1785817708e4a9db0cff86f7b53fc928586fdd5ffe64ebb6f4bb954776868c371f35dd', '47'), ('18912341234', '865cdb03abd05698714d071338a8e310', '88960df719c796c7ce883ced3866b210f10a5a606adca4bc594b30bda9177b836039e20b5bed5eb9118182b8c73e8dc48eb770678e64054c671528d10929ef30', '48'), ('13323332333', 'a3c24405e511b08350d2b178cc6b49c6', '2f36aa697461e7ad1382744dfb84ac2298353dae753b03359fabd9e69781c91893dcd5cf3bf8dc94cf17c7a5b60e3d04fd2e83961c00e41551bcdf0d0b8f2806', '49'), ('137208152155', 'cb76813efe21fb649c280c476500460c', 'd67077df01c8a4536c477984f7b9ce273403ecb4340d70905f5f5c64bf95ec3f87257b651c6ac12457a0de6ba3a8048aa0478bb11d69fe02de507449359e93da', '50');
COMMIT;

-- ----------------------------
--  Table structure for `netdisk_userfile`
-- ----------------------------
DROP TABLE IF EXISTS `netdisk_userfile`;
CREATE TABLE `netdisk_userfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `parent_dir` varchar(60) DEFAULT NULL,
  `abs_path` varchar(600) DEFAULT NULL,
  `mod_date` varchar(100) DEFAULT NULL,
  `ext` varchar(60) DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `filename` varchar(60) DEFAULT NULL,
  `crc` varchar(60) DEFAULT NULL,
  `filetype` varchar(60) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `netdisk_userfile`
-- ----------------------------
BEGIN;
INSERT INTO `netdisk_userfile` VALUES ('80', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/', '2018-Dec-Sun', null, '0', 'awei', null, 'dir', '1'), ('81', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/', '2018-Dec-Sun', null, '90', 'REVIEW ON TEXTURE DESCRIPTORS for Image Classification.docx', null, 'application/octet-stream', '0'), ('82', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/awei/', '2018-Dec-Sun', null, '14', '1.png', null, 'image/png', '0'), ('83', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/awei/', '2018-Dec-Sun', null, '15', '4.png', null, 'image/png', '0'), ('84', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/awei/', '2018-Dec-Sun', null, '15', '3.png', null, 'image/png', '0'), ('85', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/awei/', '2018-Dec-Sun', null, '18', '2.png', null, 'image/png', '0'), ('86', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/', '2018-Dec-Sun', null, '0', 'sv', null, 'dir', '1'), ('87', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/sv/', '2018-Dec-Sun', null, '143', '实验五、QTP (I).pdf', null, 'application/pdf', '0'), ('88', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/', '2018-Dec-Sun', null, '4', 'default', null, 'application/octet-stream', '0'), ('89', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/sv/', '2018-Dec-Sun', null, '0', 'softwareTest', null, 'dir', '1'), ('90', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/sv/', '2018-Dec-Sun', null, '561', 'HomeworkAssignment#7.docx', null, 'application/octet-stream', '0'), ('91', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/', '2018-Dec-Sun', null, '175', '白盒.jpg', null, 'image/jpeg', '0'), ('92', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/', '2018-Dec-Sun', null, '801', '屏幕快照 2018-11-27 22.29.22.png', null, 'image/png', '0'), ('93', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/', '2018-Dec-Sun', null, '1054', 'DEV_PTKJ_YanXuan_v2.0.7.zip', null, 'application/zip', '0'), ('103', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/', '2018-Dec-Sun', null, '0', 'test1', null, 'dir', '1'), ('104', '13720815222', null, 'DistributedNetDisk/public/upload/13720815222/test1/', '2018-Dec-Sun', null, '0', 'test', null, 'dir', '1'), ('110', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/', '2018-12-02', null, '0', 'test', null, 'dir', '1'), ('111', '13023801558', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/qwe/', '2018-12-02', null, '0', '123', null, 'dir', '1'), ('112', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/', '2018-12-03', null, '0', 'sbKEJI', null, 'dir', '1'), ('113', '13023801558', null, 'DistributedNetDisk/public/upload/13023801558/sbKEJI/', '2018-12-03', null, '0', 'kejiSB', null, 'dir', '1'), ('121', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-03', null, '0', 'sadas', null, 'dir', '1'), ('122', '13720815215', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/456/789/', '2018-Dec-Mon', null, '3', 'license.lic', null, 'application/octet-stream', '0'), ('131', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-03', null, '0', 'sv', null, 'dir', '1'), ('132', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-03', null, '0', '新建文本文档.txt', null, 'text/plain', '0'), ('133', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/', '2018-12-03', null, '411', '3166016001江森伟操作系统实验报告3.doc', null, 'application/octet-stream', '0'), ('134', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/', '2018-12-03', null, '0', 'qwe', null, 'dir', '1'), ('135', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/qwe/', '2018-12-04', null, '0', 'iii', null, 'dir', '1'), ('136', 'svjiang@foxmail.com', null, 'DistributedNetDisk\n/public/upload/svjiang@foxmail.com/sv/qwe/iii/', '2018-12-04', null, '0', 'xxx', null, 'dir', '1'), ('137', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/qwe/iii/', '2018-12-04', null, '0', 'ddd', null, 'dir', '1'), ('138', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '0', 'shouye', null, 'dir', '1'), ('139', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', '1', null, 'dir', '1'), ('140', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', 'vvv', null, 'dir', '1'), ('141', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', 'aaa', null, 'dir', '1'), ('142', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', 'bbb', null, 'dir', '1'), ('143', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', 'ccc', null, 'dir', '1'), ('144', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/', '2018-12-04', null, '0', '2', null, 'dir', '1'), ('145', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/', '2018-12-04', null, '0', '3', null, 'dir', '1'), ('146', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '131', 'sjf.exe', null, 'application/x-msdownload', '0'), ('147', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '411', '3166016001江森伟操作系统实验报告3.doc', null, 'application/octet-stream', '0'), ('148', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '2', 'sjf.cpp', null, 'text/plain', '0'), ('149', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '0', '新建文本文档.txt', null, 'text/plain', '0'), ('150', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/', '2018-12-04', null, '2', 'sjf.cpp', null, 'text/plain', '0'), ('151', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/', '2018-12-04', null, '0', '新建文本文档.txt', null, 'text/plain', '0'), ('152', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/', '2018-12-04', null, '131', 'sjf.exe', null, 'application/x-msdownload', '0'), ('153', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/3/', '2018-Dec-Tue', null, '0', '新建文本文档.txt', null, 'text/plain', '0'), ('154', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/3/', '2018-Dec-Tue', null, '131', 'sjf.exe', null, 'application/x-msdownload', '0'), ('155', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/3/', '2018-Dec-Tue', null, '561', 'HomeworkAssignment#7.docx', null, 'application/octet-stream', '0'), ('156', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/2/', '2018-Dec-Tue', null, '109', 'Homework Assignment 6.pdf', null, 'application/pdf', '0'), ('157', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/1/', '2018-Dec-Tue', null, '40', 'Test.tsp', null, 'application/octet-stream', '0'), ('158', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '5', 'Parameters.mtr', null, 'application/octet-stream', '0'), ('159', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/', '2018-12-04', null, '1', 'default.cfg', null, 'application/octet-stream', '0'), ('160', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/shouye/bbb/', '2018-12-04', null, '8', 'Resource.mtr', null, 'application/octet-stream', '0'), ('161', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/qwe/iii/ddd/', '2018-12-04', null, '0', 'DateProblemTest.txt', null, 'text/plain', '0'), ('162', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/sv/qwe/iii/ddd/', '2018-12-04', null, '3', 'DateProblem.cpp', null, 'text/plain', '0'), ('163', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '0', 'a1', null, 'dir', '1'), ('164', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/a1/', '2018-12-04', null, '0', 'a2', null, 'dir', '1'), ('165', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/a1/a2/', '2018-12-04', null, '0', 'a3', null, 'dir', '1'), ('166', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/a1/a2/a3/', '2018-12-04', null, '0', 'a4', null, 'dir', '1'), ('167', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '0', 'b1', null, 'dir', '1'), ('168', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/b1/', '2018-12-04', null, '0', 'b2', null, 'dir', '1'), ('169', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/b1/b2/', '2018-12-04', null, '0', 'b3', null, 'dir', '1'), ('170', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '295', '3166016001江森伟.doc', null, 'application/octet-stream', '0'), ('171', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/b1/', '2018-12-04', null, '284', '数学模型2-10节水洗衣机.pptx', null, 'application/octet-stream', '0'), ('172', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/b1/b2/', '2018-12-04', null, '0', 'JAVA考试复习.docx', null, '', '0'), ('173', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/b1/b2/b3/', '2018-12-04', null, '0', '第2课 Servlet开发（一）.ppt', null, '', '0'), ('174', 'svjiang@foxmail.com', null, 'DistributedNetDisk/public/upload/svjiang@foxmail.com/', '2018-12-04', null, '1673', 'S05 implicit objects.ppt', null, 'application/octet-stream', '0'), ('175', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-04', null, '15', 'WordRqmErrors.log', null, 'application/octet-stream', '0'), ('176', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-04', null, '36', '9A43A54AC41C060F3DE02F886441EAE8.png', null, 'image/png', '0'), ('177', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/sadas/', '2018-12-04', null, '180', '3166016002黄铭扬—操作系统实验报告3.doc', null, 'application/msword', '0'), ('178', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-04', null, '106', '3166016016+陈宇锋+实验报告三.doc', null, 'application/msword', '0'), ('179', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-04', null, '1011', 'Ch2-3-sourceCode - upload-2018_10_31.pdf', null, 'application/pdf', '0'), ('180', '18960781958', null, 'DistributedNetDisk/public/upload/18960781958/', '2018-12-05', null, '0', 'abc', null, 'dir', '1'), ('182', '13000000000', null, 'DistributedNetDisk/public/upload/13000000000/', '2018-12-05', null, '0', 'abc', null, 'dir', '1'), ('183', '13000000000', null, 'DistributedNetDisk/public/upload/13000000000/abc/', '2018-12-05', null, '0', 'S06 JDBC.ppt', null, '', '0'), ('184', '13000000000', null, 'DistributedNetDisk/public/upload/13000000000/abc/', '2018-12-05', null, '1664', 'P04 JSP 2-1.ppt', null, 'application/octet-stream', '0'), ('185', '13000000000', null, 'DistributedNetDisk/public/upload/13000000000/abc/', '2018-12-05', null, '0', 'P03 sesseion A.ppt', null, '', '0'), ('186', '13000000000', null, 'DistributedNetDisk/public/upload/13000000000/abc/', '2018-12-05', null, '109', 'Homework Assignment 6.pdf', null, 'application/pdf', '0'), ('187', '18912341234', null, 'DistributedNetDisk/public/upload/18912341234/', '2018-12-05', null, '0', 'abc', null, 'dir', '1'), ('188', '18912341234', null, 'DistributedNetDisk/public/upload/18912341234/abc/', '2018-12-05', null, '594', 'HomeworkAssignment#6.docx', null, 'application/octet-stream', '0'), ('189', '18912341234', null, 'DistributedNetDisk/public/upload/18912341234/abc/', '2018-12-05', null, '120', 'Experiment #2.pdf', null, 'application/pdf', '0'), ('190', '13323332333', null, 'DistributedNetDisk/public/upload/13323332333/', '2018-12-05', null, '109', 'Homework Assignment 6.pdf', null, 'application/pdf', '0'), ('191', '13323332333', null, 'DistributedNetDisk/public/upload/13323332333/', '2018-12-05', null, '0', 'abc', null, 'dir', '1'), ('192', '13323332333', null, 'DistributedNetDisk/public/upload/13323332333/abc/', '2018-12-05', null, '157', 'Experiment #3.pdf', null, 'application/pdf', '0'), ('193', '13323332333', null, 'DistributedNetDisk/public/upload/13323332333/abc/', '2018-12-05', null, '561', 'HomeworkAssignment#7.docx', null, 'application/octet-stream', '0'), ('194', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-12', null, '71', 'GUITest2 [Res3].pdf', null, 'application/pdf', '0'), ('195', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-12', null, '0', '123', null, 'dir', '1'), ('196', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-12', null, '24', 'MyCalc.exe', null, 'application/x-msdownload', '0'), ('197', '13720815215', null, 'DistributedNetDisk/public/upload/13720815215/', '2018-12-16', null, '1559', '聪明的投资者_非完全市场化利率与风险识别——来自P2P网络借贷的证据.pdf', null, 'application/pdf', '0');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
