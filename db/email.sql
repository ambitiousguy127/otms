/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.1.16-MariaDB : Database - otms-october
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

USE `otms-october`;

/*Table structure for table `system_mail_templates` */

DROP TABLE IF EXISTS `system_mail_templates`;

CREATE TABLE `system_mail_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `description` text,
  `content_html` text,
  `content_text` text,
  `layout_id` int(11) DEFAULT NULL,
  `is_custom` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `system_mail_templates_layout_id_index` (`layout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `system_mail_templates` */

insert  into `system_mail_templates`(`id`,`code`,`subject`,`description`,`content_html`,`content_text`,`layout_id`,`is_custom`,`created_at`,`updated_at`) values (2,'backend::mail.restore',NULL,'Password reset instructions for backend-end administrators.',NULL,NULL,2,0,'2016-04-01 11:09:13','2016-04-01 11:09:13'),(3,'backend::mail.register','感谢预约oTMS系统演示！','Email to be sent to lead after registering for demo','<p>亲爱的用户：</p><p>您的预约演示信息已经收到，我们的工作人员将尽快与您联络，询问您的具体需求，以便安排做进一步演示沟通。</p><p>oTMS是国内最大的一站式运输服务平台，基于首创的社区型“SaaS平台+移动APP”模式，将货主、第三方物流公司、运输公司、司机和收货人无缝互联，形成一个基于核心流程、平衡、多赢的现代运输商业网络，带给客户全新管理体验，创造更多商业机会。<br></p><p>感谢您的关注，您可以关注我们的微信公众号及时获取最新信息：</p><p><img src=\"http://www.otms.com/storage/app/media/blog/qrcode1.png\" data-verified=\"redactor\" data-save-url=\"http://www.otms.com/storage/app/media/blog/qrcode1.png\" width=\"154\" height=\"155\" rel=\"width: 154px; height: 155px;\" style=\"width: 154px; height: 155px;\"></p><p><strong data-verified=\"redactor\">Marketing</strong></p><p>openTrans Technology Co.,Ltd</p><p>上海先烁信息科技有限公司</p>  <p>Tel : 400-821-9800<br>Email : <a href=\"mailto:fanny.tang@otms.cn\">marketing@otms.cn</a><br>Web : <a href=\"http://www.otms.com/\" target=\"_blank\">www.otms.com</a></p><p><a href=\"http://www.otms.com/\" target=\"_blank\"></a><img src=\"/storage/app/media/logo.jpg\" data-verified=\"redactor\"></p>','亲爱的用户:\r\n\r\n我们已经收到您提交的信息，我们会尽快联系您！\r\n感谢您对oTMS的支持！\r\n\r\nMarketing\r\nopenTrans Technology Co.,Ltd\r\n\r\n上海先烁信息科技有限公司\r\n上海市浦东新区峨山路91弄100号\r\n(陆家嘴软件园2号楼7楼701-703) 200122\r\n\r\nTel : 400-821- 9800\r\nemail : fanny.tang@otms.cn\r\nweb : www.otms.cn',1,1,'2016-04-20 02:25:03','2016-05-26 23:46:20'),(4,'backend::mail.openApi','亲爱的申请者：Thanks for applying to Open Api with oTMS','Email to be sent after the OpenApi form has been successfully completed','<p><span>亲爱的申请者：</span></p><p><span></span><span>您所提交的资料已经收到，我们会尽快审核您的资料。如通过审核，我们的技术人员将与您进一步联络。</span></p><p>感谢您对oTMS的支持！</p><p>oTMS市场部<br><span>openTrans Technology Co.,Ltd<br></span><span>上海先烁信息科技有限公司<br></span><span>上海市浦东新区峨山路91弄100号(陆家嘴软件园2号楼7楼701-703) 200122<br></span><span>Tel : 400-821-9800<br></span><span>Email : marketing@otms.cn<br></span><span>Web : </span><a href=\"http://www.otms.com/\">www.otms.com</a></p>','​​​您所提交的资料已经收到，我们会尽快审核您的资料。如通过审核，我们的技术人员将与您进一步联络。\r\n\r\n感谢您对oTMS的支持！\r\n\r\noTMS市场部\r\n\r\nopenTrans Technology Co.,Ltd\r\n\r\n上海先烁信息科技有限公司\r\n\r\n上海市浦东新区峨山路91弄100号(陆家嘴软件园2号楼7楼701-703) 200122\r\n\r\nTel : 400-821-9800\r\n\r\nEmail : marketing@otms.cn\r\n\r\nWeb : www.otms.com',1,1,'2016-05-23 21:44:47','2016-05-25 22:17:56'),(5,'backend::mail.openApi_en','亲爱的申请者：Thanks for applying to Open Api with oTMS','Email to be sent after the OpenApi form has been successfully completed on the English page.','<p>Dear Applicanter:</p><p>Your information submitted&nbsp;has been received, we will review them as soon as possible. After&nbsp;approved, our technical staff will contact you.</p><p></p><p>Thank you for support about&nbsp;oTMS!</p><p></p><p><br></p><p>oTMS Marketing</p><p>openTrans Technology Co.,Ltd<br>Tel : 400-821-9800<br>Email : marketing@otms.cn<br>Web :&nbsp;<a href=\"http://www.otms.com/\">www.otms.com</a></p>','​--DELETE ENGLISH TESTING--\r\n\r\n亲爱的申请者：\r\n\r\n您所提交的资料已经收到，我们会尽快审核您的资料。如通过审核，我们的技术人员将与您进一步联络。\r\n\r\n感谢您对oTMS的支持！\r\n\r\noTMS市场部\r\nopenTrans Technology Co.,Ltd\r\n上海先烁信息科技有限公司\r\n上海市浦东新区峨山路91弄100号(陆家嘴软件园2号楼7楼701-703) 200122\r\nTel : 400-821-9800\r\nEmail : marketing@otms.cn\r\nWeb : www.otms.com',1,1,'2016-05-24 22:30:04','2016-05-25 22:17:23'),(6,'backend::mail.register_en','Thanks for registering a demo with oTMS','Email to be sent to lead after registering for demo after filling out the form in English','<p>Dear sender:</p><p>Your information&nbsp;has been received, we will contact you shortly.</p><p>Thanks for attention&nbsp;oTMS&nbsp;!</p><p><strong>Marketing<br></strong><strong>openTrans Technology Co.,Ltd</strong></p><p>Tel : 400-821-9800<br>email :&nbsp;<a href=\"mailto:fanny.tang@otms.cn\">marketing@otms.cn</a><br>web :&nbsp;<a href=\"http://www.otms.com/\" target=\"_blank\">www.otms.com</a></p><p><img src=\"/storage/app/media/logo.jpg\" data-verified=\"redactor\"></p>','---DELETE ENGLISH TEST--\r\n\r\n亲爱的用户：\r\n\r\n我们已经收到您提交的信息，我们会尽快联系您！\r\n\r\n感谢您对oTMS的支持！\r\n\r\n\r\nMarketing\r\nopenTrans Technology Co.,Ltd\r\n\r\n上海先烁信息科技有限公司\r\n上海市浦东新区峨山路91弄100号\r\n(陆家嘴软件园2号楼7楼701-703) 200122\r\n\r\nTel : 400-821-9800\r\nemail : marketing@otms.cn\r\nweb : www.otms.com',1,1,'2016-05-24 22:37:52','2016-05-26 23:46:52'),(7,'backend::mail.invite',NULL,'Invitation for newly created administrators.',NULL,NULL,2,0,'2016-05-25 22:22:21','2016-05-25 22:22:21'),(8,'backend::mail.landing-rfq','感谢预约oTMS系统演示！','Email to be sent after the Rfq form has been successfully completed','<p>亲爱的用户：</p>\r\n<p>您的预约演示信息已经收到，我们的工作人员将尽快与您联络。</p>\r\n\r\n<p>RFQ Platform是依托oTMS SaaS TMS为基础，为客户提供一站式运力招采解决方案。产品围绕完善便捷的在线招投标工具，及平台内深度货主合作关系的承运商资源池匹配两大核心功能，帮助货主轻松实施计划性招标或者临时招标，快速匹配更优质、更合适的承运商资源。\r\n<br>\r\n</p>\r\n\r\n<br>\r\n<p>↓微信公众号↓</p>\r\n<p>\r\n 	<img src=\"http://www.otms.com/storage/app/media/blog/qrcode_rfq.png\" data-verified=\"redactor\" data-save-url=\"http://www.otms.com/storage/app/media/blog/qrcode_rfq.png\" width=\"154\" height=\"155\" rel=\"width: 154px; height: 155px;\" style=\"width: 154px; height: 155px;\">\r\n </p>\r\n\r\n<p>\r\n	<strong data-verified=\"redactor\">Marketing</strong>\r\n</p>\r\n<p>openTrans Technology Co.,Ltd</p>\r\n<p>上海先烁信息科技有限公司</p>  \r\n<p>Tel : 400-821-9800\r\n	<br>Email : <a href=\"mailto:fanny.tang@otms.cn\">marketing@otms.com</a>\r\n	<br>Web : <a href=\"http://www.otms.com/\" target=\"_blank\">www.otms.com</a>\r\n</p>','亲爱的用户：\r\n您的预约演示信息已经收到，我们的工作人员将尽快与您联络。\r\n \r\nRFQ Platform是依托oTMS SaaS TMS为基础，为客户提供一站式运力招采解决方案。产品围绕完善便捷的在线招投标工具，及平台内深度货主合作关系的承运商资源池匹配两大核心功能，帮助货主轻松实施计划性招标或者临时招标，快速匹配更优质、更合适的承运商资源。\r\n \r\nMarketing\r\nopenTrans Technology Co.,Ltd\r\n上海先烁信息科技有限公司\r\nTel : 400-821-9800\r\nEmail : marketing@otms.com\r\nWeb : www.otms.com',1,1,'2017-01-10 10:36:49','2017-01-11 10:29:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
