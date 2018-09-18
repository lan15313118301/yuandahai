-- MySQL dump 10.13  Distrib 5.5.21, for Win32 (x86)
--
-- Host: localhost    Database: dannuo
-- ------------------------------------------------------
-- Server version	5.5.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dn_admin`
--

DROP TABLE IF EXISTS `dn_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(32) NOT NULL,
  `password` char(32) NOT NULL,
  `picture` char(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_admin`
--

LOCK TABLES `dn_admin` WRITE;
/*!40000 ALTER TABLE `dn_admin` DISABLE KEYS */;
INSERT INTO `dn_admin` VALUES (1,'21232f297a57a5a743894a0e4a801fc3','f2ea5c5bf51233cf841abf47fca29cbb','e66a8a01f21a1bffca123206bcdebe01.jpg','鸿扬网络祝您：开心快乐每一天！！！');
/*!40000 ALTER TABLE `dn_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_banner`
--

DROP TABLE IF EXISTS `dn_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_banner` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_pai` int(4) DEFAULT NULL,
  `b_picture` varchar(40) DEFAULT NULL,
  `b_time` int(11) NOT NULL,
  `b_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_banner`
--

LOCK TABLES `dn_banner` WRITE;
/*!40000 ALTER TABLE `dn_banner` DISABLE KEYS */;
INSERT INTO `dn_banner` VALUES (1,NULL,'016fe2c6ac9067a8ed3df0cb9ae24018.jpg',1460370154,1460370910),(2,NULL,'0e077bd1f9a2fcd61d5351ac766deb7a.png',1460370161,1460424833),(3,NULL,'241d2a55ad549e400247e60dc4ff54a6.jpg',1460370166,1460370936),(4,NULL,'8621c5d1cc702ea3ba3b22599f423240.jpg',1460370172,1460370947),(5,NULL,'97622de210b20ec821abbe10f58dbe12.jpg',1460370184,1460370959);
/*!40000 ALTER TABLE `dn_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_cate`
--

DROP TABLE IF EXISTS `dn_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_cate` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `c_pai` int(4) DEFAULT NULL,
  `c_cate` enum('详细页','列表页') DEFAULT NULL,
  `c_time` int(11) NOT NULL,
  `c_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_cate`
--

LOCK TABLES `dn_cate` WRITE;
/*!40000 ALTER TABLE `dn_cate` DISABLE KEYS */;
INSERT INTO `dn_cate` VALUES (1,'产品介绍',NULL,'详细页',1460428005,NULL),(2,'产品设计',NULL,'详细页',1460428799,NULL),(3,'生产设备',NULL,'列表页',1460428809,NULL),(4,'检测设备',NULL,'列表页',1460428823,NULL),(5,'产品选型',NULL,'列表页',1460428833,NULL),(6,'钻石社保及配件',NULL,'列表页',1460428848,NULL),(7,'工程机械设备及配件',NULL,'列表页',1460428864,NULL);
/*!40000 ALTER TABLE `dn_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_company`
--

DROP TABLE IF EXISTS `dn_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_company` (
  `cm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cm_pai` int(4) DEFAULT NULL,
  `cm_name` varchar(30) NOT NULL,
  `cm_keys` varchar(20) DEFAULT NULL,
  `cm_content` text,
  `cm_time` int(11) NOT NULL,
  `cm_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_company`
--

LOCK TABLES `dn_company` WRITE;
/*!40000 ALTER TABLE `dn_company` DISABLE KEYS */;
INSERT INTO `dn_company` VALUES (7,NULL,'公司简介','公司简介','<p style=\"font-size:14px;color:#666666;font-family:Simsun;\">\r\n	&nbsp; 大庆丹诺石油科技开发有限公司位于大庆经济技术开发区长信街19号，是生产油田机械设备和其它机械设备专业厂，总投资0.5亿元，规划占地面积33230.56平方米，总办公楼建筑面积5600平方米，厂房面积20399.98平方米。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:Simsun;\">\r\n	&nbsp;&nbsp;大庆丹诺石油科技开发有限公司生产的电控换向型无游梁式抽油机（以下简称电控抽油机），本设备特别适用于长冲程、低冲次、大载荷、高粘度、中高含水期等，需重载强抽油井的采油要求，可配合大泵径、长深井、滩涂浅滩等多种复杂工况要求，适于常规陆地油井和海上石油平台的原油抽采，极大的扩展了抽油机的应用范围。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:Simsun;\">\r\n	<img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172023_64950.png\" alt=\"\" />\r\n</p>',1460366433,NULL),(8,NULL,'企业文化','企业文化','<p>\r\n	<span style=\"color:#007BC4;font-family:微软也黑;font-size:26px;line-height:1.5;\">科技至先 管理至臻 产品至优 信誉至上</span>\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	<br />\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	创优质品牌铸一流企业\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	创造有竞争力的产品打造有凝聚力的团队\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	以精立业满足用户需求\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	以质取胜制造可靠产品\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	用户满意是企业永恒的追求\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;\">\r\n	<img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172333_95902.png\" alt=\"\" /> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<img src=\"file://C:/Users/ThinkPad/Desktop/%E7%9F%B3%E6%B2%B9/img/wenhuaimg01.png\" />',1460366478,1460366681),(9,NULL,'荣誉资质','荣誉资质','<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\">&nbsp; &nbsp; &nbsp;《全国工业产品生产许可证》 &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"font-family:Simsun;font-size:medium;line-height:normal;\">《高新技术企业证书》</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\">ISO19001质量管理体系</span></span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172605_93905.png\" width=\"312\" height=\"236\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172654_49086.png\" width=\"312\" height=\"236\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172745_81306.png\" width=\"312\" height=\"236\" alt=\"\" /></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:Simsun;font-size:22px;line-height:normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;体系证书</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172900_75753.png\" alt=\"\" /></span><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172919_39781.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172936_90837.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411172947_50377.png\" alt=\"\" /></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:Simsun;font-size:22px;line-height:normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;检验证书</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173025_46433.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173040_73023.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173052_48108.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173106_87492.png\" alt=\"\" /></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:Simsun;font-size:22px;line-height:normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;专利证书</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173221_64799.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173232_22104.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173308_59669.png\" alt=\"\" /><img src=\"/dannuo/library/kindeditor/attached/image/20160411/20160411173321_99585.png\" alt=\"\" /></span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Simsun;font-size:medium;line-height:normal;\"><img src=\"http://localhost/dannuo/library/kindeditor/attached/image/20160411/20160411173330_87294.png\" alt=\"\" /><img src=\"http://localhost/dannuo/library/kindeditor/attached/image/20160411/20160411173339_52223.png\" alt=\"\" /><img src=\"http://localhost/dannuo/library/kindeditor/attached/image/20160411/20160411173348_49204.png\" alt=\"\" /><img src=\"http://localhost/dannuo/library/kindeditor/attached/image/20160411/20160411173357_11799.png\" alt=\"\" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br />\r\n</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>',1460367254,1460367446),(10,NULL,'企业发展','企业发展','<div class=\"text clearfix\">\r\n	<div class=\"textLeft\">\r\n	</div>\r\n	<div class=\"textRight\">\r\n		<h5>\r\n			<span style=\"font-size:18px;\">2010年</span>\r\n		</h5>\r\n		<p>\r\n			&gt; 4月11号大庆丹诺石油科技开发有限公司正式成立！\r\n		</p>\r\n		<p>\r\n			&gt; 公司注册资金5000万元，位于大庆西域工业园\r\n		</p>\r\n		<h5 class=\"later02\">\r\n			<span style=\"font-size:18px;\">2012年</span>\r\n		</h5>\r\n		<p>\r\n			&gt; 三项目专利申请成功！\r\n		</p>\r\n		<h5 class=\"later\">\r\n			<span style=\"font-size:18px;\">2013年</span>\r\n		</h5>\r\n		<p>\r\n			&gt; 北京丹诺石油有限公司正式成立！\r\n		</p>\r\n		<h5 class=\"later04\">\r\n			<span style=\"font-size:18px;\">2014年</span>\r\n		</h5>\r\n		<p>\r\n			&gt; 多项专利申请成功！\r\n		</p>\r\n		<p>\r\n			&gt; 并获得多项专利证书！\r\n		</p>\r\n		<h5 class=\"later05\">\r\n			<span style=\"font-size:18px;\">2015年</span>\r\n		</h5>\r\n		<p>\r\n			&gt; 丹诺石油产业国内独创、科技成果世界领先，是您投资创业、转型的最佳首选项目！\r\n		</p>\r\n		<p>\r\n			&gt; 您选择了丹诺等于选择了财富！\r\n		</p>\r\n	</div>\r\n</div>',1460367699,1460368263);
/*!40000 ALTER TABLE `dn_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_connect`
--

DROP TABLE IF EXISTS `dn_connect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_connect` (
  `c_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `c_name` char(20) NOT NULL,
  `c_hotline` varchar(50) NOT NULL,
  `c_tel` varchar(50) NOT NULL,
  `c_fax` varchar(50) NOT NULL,
  `c_qq` varchar(13) NOT NULL,
  `c_addr` varchar(100) NOT NULL,
  `c_website` varchar(100) NOT NULL,
  `c_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_connect`
--

LOCK TABLES `dn_connect` WRITE;
/*!40000 ALTER TABLE `dn_connect` DISABLE KEYS */;
/*!40000 ALTER TABLE `dn_connect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_cooperation`
--

DROP TABLE IF EXISTS `dn_cooperation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_cooperation` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_name` varchar(30) NOT NULL,
  `co_pai` int(4) DEFAULT NULL,
  `co_picture` varchar(40) DEFAULT NULL,
  `co_content` text,
  `co_time` int(11) NOT NULL,
  `co_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_cooperation`
--

LOCK TABLES `dn_cooperation` WRITE;
/*!40000 ALTER TABLE `dn_cooperation` DISABLE KEYS */;
INSERT INTO `dn_cooperation` VALUES (1,'fff ',NULL,'070ff2da146a794a0dcfd6cd5ebc6c0e.png','fff',1460602958,NULL),(2,'a公司',NULL,'06757f93605fc14502cbb64a5b57eee8.png','a公司a公司a公司简介',1460603987,NULL),(3,'b公司',NULL,'7cd6f91ec5174e1ff648efaa60792e0f.png','b公司b公司b公司b公司b公司',1460604009,NULL),(4,'c公司',2,'f9a77aa434eae3fab954653db258657d.png','<span>c公司</span><span>c公司</span><span>c公司</span><span>c公司</span><span>c公司</span>',1460604025,NULL),(5,'d公司',NULL,'0036099a9a5e3f64a8d4a93a976cbaa4.png','d公司d公司d公司d公司d公司',1460604039,NULL),(6,'北京鸿扬网络科技有限公司',NULL,'a4a59dcc4d53ca7ff5e4745654c36174.png','f公司f公司f公司f公司f公司',1460604067,1460613539);
/*!40000 ALTER TABLE `dn_cooperation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_gaishu`
--

DROP TABLE IF EXISTS `dn_gaishu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_gaishu` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(30) NOT NULL,
  `g_pai` int(4) DEFAULT NULL,
  `g_picture` varchar(40) DEFAULT NULL,
  `g_content` text,
  `g_time` int(11) NOT NULL,
  `g_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_gaishu`
--

LOCK TABLES `dn_gaishu` WRITE;
/*!40000 ALTER TABLE `dn_gaishu` DISABLE KEYS */;
INSERT INTO `dn_gaishu` VALUES (1,'产品设计',0,'534bbc65c909661e75c33af13e38cdc8.png','公司应用CAD、CAXA二维软件，Soildword、Pro-e等三维软件辅助设计产品； 设计完成时并用有限元分析软件Abaqus对设备的全方位进行分析。<br />',1460425035,NULL),(2,'生产管理',0,'1b87732e44bb9c0b0b2637db7928a659.png','本公司生产的电控换向型无游梁抽油机，技术参数完全符合API石油协会标准。生产过程完全按照API标准执行，全程采用计算机虚拟技术进行产品结构的优化设计，部件的模块化、标准化程度高，通用性极强；',1460425064,NULL),(3,'生产材料',0,'7df30fbccff1ffeafeac661e3a77088d.png','产品的主要材料采用“H”型钢，强度高、刚性好、承载能力大，结构简洁；材料材质主要采用Q345B，它是低碳合金钢（c&lt;0.2%)，综合力学性能良好，低温性能亦可，塑性和焊接性良好，可用于-40℃以下寒冷地区的各种结构。',1460425099,NULL),(4,'产品特征',0,'4b1677a8f2de306be74c84ef0c347fa8.png','本设备机械结构简单，具有基本免维护制造技术、数字化油田控制技术、远程控制技术，结合油田实际工况，开发出具有生产用钢量小、长冲程、变冲次、大载荷、高功效、低能耗、易操作、高效节能的特点。',1460425140,NULL);
/*!40000 ALTER TABLE `dn_gaishu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_job`
--

DROP TABLE IF EXISTS `dn_job`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_job` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `j_pai` int(4) DEFAULT NULL,
  `j_name` varchar(30) NOT NULL,
  `j_keys` varchar(20) DEFAULT NULL,
  `j_content` text,
  `j_time` int(11) NOT NULL,
  `j_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_job`
--

LOCK TABLES `dn_job` WRITE;
/*!40000 ALTER TABLE `dn_job` DISABLE KEYS */;
INSERT INTO `dn_job` VALUES (1,2,'诚聘生产管理负责人','诚聘生产管理负责人','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>',1460272554,1460544230),(2,3,'诚聘化工专业技术员','诚聘化工专业技术员','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>',1460272915,1460544149),(6,NULL,'诚聘业务经理','诚聘业务经理','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>\r\n<br />',1460274118,1460544195),(7,NULL,'诚聘文化传播主管','诚聘文化传播主管','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>',1460544255,NULL),(8,NULL,'诚聘（电气）仪表工程师','诚聘（电气）仪表工程师','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>',1460544306,NULL),(9,NULL,'诚聘总工程师（环保方向，固废污泥污水）','诚聘总工程师（环保方向，固废污泥污水）','<p style=\"font-family:Simsun;font-size:medium;\">\r\n	专业：应用化学/化学分析\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	工作类型：全职\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	学历：大专及以上\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	工作内容：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.负责危险废弃物及工艺车间进出料、中间产物等进行取样分析；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.负责对不明废物进行成分化验并分类，验证“废物转移联单”；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.负责样品分析方法的验证和分析检测；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	4.协助工艺试验进行必要的试样分析，提出处理工艺参数和控制指标等，为生产提供支持；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	5.协助主管完成其他分析管理工作。\r\n</p>\r\n<h5 style=\"font-size:16px;font-weight:normal;font-family:Simsun;\">\r\n	任职资格：\r\n</h5>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	1.大专及以上学历，化工类、环保类相关专业。\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	2.至少从事化工分析工作2年及以上，有危废检测经验及分析检验证书人员优先考虑。参与过分析方法建立及具体实施；\r\n</p>\r\n<p style=\"font-family:Simsun;font-size:medium;\">\r\n	3.具有良好的分析问题能力，善于沟通，组织与协调能力强。\r\n</p>',1460544334,NULL);
/*!40000 ALTER TABLE `dn_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_lianxi`
--

DROP TABLE IF EXISTS `dn_lianxi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_lianxi` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(50) NOT NULL,
  `l_hotline` varchar(20) NOT NULL,
  `l_tel1` varchar(20) NOT NULL,
  `l_tel2` varchar(20) NOT NULL,
  `l_email` varchar(50) NOT NULL,
  `l_fax` varchar(20) NOT NULL,
  `l_qq` int(13) NOT NULL,
  `l_addr` varchar(100) NOT NULL,
  `l_web` varchar(50) NOT NULL,
  `l_content` text,
  `l_erweima` char(40) DEFAULT NULL,
  `l_zhaopin` varchar(100) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_lianxi`
--

LOCK TABLES `dn_lianxi` WRITE;
/*!40000 ALTER TABLE `dn_lianxi` DISABLE KEYS */;
INSERT INTO `dn_lianxi` VALUES (1,'大庆丹诺石油科技开发有限公司','400-099-9135','+86-0000-96877','+86-0000-96877','gedajivip@163.com','010-62787884',254412001,'黑龙江省大庆市让胡路区经济开发区长信街19号','www.qshxy.com','<p style=\"font-size:14px;color:#666666;font-family:Simsun;\">\r\n	&nbsp; 大庆丹诺石油科技开发有限公司位于大庆经济技术开发区长信街19号，是生产油田机械设备和其它机械设备专业厂，总投资0.5亿元，规划占地面积33230.56平方米，总办公楼建筑面积5600平方米，厂房面积20399.98平方米。\r\n</p>\r\n<p style=\"font-size:14px;color:#666666;font-family:Simsun;\">\r\n	&nbsp; 大庆丹诺石油科技开发有限公司生产的电控换向型无游梁式抽油机（以下简称电控抽油机），本设备特别适用于长冲程、低冲次、大载荷、高粘度、中高含水期等，需重载强抽油井的采油要求，可配合大泵径、长深井、滩涂浅滩等多种复杂工况要求，适于常规陆地油井和海上石油平台的原油抽采，极大的扩展了抽油机的应用范围。\r\n</p>','a5d7039ac33f991632d7d86fb26048a2.png','李女士  18345436876        邮箱 : 124503017@qq.com');
/*!40000 ALTER TABLE `dn_lianxi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_message`
--

DROP TABLE IF EXISTS `dn_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` enum('0','1') DEFAULT '1',
  `name` varchar(10) NOT NULL,
  `dianhua` varchar(20) NOT NULL,
  `content` text,
  `m_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_message`
--

LOCK TABLES `dn_message` WRITE;
/*!40000 ALTER TABLE `dn_message` DISABLE KEYS */;
INSERT INTO `dn_message` VALUES (1,'1','赵振方','13311163521','地对地导弹',1460523330),(3,'1','第三个留言','0105-68880928','测试一下',1460525023),(4,'1','1331116352','13311163521','13311163521',1460527299),(11,'1','测试人员','13111163521','测试一下。希望可以了解一下贵公司的具体业务。',1460615337);
/*!40000 ALTER TABLE `dn_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_news`
--

DROP TABLE IF EXISTS `dn_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_news` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_pai` int(3) DEFAULT NULL,
  `n_title` varchar(100) NOT NULL,
  `n_keys` varchar(20) DEFAULT NULL,
  `n_picture` varchar(40) DEFAULT NULL,
  `n_cate` enum('公司新闻','行业新闻') DEFAULT '公司新闻',
  `n_content` text,
  `n_click` int(11) NOT NULL,
  `n_time` int(11) NOT NULL,
  `n_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_news`
--

LOCK TABLES `dn_news` WRITE;
/*!40000 ALTER TABLE `dn_news` DISABLE KEYS */;
INSERT INTO `dn_news` VALUES (1,NULL,'大庆丹诺石油科技开发有限公司大庆丹诺石油科技开发有限公司','大庆丹诺石油科技开发有限公司','148bd8afcd7bed218bf043be50b6533a.jpg','公司新闻','<span style=\"font-size:20px;\"> <span style=\"font-size:14px;\">优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作优秀的建筑设计作品是由良好团队相互协作</span><span style=\"font-size:16px;\"></span> </span>',0,1460531287,1460614532),(2,NULL,'大庆丹诺石油科技开发有限公司','大庆丹诺石油科技开发有限公司','f6697c2a1fadf2e310d7da0504287c4c.jpg','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作、共同努力的成果。对不同的项目特点、不同的建设单位、不同的地域文化，需要一支基础扎实、锐意进取的设计团队去积极创新和解决。我公司现有的技术骨干都有多年的设计经验，有着强烈的责任心和开拓创新精神，能优质按时完成建筑工程设计任务。在公司内部，</span>',1,1460531324,NULL),(3,NULL,'大庆丹诺石油科技开发有限公司','大庆丹诺石油科技开发有限公司','24e47d45922de796fe89dd87ebfb233a.png','行业新闻','<h5 style=\"font-size:20px;color:#414141;font-family:Simsun;\">\r\n	大庆丹诺石油科技开发有限公司\r\n</h5>',0,1460531367,NULL),(4,NULL,'大庆丹诺石油科技开发有限公司','大庆丹诺石油科技开发有限公司','3c3f3302c0efe705e6c2972cb2653672.png','公司新闻','<h5 style=\"font-size:20px;color:#414141;font-family:Simsun;\">\r\n	大庆丹诺石油科技开发有限公司\r\n</h5>',0,1460531403,NULL),(5,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','87d11150a132c5e1658b9cea622354bd.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>优秀的建筑设计作品是由良好团队相互协作<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>优秀的建筑设计作品是由良好团队相互协作<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533565,NULL),(6,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','420655119234fdb656136fbcb078ecd8.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533582,NULL),(7,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','2b6159e7648e09e3b4de46b8c463e48a.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533599,NULL),(8,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','a25a802cb6c32c58e889f3fdaa28b407.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533627,NULL),(9,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','8824e378b7eaad50ac55396e8605394e.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533640,NULL),(10,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','0ebe57ec4bd5df00348b09642620277a.png','公司新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533657,NULL),(11,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','83dcd10353fb72d8c95ff11733158f06.png','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533784,NULL),(12,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','5c7e67f953f942a06ceb02b91628cd80.png','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533797,NULL),(13,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','76326f954efb7b0a14d2dfad7c5cf330.png','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span><span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533810,NULL),(14,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','f31ef9648d094862e8696bfc21b0e5b2.jpg','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533833,NULL),(15,NULL,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','2d6e6e32aa5284cc9471052b0fe58515.png','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',0,1460533846,NULL),(16,2,'优秀的建筑设计作品是由良好团队相互协作','优秀的建筑设计作品是由良好团队相互协作','6c79248f6963183edff6972abffd90d1.png','行业新闻','<span style=\"color:#666666;font-family:Simsun;font-size:14px;line-height:28px;\">优秀的建筑设计作品是由良好团队相互协作</span>',32,1460533860,NULL),(17,2,'在校园文化建设中，南开大学将“用心构筑人文雅舍”作为一个重要方面。','ffffffffffffffff','ac13ce800547e13e4763261a92599ed3.png','公司新闻','<p style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\">　在校园文化建设中，南开大学将“用心构筑人文雅舍”作为一个重要方面。宿舍虽小，承载的育人使命与责任可不小，宿舍的文化氛围对宿舍成员的发展志趣、学习态度、生活习惯、行止格调等都有着重要的影响，所以南开大学努力在小宿舍上做出大文章。</span>\r\n</p>\r\n<div style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\"><img src=\"/dannuo/library/kindeditor/attached/image/20160414/20160414142525_11093.png\" alt=\"\" /></span>\r\n</div>\r\n<br />\r\n　　近年来，南开大学紧扣立德树人的根本任务，在社会主义核心价值观的特色化和具象化上下功夫，将培育和践行社会主义核心价值观落实到学生日常的学习、生活和工作中。特色化是指在阐扬“允公允能、日新月异”优秀传统中凝练核心价值观的“南开表达”，将“立公增能”内化为南开学子的文化自觉；具象化则是让核心价值观教育融入每个学生“勤学、修德、明辨、笃实”的全过程，使核心价值观的养成从易到难、由近及远，体现在学习、生活的方方面面。<br />\r\n<br />\r\n<br />\r\n　　“一室之不治，何以天下家国为？”宿舍正是学生立公增能所起步之一“室”，在这一狭陋之室中，学生们要起居、要学习、要思考、要待人接物等，要处理学习和生活的关系、处理“同室”和“邻里”的人际关系，处处都表现出每个人品行、作风、修养。南开的教育，就从践行校父严范孙所立的“容止格言”开始，它不仅悬于宿舍门前，更要浸入学生心间，时刻提醒他们要修身养性、焕发精神，成为陶铸“吾校学生之气质”的箴言，南开人“智勇真纯、文质彬彬”的气象正是得益于历久弥新的宿舍文化的熏陶与浸染。<br />\r\n<br />\r\n<br />\r\n　　我以为，宿舍文化建设之于学生培养是“养成”取代“灌输”的过程，其达成路径大致有三：一则怡情雅志、滋养身心，最大化地实现学生个体爱好特长的释放与满足；二则化育人格、寓教于行，帮助学生在人际关系的调适与磨合中修身自律、诚信友善；三则弘扬正气、凝聚认同，越来越多的“学霸”宿舍、公益宿舍的出现，实在地诠释了宿舍文化对宿舍成员集体和个体发展的不可忽视的作用。宿舍文化的培育、传承犹如家风对一个家族成员精神风貌、道德品质、审美格调和整体气质的影响，是潜移默化、润物无声的。<br />',13,1460534974,1460615130);
/*!40000 ALTER TABLE `dn_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_product`
--

DROP TABLE IF EXISTS `dn_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_pai` int(4) DEFAULT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_keys` varchar(20) DEFAULT NULL,
  `p_picture` varchar(40) DEFAULT NULL,
  `p_content` text,
  `p_click` int(9) DEFAULT '0',
  `c_id` int(11) NOT NULL,
  `p_cate` enum('机械部分','电器部分') DEFAULT '机械部分',
  `p_time` int(11) NOT NULL,
  `p_upttime` int(11) DEFAULT NULL,
  `p_intro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `dn_product_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `dn_cate` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_product`
--

LOCK TABLES `dn_product` WRITE;
/*!40000 ALTER TABLE `dn_product` DISABLE KEYS */;
INSERT INTO `dn_product` VALUES (1,NULL,'产品展示一','产品展示一','9035f2d530db0d81ad8b8d6d43116145.jpg','产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一产品展示一',0,4,'机械部分',1460429095,1460432504,'产品展示一产品展示一产品展示一产品展示一产品展示一'),(2,NULL,'产品展示二','产品展示二','da2d939e72a43cc51a02a0ff5e923844.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',3,3,'机械部分',1460429153,1460432579,'一句话介绍一句话介绍一句话介绍一句话介绍'),(3,NULL,'产品展示二','产品展示二','c23696207116a361dcb2fc004ea3c6e0.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429178,1460432602,'一句话介绍一句话介绍一句话介绍'),(4,NULL,'产品展示二','产品展示二','e7f1bf066aa8db8d18de65f6fbac2af6.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429199,1460429226,NULL),(5,NULL,'产品展示二','产品展示二','e44211207f5740d191b26c3a1e33376e.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',2,1,'机械部分',1460429259,NULL,NULL),(6,NULL,'产品展示二','产品展示二','8786dccbdf0e2a68dc3c21590251db66.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429275,NULL,NULL),(7,NULL,'产品展示二','产品展示二','b67b173fddd865e03239f2fa34083fbc.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429289,NULL,NULL),(8,NULL,'产品展示二','产品展示二','cb43cb2bc195e86f9ca86f4860b7200a.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429311,NULL,NULL),(9,NULL,'产品展示二','产品展示二','4e7e1b58c68c8bee79418c46627d7727.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二产品展示二',0,3,'机械部分',1460429677,NULL,NULL),(10,NULL,'产品展示二','产品展示二','fa38b4a06ad3e146073f632cbd7205ad.jpg','产品展示二产品展示二产品展示二产品展示二产品展示二',0,4,'机械部分',1460429695,NULL,NULL),(11,NULL,'产品展示三','产品展示三','60f01d02ca81a2c0ebd1da3869e5118e.png','产品展示三产品展示三产品展示三',0,4,'电器部分',1460429727,NULL,NULL),(12,NULL,'产品展示三','产品展示三','67681bf512d9c27a73be135410c67f76.png','产品展示三产品展示三产品展示三产品展示三产品展示三产品展示三产品展示三产品展示三产品展示三产品展示三',0,4,'电器部分',1460429744,NULL,NULL),(13,NULL,'产品展示三','产品展示三','1d0bdc560ab650dad5eb4f4f3db779ca.png','产品展示三产品展示三产品展示三',0,4,'电器部分',1460429768,NULL,NULL),(14,NULL,'产品展示三','产品展示三','9314a959f4b4cc7ad1f46709413737cf.png','产品展示三',0,4,'电器部分',1460429781,NULL,NULL),(15,NULL,'产品展示三','产品展示三','7df6d0765b35fcb8f17e658be27e764c.png','产品展示三',0,4,'电器部分',1460429798,NULL,NULL),(16,NULL,'产品展示三','产品展示三','621917584848476e2fd29ea9a28e9899.png','产品展示三',0,4,'电器部分',1460429817,NULL,NULL),(17,NULL,'产品展示三','产品展示三','c2dc4dfcc7e41fce8837794a1787f01a.png','产品展示三',0,4,'电器部分',1460429831,NULL,NULL),(18,NULL,'产品展示三','产品展示三','6b46eac63d548925a0405376e0b1b51e.png','产品展示三',0,4,'电器部分',1460429849,NULL,NULL),(19,NULL,'产品展示三','产品展示三','41181e19be395a25d420c405998fb429.png','产品展示三产品展示三',0,4,'电器部分',1460429872,NULL,NULL),(20,NULL,'产品展示三','产品展示三','391286194c67d058479deb173f975195.png','产品展示三',0,4,'电器部分',1460429886,NULL,NULL),(21,NULL,'产品选型','产品选型','05bb231031fdfda17c3f15d6d13ba7fa.jpg','产品选型产品选型产品选型产品选型产品选型产品选型产品选型产品选型产品选型',0,5,'电器部分',1460453067,1460453112,'产品选型产品选型产品选型产品选型'),(22,NULL,'钻石保养','钻石保养','ddd4c06712bc2dca4e33b704617bf973.png','钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养钻石保养',0,7,'机械部分',1460453146,1460453163,'钻石保养钻石保养钻石保养'),(23,NULL,'这是一个产品','这是一个产品','d3c54b6222d7fee1113effbbb231cc68.jpg','这是一个产品这是一个产品这是一个产品',2,6,'电器部分',1460460388,1460460425,'这是一个产品这是一个产品');
/*!40000 ALTER TABLE `dn_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_pronews`
--

DROP TABLE IF EXISTS `dn_pronews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_pronews` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_pai` int(4) DEFAULT NULL,
  `p_keys` varchar(20) DEFAULT NULL,
  `p_content` text,
  `p_click` int(9) DEFAULT '0',
  `c_id` int(11) NOT NULL,
  `p_time` int(11) NOT NULL,
  `p_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `dn_pronews_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `dn_cate` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_pronews`
--

LOCK TABLES `dn_pronews` WRITE;
/*!40000 ALTER TABLE `dn_pronews` DISABLE KEYS */;
INSERT INTO `dn_pronews` VALUES (1,NULL,'fff ','<span>产品介绍</span><span>产品介绍</span><span>产品介绍</span><span>产品介绍</span><span>产品介绍</span><span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span><span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍<span>产品介绍</span>产品介绍<span>产品介绍</span>产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍产品介绍产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍产品介绍产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍<span>产品介绍</span>产品介绍产品介绍',0,1,1460441447,1460451567),(4,NULL,'产品设计','<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span><span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span><span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span><span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span><span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计<span>产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计产品设计</span>',0,2,1460450493,1460451607);
/*!40000 ALTER TABLE `dn_pronews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dn_qita`
--

DROP TABLE IF EXISTS `dn_qita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dn_qita` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q_name` varchar(10) NOT NULL,
  `q_keys` varchar(100) DEFAULT NULL,
  `q_content` text,
  `q_time` int(11) NOT NULL,
  `q_upttime` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dn_qita`
--

LOCK TABLES `dn_qita` WRITE;
/*!40000 ALTER TABLE `dn_qita` DISABLE KEYS */;
INSERT INTO `dn_qita` VALUES (1,'人才理念','人才理念','<p style=\"color:#666666;font-size:medium;font-family:Simsun;\">\r\n	人才是企业的资本，人才是最宝贵的财富，丹诺的大门对所有有志于事业的人敞开着。\r\n</p>\r\n<p style=\"color:#666666;font-size:medium;font-family:Simsun;\">\r\n	公司的用人标准是：具备创新意识和不断进取精神。\r\n</p>\r\n<p style=\"color:#666666;font-size:medium;font-family:Simsun;\">\r\n	公司的竞争机制是：能者上，平者让，庸者下。\r\n</p>\r\n<p style=\"color:#666666;font-size:medium;font-family:Simsun;\">\r\n	公司竭尽所能做到：人适其位，位适其人。\r\n</p>\r\n<p style=\"color:#666666;font-size:medium;font-family:Simsun;\">\r\n	公司不仅通过待遇留人，公司更愿通过事业留人，感情留人。\r\n</p>',1460287919,1460542954),(2,'销售网络','销售网络','<p>\r\n	<img src=\"/dannuo/library/kindeditor/attached/image/20160410/20160410195645_30747.png\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<div class=\"dizhiLeft\" style=\"margin:0px;padding:0px;font-family:Simsun;font-size:medium;\">\r\n		<h5 style=\"font-size:20px;color:#007BC4;font-family:微软雅黑;\">\r\n			总部地址\r\n		</h5>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			大庆丹诺石油科技开发有限公司\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			地址：黑龙江省大庆市让胡路区经济开发区长信街19号\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			Tel : 0459-5963388\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			网址: www.qshxy.com\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			Q Q: 25441200\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			EML:gedajivip@163.com\r\n		</p>\r\n	</div>\r\n	<div class=\"dizhiRight\" style=\"margin:0px;padding:0px;font-family:Simsun;font-size:medium;\">\r\n		<h5 style=\"font-size:20px;color:#007BC4;font-family:微软雅黑;\">\r\n			北京分部地址\r\n		</h5>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			大庆丹诺石油科技开发有限公司\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			地址：黑龙江省大庆市让胡路区经济开发区长信街19号\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			Tel : 0459-5963388\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			网址: www.qshxy.com\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			Q Q: 25441200\r\n		</p>\r\n		<p style=\"font-size:14px;color:#666666;\">\r\n			EML:gedajivip@163.com\r\n		</p>\r\n	</div>\r\n</p>',1460289075,1460289432);
/*!40000 ALTER TABLE `dn_qita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-14 17:49:47
