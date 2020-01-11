-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2020 at 04:02 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwfnrxmy_erkclouds`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` text,
  `description` text CHARACTER SET utf8 NOT NULL,
  `repeater` text CHARACTER SET utf8,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `repeater`, `created_at`, `updated_at`) VALUES
(1, '尔康云有限公司', 'about/2019/11/xwKnanP6UBoJlTCeQeEmxmYnn6IkoDgvijuNn5mP.png', '<p>武汉尔康云科技公司是拥有重庆情报所下属的国内首家专业从事医学信息收集，医用数据库开发的大型医学情报服务机构。远秋科技下属有三个分公司、一个数据加工基地、20余个自主知识产权的产品；经过10多年发展，公司在此领域拥有20多项行业核心技术，具有全球竞争力，是中国极少数掌握IT产业核心技术的软件公司之一。&nbsp;</p><p>远秋科技拥有：一支由美国海归博士牵头，结合国内一流软件开发技术人员组成的50人核心开发团队及遍及全国的销售网络；20余家国内一流医学院校及附属医院和科研机构合作单位；100多位国内一流医学名家及情报信息专家提供技术指导；200多位专业制作工程师为技术依托。</p><p>目前，远秋公司共拥有国内20多个省1000多家医疗行业客户，客户有卫生厅、卫生局、医院等，其研发的相关产品《中国医疗信息资源管理培训平台》、《全科医师培训系统》、《住院医师规范化培训平台》、《护士培训平台》、《乡村医生培训平台》，其中医学教育类产品多次获得国家、省市级一等奖。</p>', '[{\"name\":\"2012\\u5e7410\\u6708\\u83b7\\u5f97\\u91cd\\u5e86\\u5e02\\u6559\\u80b2\\u6210\\u679c\\u4e00\\u7b49\\u5956\"},{\"name\":\"2012\\u5e7412\\u6708\\u83b7\\u5f97\\u4e2d\\u534e\\u533b\\u5b66\\u4f1a\\u53ca\\u4e2d\\u56fd\\u9ad8\\u7b49\\u6559\\u80b2\\u5b66\\u4f1a\\u8bfe\\u9898\\u6210\\u679c\\u4e00\\u7b49\"},{\"name\":\"2013\\u5e741\\u6708\\u83b7\\u91cd\\u5e86\\u79d1\\u6559\\u6210\\u679c\\u4e00\\u7b49\\u5956\"},{\"name\":\"2017\\u5e74\\u83b7\\u5f97\\u91cd\\u5e86\\u5e02\\u9ad8\\u65b0\\u6280\\u672f\\u4f01\\u4e1a\\u79f0\\u53f7\"}]', '2020-01-10 15:55:33', '2020-01-10 22:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `image`, `created_at`, `updated_at`) VALUES
(4, 'account/2019/12/SJuTKKTREdDlfyukEDj3sH8junsQUy2lBxXtF6Yn.jpeg', '2019-12-19 01:37:51', '2019-12-19 01:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, '公共卫生', '2019-08-05 10:36:34', '2019-08-13 10:32:28'),
(7, '疾病防治', '2019-08-05 10:37:09', '2019-08-13 10:32:48'),
(8, '健康教育', '2019-08-05 10:38:39', '2019-08-13 10:33:16'),
(9, '妇幼保健', '2019-08-09 10:37:35', '2019-08-13 10:33:01'),
(10, '中医中药', '2019-08-09 10:37:41', '2019-08-13 10:33:30'),
(11, '养生保健', '2019-08-09 10:37:46', '2019-09-21 05:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `title`, `company_name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, '王志维（湖北省人民医院12333 )', '王志维（湖北省人民医院566', '中南医院', '<p><strong>科室及职务</strong>：胸心外科主任兼心血管外科主任；武汉大学心血管病研究所副所长兼心血管外科研究室主任。</p><p>\n</p><p><strong>诊疗专长</strong>：非体外循环心脏不停跳下冠脉搭桥术、深低温停循环下全弓替换术治疗Ⅰ型主动脉夹层、心脏移植术治疗终末期心脏病、各种复杂先心病及心脏瓣膜疾病、冠脉搭桥术及主动脉夹层及动脉瘤手术，手术成功率在98%以上，达到国际先进水平。</p><p>\n</p><p><strong>学术任职与荣誉</strong>: 兼任中华胸心血管外科学会委员；中国医师协会心血管外科分会委员，湖北省胸心血管外科学会副主任委员，武汉市心胸外科专业委员会副主任委员，武汉市医疗事故技术鉴定专家库专家。</p><p>\n</p><p><strong>科研成果</strong>：主持国家级及湖北省重大科研项目10项，获得8项省市科技进步奖，发表论文100余篇，2015年获湖北省科技进步一等奖和武汉市科技进步一等奖。</p><p>\n</p><p><strong>门诊时间</strong>：星期一上午，星期四下午（知名专家门诊）</p><p>\n\n</p><p><strong>联系方式</strong>：027-88041919-82081</p>', 'doctor/2019/12/o5dTXyCwVhDFvgTTdYKI6K7nAEg4AuC0uIivTNuq.jpeg', '2020-01-10 15:54:00', '2020-01-10 22:54:00'),
(6, '程翔', '教授、主任医师，博士生导师。', '中南医院', '<p><strong>科室及职务：</strong>心血管内科。曾任武汉大学人民医院院长。</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>诊疗专长：</strong>复杂及疑难重症心血管病、风湿性心脏病、心律失常、心力衰竭、冠心病。被广大患者和权威媒体誉为&ldquo;听诊大王&rdquo;。</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>学术任职与荣誉：</strong>国务院政府特殊津贴专家、湖北省有突出贡献专家。&ldquo;我国介入心脏病的开拓者之一&rdquo;。&nbsp;曾兼任中国介入心脏病学会副主任委员、中国心功能学会副主任委员、中国生物医学工程学会委员、中国生物医学工程学会心脏起搏与电生理分会副主任委员、湖北省生物医学工程学会副理事长、湖北省心血管病学会副主任委员、武汉市心血管病学会副主任委员、中华医学会武汉分会副会长、《中国心脏起搏与心电生理杂志》常务副主编、《微循环学杂志》副主编、《中华心律失常学杂志》、《临床内科杂志》编委等20余个学术职务。</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>科研成果：</strong>主持完成国家自然科学基金、卫生部基金及省市级20多个科研项目，取得科研成果20余项，获国家科技进步二等奖2项，湖北省科技进步一等奖3项，二等奖7项，三等奖11项。发表论文220余篇（SCI源期刊5篇），主编专著5部，参编10部。</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>门诊时间：</strong>星期一下午（知名专家门诊）</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>联系方式：</strong>027-88041919-82916</p>', 'doctor/2019/12/Z0lSCLzPrFMgswCU6FV3xlcTaayJHtMD7hRSvKFO.jpeg', '2019-12-27 06:16:12', '2019-12-27 00:46:04'),
(7, '叶梅（中南医院）', '主任医师，副教授', '中南医院', '<p>2008-2010年在美国Johns Hopkins University（约翰霍普金斯大学）医学院医学系消化内科做博士后研究工作，主要从事炎症性肠病发病机制、生物标志物及新的治疗靶点研究。 现任武汉大学中南医院综合医疗科消化病区主任， 担任国家自然科学基金面上项目、青年基金及重点项目一审评委，湖北省高级卫生技术职务及湖北省卫计委重点项目评审专家，中华医学会消化病学分会第十届委员会老年消化协作组成员，中国老年医学学会理事，武汉市医学会第十七届消化专业委员会委员，武汉老年医学会常务理事，湖北省老年病防治与保健临床研究中心学术委员会委员，湖北省老年医学会老年保健学会委员等职务， 从事消化系统疾病和老年病学临床、教学和科研工作十余年，具有全面系统扎实的消化内科及老年病学理论知识，对于多种消化系疾病的诊治具有丰富的临床经验。主要研究方向是炎症性肠病、肠黏膜免疫以及消化道肿瘤及癌前病变的诊断与防治。主持国家自然科学基金面上项目、湖北省自然科学基金等多项科研项目。</p>', 'doctor/2019/12/hngBXnrC2aAlRQ5Yrr0KneTwBpapY211kyL7UI1t.jpeg', '2020-01-10 15:54:52', '2020-01-10 22:54:52'),
(8, '程翔', '主任医师、教授、博士生导师、心内科副主任。', '中南医院', '<p>所在科室：心血管内科</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>专业专长： 长期致力于各种心血管常见病的诊治，特别擅长冠心病、心力衰竭、血脂异常、高血压、心肌病和心房颤动的诊断和治疗。</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>哈佛大学访问学者。国家杰出青年基金获得者，教育部新世纪优秀人才，中华医学会心血管病学分会青年委员，中国病理生理学会心血管专业青年委员会委员，国际心脏研究会（ISHR）中国分会执委会青年委员，湖北省医学会心血管病学分会委员。《临床心血管病杂志》常务编委，《中国医学前沿杂志（电子版）》编委。</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>&nbsp;&nbsp;致力于心血管疾病免疫学和遗传学发病机理研究。主持国家自然科学基金七项，教育部新世纪优秀人才支持计划一项，作为课题骨干参与国家973项目两项，获科研经费1000余万元。在Nat Genet, J Clin Invest及J Am Coll Cardiol等国际权威期刊以第一作者或通讯作者发表SCI收录论文30余篇，总影响力因子190分，SCI杂志他引700余次。获省科技进步一等奖一项，二等奖两项，参编《心脏病学》、《心血管病免疫学》等专著，获国家发明专利一项。熟练掌握心血管各种介入操作，包括冠状动脉造影术和支架术等。</p>', 'doctor/2019/12/jxp88ytmOmak99hhNrQMsYeYHJGqQf7v09cm0kyo.jpeg', '2020-01-10 15:54:13', '2020-01-10 22:54:13'),
(9, '陈志坚', '主任医师、教授、博士生导师', '中南医院', '<p>所在科室：心血管内科</p><p>\n\n</p><p>专业专长： 主要从事心脏电生理与心律失常的基础和临床研究，独立或指导他人完成各种心律失常的射频消融3000余例，对复杂心律失常及心血管复杂疑难重症的诊治有丰富经验。</p><p>\n\n</p><p>&nbsp;</p><p>\n\n</p><p>心内科副主任、现任中国医师协会心血管内科医师分会心律失常专业委员会全国委员、中国医药生物技术协会心电学技术分会全国委员、中国医药信息学会心脏监护专业委员会专家委员、湖北省心电生理与起搏学会常委、湖北省预防医学会心血管疾病预防与控制专业委员会常委、湖北省心血管内科质量控制中心办公室主任、武汉市医学会心血管分会常委及心律失常学组副组长、武汉市医学会心电学专业委员会副主任委员、《中华诊断学电子杂志》、《临床心血管病杂志》和《临床急诊杂志》常务编委。独立承担国家自然科学基金面上项目2项，参加国家级课题（包括973计划和863项目）数项，发表专业学术论著40余篇，参与编写《临床心律失常学》、《心电图学》等国家级权威专业著作数部。</p>', 'doctor/2019/12/2LutxvXuS2xdFVtGVJNAOaTGQjV5LjcKgSv9LREc.jpeg', '2020-01-10 15:54:43', '2020-01-10 22:54:43'),
(10, '王杨淦（中南医院）', '现任武汉大学中南医院心血管内科教授', '中南医院', '<p>1986年毕业于同济医科大学医疗系，随后在同济医科大学附属同济医院心内科工作10余年，师从我国著名心血管病专家陆再英教授，于1995年获得心内科博士学位。先后在国际知名高校德国慕尼黑科技大学心脏中心，美国德克萨斯大学达拉斯西南医学中心和美国EMORY大学进修和工作15年。&nbsp;在美国EMORY大学成立了首个心衰实验室，获得EMORY大学科研基金150万美元，同时获得美国国立卫生研究院（NIH）和美国心脏学会&nbsp;(AHA)&nbsp;课题资助150多万美元，培养博士研究生，博士后研究员和临床专科医生10余人。</p><p>\n\n</p><p><strong>学术任职：</strong>现任美国心脏学会国家课题评审委员和3份美国SCI医学杂志的编委以及10余份国际心血管病SCI杂志的审稿人。</p><p>\n\n</p><p><strong>科研方面：</strong>近10年内发表心血管病SCI研究论文30余篇，共计期刊影响因子160余分。是美国医学院校教材《MUSCLE》的编委和我国全国医药院校英文版统编教材《内科学》副主编，获得国家自然科学基金面上项目和重大项目各1项。</p>', 'doctor/2019/12/v04gSF9rnGLWMPzLGoJf5t402ey3jdXdj5RkrJ1x.jpeg', '2020-01-10 15:54:25', '2020-01-10 22:54:25'),
(11, '王增珍', '王增珍', '中南医院', '<p>1977年毕业于原武汉医学院并留校工作，1986年获得医学硕士学位，1988-89年在美国北卡大学公共卫生学院作访问学者，先后担任原同济医科大学公共卫生学院预防医学教研室主任，教授，中华医学会临床流行病学专业委员会常务委员。现任华中科技大学同济医学院公共卫生学院流行病与卫生统计学系教授，预防医学博士生导师，应用心理学硕士生导师，同济医学院心理咨询中心高级心理咨询师，兼任武汉市预防医学会常务理事，湖北省心理卫生协会常务理事，国家禁毒委中国毒品滥用防治专家委员会委员，司法部司法行政戒毒工作专家咨询委员会委员、亚洲药物滥用研究学会副理事长，湖北省戒毒矫治研究会副会长、湖北省婚姻家庭研究会会长、华中科技大学中英文学报等多种杂志编委，享受国务院特殊津贴。从事疾病防治研究，特别是宫颈癌防治研究和预防教育十多年，从事成瘾行为防治研究、心理咨询与治疗工作及研究多年，承担完成国家自然科学基金委员会和国务院的研究项目多项，发表疾病预防、成瘾行为心理干预论文160余篇，出版专著四部。</p>', 'doctor/2019/12/7FsRUbWSPLU3cbRoDdXDTu5zyPj5SroohPUTUbsN.jpeg', '2020-01-10 15:54:34', '2020-01-10 22:54:34'),
(12, '成蓓', '成蓓', '中南医院', '<p>教授、博导，华中科技大学同济医学院附属协和医院综合科主任，心内科副主任，中华心血管病学会委员，湖北省老年病学会主任委员。享受国务院特殊津贴。</p>', 'doctor/2020/01/jHyNqJpiWzofeOQ4OoBb5wyEiwjt1U0ri5a5kzNh.jpeg', '2020-01-10 15:52:28', '2020-01-10 22:52:28'),
(13, '戴春林', '戴春林', '中南医院', '<p>中国医促会亚健康专业委员会副秘书长，湖北专家团团长。华中科技大学同济医学院附属协和医院中西医结合主任。</p>', 'doctor/2019/12/OJ6IlDyZvpKwVCpmS3EQqdeLPEeWoukzwfdVhnfE.jpeg', '2020-01-10 15:53:30', '2020-01-10 22:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(255) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicals`
--

CREATE TABLE `medicals` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `shortdes` text,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicals`
--

INSERT INTO `medicals` (`id`, `title`, `shortdes`, `description`, `category`, `button`, `link`, `image`, `created_at`, `updated_at`) VALUES
(4, '医疗卫生信息资源培训平台', '<p>医疗卫生信息资源培训平台</p>', '<p>尔康云医疗健康大数据服务平台被称为未来的＂网上医院＂、＂网上医科大学＂、＂网络医学百科全书＂。</p><p>尔康云平台是由湖北尔康云数据科技有限公司和中国医疗健康国际交流促进会亚健康专业委员会湖北专家团主办。湖北尔康云数据科技有限公司是由国家科技部重庆情报研究所下属重庆远秋科技有限公司、湖北中宇邦联投资有限公司等于2016年10月19日在武汉注册成立。中国医促会湖北专家团是由华中科技大学附属同济医学院、同济医院、协和医院退休的副教授（副主任医师）以上专家组成。尔康云数据平台包括六大模块三十多个子系统。是中国第一个直接针对临床诊疗的大型医用数据库，它把最新出版的1800余册权威医学书籍、4000多个全科系的经典视频、音频及课件，国内外各种最新医学学朮研究进展及成果以及釆集全国三十多家知名三甲医院各种病例丶临床特征丶疾病研究丶诊疗等数据信息形成的大数据库。该研究成果曾获中华医学会科技一等奖丶重庆市科技一等奖。</p><p>本平台医疗诊疗系统包含了12000多种疾病的诊疗数据库、6300多种临床症状数据库丶2100多种中医数据库、6000多种疾病国际国内最前缘的研究进展及治疗方法和预防措施、1300多项医院常见检查方法及数据丶14000多种常见药品的详细介绍、3000多种治疗操作规范、500多种疾病路径数据库以及包括临床医学学历教育考试（学生考试）、三基考试（医师三基、护理三基）、职称考试（医师和护士的执业资格考试，中、高级职称考试）数据库。题库试题总量计100余万道题。每项考试均有在线练习和在线考试功能。</p><p>&nbsp;</p><p>&nbsp;该平台是把医疗卫生行业各类传统资源进行深度开发和加工，使之电子化﹑数据库化以满足医疗行业快速增长的数字化信息资源和单位管理现代化的需求，为广大用户提供最有价值的医学数字资源的同时，更为广大用户带来更为便捷有效的自有资源数字化管理方案，从而提高医务工作者的医学知识理论水平和业务技能，提升单位的知名度和影响力。</p><p>《中国医疗信息资源管理平台》有八个网状链接的子系统构成：</p><p><strong>医院诊断治疗系统&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;医学在线考试系统</strong></p><p><strong>医学视频库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;医学图谱库</strong></p><p><strong>临床药理库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;精品图书库&nbsp;&nbsp;</strong></p><p><strong>卫生管理库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;临床病例数据库</strong></p><p>&nbsp;</p><p><strong>《中国医疗信息资源管理平台》的实用价值：</strong></p><p>·为学校的医，科，教，研提供极大方便，</p><p>·极大提高资源综合利用率，</p><p>·增进工作效率及学习能力，</p><p>·提高医务工作者业务技能和管理水平，</p><p>·节省经费，加速单位信息化建设；</p><p>·创建一个学习型，数字化，现代化医疗卫生单位。</p>', 'Database Resources', 'Submit', 'http://www.erkhealth.com/', 'medical/2019/11/vXCX7OTyNuefDj42Ri0BazjoWtHylVuO1NnwLNBB.png', '2020-01-10 15:56:54', '2020-01-10 22:56:54'),
(7, '医学在线考试系统', '<p>医学在线考试系统</p>', '<p>系统采用通用的试题库管理软件，适用于各级各类医学院校和医院，内容包含临床医学学历教育考试（学生考试）、三基考试（医师三基；护理三基）、职称考试（医师和护士的执业资格考试，中级职称考试，高级职称考试）以及计算机、英语、财务等其它考试。题库试题量总计30余万道题。每项考试有在线练习和在线考试功能。</p><p>&nbsp;&nbsp;《医学在线考试系统》可为用户机构节约大量纸张以及印刷、监考、阅卷、录入数据的人工费用；同时，由于成本降低，试题库不仅用于考试，也可大量用于教学、训练、复习，使试题库利用率大大提高；更重要的是实现了无限多的平行卷、同场异专业年级、计算机自动评分等功能从根本上杜绝了考试作弊行为，使考评人才的考试手段更加公正、更具有权威性。</p><p>&nbsp;《医学在线考试系统》在传统的在线考试系统基础上增加了试题难易度分析功能，自动组卷功能，从卷组卷功能；试卷分析功能：试卷难易度分析更能，试卷信度、区分度发、离散度功能；一级考生分析统计和全文检索功能</p><p><br></p><p><strong>产品实用价值</strong></p><p>提升应试人员的通过率</p><p>提高医疗行业从业人员的整体素质与水平,满足医院执业应试人员复习与提高需求,提高应试水平与能力</p><p>满足医院硕士研究应试人员的复习与提高需求,提高应试水平与能力</p><p>满足卫生系统从业人员业务能力水平考核的专业平台</p><p>满足卫生行业继续教育工作开展和从业人员自我学习与提高的需求</p>', 'Database Resources', 'Submit', 'http://www.erkhealth.com', 'medical/2019/11/08bVRohFAtyRe3ujk3EDxl8QPcS11gjuWUBwnf16.png', '2020-01-10 15:56:33', '2020-01-10 22:56:33'),
(11, '医院诊断治疗系统', '<p>医院诊断治疗系统</p>', '<p>医院疾病诊断治疗系统是中国第一个直接针对临床诊疗的大型医用数据库，它把最新出版的1800余册权威<a href=\"http://221.122.76.214:8030/%E9%94%80%E5%94%AE%E6%96%87%E4%BB%B6/%E6%96%B0%E5%BB%BA%E6%96%87%E4%BB%B6%E5%A4%B9/%E5%8C%BB%E9%99%A2%E8%AF%8A%E6%96%AD%E6%B2%BB%E7%96%97%E7%B3%BB%E7%BB%9F%E6%96%B0%E8%AF%BE%E4%BB%B6/%E8%AF%8A%E6%96%AD%E5%8F%82%E8%80%83%E4%B9%A6%E7%9B%AE.doc\" target=\"_blank\">医学书籍</a>；4000余个全科系的经典视频、音频及课件；国内外各种最新学术研究进展与成果。在医学名家指导和协助下进行深度挖掘和加工，使之电子化﹑数据库化，从而建成了中国第一个直接针对临床的大型标准医用数据库。</p><p>包括10个网状链接的子数据库，均可按多种方式进行查询：</p><p><strong>疾病诊断数据库&nbsp;&nbsp;药品数据库</strong></p><p><strong>临床症状数据库&nbsp;&nbsp;疾病路径数据库</strong></p><p><strong>中国医学数据库&nbsp;&nbsp;临床理论数据库</strong></p><p><strong>实验检查数据库&nbsp;&nbsp;操作规范系统</strong></p><p><strong>疾病研究数据库&nbsp;&nbsp;ICD-9；ICD-10查询系统</strong></p><p>&nbsp;</p><p><strong>开发历程</strong></p><p>2004年我单位开始了庞大的数据收集整理，框架设计工作，并同与我单位深度合作的800多家医疗单位进行了许多艰苦的数据处理，挖掘，资源整合工作。</p><p>2005年该系统第一个版本产生并推向市场</p><p>2010我们和西南医院三军医大开始全科医生远程继续教育培训体系及平台项目深度合作，得获得国家立项，其项目中的核心系统-----医院疾病诊断治疗系统得到了进一步完善和升华。</p><p>2011年5月医院疾病诊断治疗系统经过6次改版，200多人400多天努力终于成功推出，一进入市场获得了极大的支持和认可。</p><p>&nbsp;</p><p><strong>实用价值</strong></p><p>显著降低医疗事故率，减少误诊、漏诊，规范医疗操作。</p><p>提高医务工作者的信息素养和信息能力，快速提高医务工作者业务水平。</p><p>降低医疗事故赔偿，节约权威书籍、培训、图书、视频、课件等等经费。</p>', 'Database Resources', 'Follow Link', 'http://www.erkhealth.com/', 'medical/2019/11/fDtHsgmAuQKXkrCAqIZpSrUAkFV9NzRIsoqfXnqn.png', '2020-01-10 15:57:09', '2020-01-10 22:57:09'),
(12, '临床病例数据库', '<p>临床病例数据库</p>', '<p>尔康云医疗健康大数据服务平台被称为未来的＂网上医院＂、＂网上医科大学＂、＂网络医学百科全书＂。</p><p>尔康云平台是由湖北尔康云数据科技有限公司和中国医疗健康国际交流促进会亚健康专业委员会湖北专家团主办。湖北尔康云数据科技有限公司是由国家科技部重庆情报研究所下属重庆远秋科技有限公司、湖北中宇邦联投资有限公司等于2016年10月19日在武汉注册成立。中国医促会湖北专家团是由华中科技大学附属同济医学院、同济医院、协和医院退休的副教授（副主任医师）以上专家组成。尔康云数据平台包括六大模块三十多个子系统。是中国第一个直接针对临床诊疗的大型医用数据库，它把最新出版的1800余册权威医学书籍、4000多个全科系的经典视频、音频及课件，国内外各种最新医学学朮研究进展及成果以及釆集全国三十多家知名三甲医院各种病例丶临床特征丶疾病研究丶诊疗等数据信息形成的大数据库。该研究成果曾获中华医学会科技一等奖丶重庆市科技一等奖。</p><p>本平台医疗诊疗系统包含了12000多种疾病的诊疗数据库、6300多种临床症状数据库丶2100多种中医数据库、6000多种疾病国际国内最前缘的研究进展及治疗方法和预防措施、1300多项医院常见检查方法及数据丶14000多种常见药品的详细介绍、3000多种治疗操作规范、500多种疾病路径数据库以及包括临床医学学历教育考试（学生考试）、三基考试（医师三基、护理三基）、职称考试（医师和护士的执业资格考试，中、高级职称考试）数据库。题库试题总量计100余万道题。每项考试均有在线练习和在线考试功能。</p><p>&nbsp;</p><p>&nbsp;该平台是把医疗卫生行业各类传统资源进行深度开发和加工，使之电子化﹑数据库化以满足医疗行业快速增长的数字化信息资源和单位管理现代化的需求，为广大用户提供最有价值的医学数字资源的同时，更为广大用户带来更为便捷有效的自有资源数字化管理方案，从而提高医务工作者的医学知识理论水平和业务技能，提升单位的知名度和影响力。</p><p>《中国医疗信息资源管理平台》有八个网状链接的子系统构成：</p><p><strong>医院诊断治疗系统&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;医学在线考试系统</strong></p><p><strong>医学视频库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;医学图谱库</strong></p><p><strong>临床药理库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;精品图书库&nbsp;&nbsp;</strong></p><p><strong>卫生管理库&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;临床病例数据库</strong></p><p>&nbsp;</p><p><strong>《中国医疗信息资源管理平台》的实用价值：</strong></p><p>·为学校的医，科，教，研提供极大方便，</p><p>·极大提高资源综合利用率，</p><p>·增进工作效率及学习能力，</p><p>·提高医务工作者业务技能和管理水平，</p><p>·节省经费，加速单位信息化建设；</p><p>·创建一个学习型，数字化，现代化医疗卫生单位。</p>', 'Database Resources', 'Submit', 'http://www.erkhealth.com/', 'medical/2019/11/k6YDBE7WfLbkJHsQC2fT6lwQOFQv5UVGJiFaMaEh.png', '2020-01-10 15:57:21', '2020-01-10 22:57:21'),
(13, '在职护士培训系统', '<p>在职护士培训系统</p>', '<p>护理服务是医院无形资产的重要组成部分， 使不同职称、不同专业的护理人员更方便、快捷的掌握理论知识</p>', 'Database Resources', 'Submit', 'http://www.erkhealth.com/', 'medical/2019/11/2NsF9vp6ii0D2kVFVbYwapXe2WXiHd0Yn6u959w3.png', '2020-01-10 15:57:34', '2020-01-10 22:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, '公司', '2019-08-28 08:42:30', '2019-08-28 13:42:30'),
(11, 'test 3', '2019-09-21 05:14:39', '2019-09-21 05:14:39'),
(12, 'arpit', '2019-12-24 14:43:02', '2019-12-24 14:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `category_id` int(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`id`, `title`, `category_id`, `description`, `image`, `created_at`, `updated_at`) VALUES
(9, '2012年10月获得重庆市教育成果一等奖', 9, '<p><strong style=\"color: rgb(31, 73, 125);\">年10月获得重庆市教育成果一等奖 </strong></p><p><strong style=\"color: rgb(31, 73, 125);\">年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖年10月获得重庆市教育成果一等奖</strong></p>', 'news/post/2019/11/jZMivh7BmfMA4ZjRzNEEJnQdrodlDP0Q4GaC5GEH.png', '2019-12-11 11:44:02', '2019-12-11 06:13:56'),
(10, '2012年12月获得中华医学会中国高等教育学会课题成果一等奖', 9, '<p><strong style=\"color: rgb(31, 73, 125);\">年12月获得中华医学会中国高等教育学会课题成果一等奖</strong></p>', 'news/post/2019/11/U0numWnSPzUoAzzJDokWjUTx16kSlwW8Fq8zIxq4.jpeg', '2019-11-13 12:26:39', '2019-11-13 06:56:41'),
(11, '2013年1月获重庆科教成果一等奖', 9, '<p><strong style=\"color: rgb(31, 73, 125);\">年1月获重庆科教成果一等奖</strong></p>', 'news/post/2019/11/PvVbSFPSKRuzCnHUo0xBhbt6ml2KAfNND2xjDH5F.jpeg', '2019-11-13 12:26:20', '2019-11-13 06:56:23'),
(13, '公司扩张', 9, '<p>武汉成立大数据研究中心</p>', 'news/post/2019/11/zAFEg0pbqOSOmIenRhMuoCaF8NrZNsUlaVrJAJC3.jpeg', '2019-11-13 11:24:26', '2019-11-13 05:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `other_categories`
--

CREATE TABLE `other_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_categories`
--

INSERT INTO `other_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '健康自测', '2019-08-14 05:27:07', '2019-08-14 07:35:10'),
(2, '在线交流', '2019-08-14 05:27:36', '2019-08-14 07:36:14'),
(3, '人才招聘', '2019-08-14 05:28:09', '2019-08-14 07:36:44'),
(4, '关于我们', '2019-08-14 05:28:15', '2019-08-14 07:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `other_posts`
--

CREATE TABLE `other_posts` (
  `id` int(11) NOT NULL,
  `title` mediumtext CHARACTER SET utf8 NOT NULL,
  `category_id` int(255) NOT NULL,
  `description` mediumtext CHARACTER SET utf8 NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_posts`
--

INSERT INTO `other_posts` (`id`, `title`, `category_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Yang Wei (Central South Hospital)', 1, '<p>医院疾病诊断治疗系统是中国第一个直接针对临床诊疗的大型医用数据库，它把最新出版的1800余册权威<a href=\"http://221.122.76.214:8030/%E9%94%80%E5%94%AE%E6%96%87%E4%BB%B6/%E6%96%B0%E5%BB%BA%E6%96%87%E4%BB%B6%E5%A4%B9/%E5%8C%BB%E9%99%A2%E8%AF%8A%E6%96%AD%E6%B2%BB%E7%96%97%E7%B3%BB%E7%BB%9F%E6%96%B0%E8%AF%BE%E4%BB%B6/%E8%AF%8A%E6%96%AD%E5%8F%82%E8%80%83%E4%B9%A6%E7%9B%AE.doc\" target=\"_blank\" style=\"color: rgb(0, 123, 255); background-color: transparent;\">医学书籍</a>；4000余个全科系的经典视频、音频及课件；国内外各种最新学术研究进展与成果。在医学名家指导和协助下进行深度挖掘和加工，使之电子化﹑数据库化，从而建成了中国第一个直接针对临床的大型标准医用数据库。</p><p>包括10个网状链接的子数据库，均可按多种方式进行查询：</p><p><strong>疾病诊断数据库&nbsp;&nbsp;药品数据库</strong></p><p><strong>临床症状数据库&nbsp;&nbsp;疾病路径数据库</strong></p><p><strong>中国医学数据库&nbsp;&nbsp;临床理论数据库</strong></p><p><strong>实验检查数据库&nbsp;&nbsp;操作规范系统</strong></p><p><strong>疾病研究数据库&nbsp;&nbsp;ICD-9；ICD-10查询系统</strong></p>', '2019-08-19 00:07:09', '2019-08-19 05:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `category_id` int(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `website_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `description`, `website_image`, `created_at`, `updated_at`) VALUES
(3, '财政部：中国医疗卫生占财政支出比重提升至7%', 6, '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">分享到：&nbsp;腾讯&nbsp;新浪&nbsp;人人网&nbsp;邮件&nbsp;收藏夹&nbsp;复制网址</span></p>', '', '2019-08-13 10:36:21', '2019-08-13 16:36:21'),
(4, '医院、医生注意啦！史上最严的医保监管来袭！', 6, '<h3 class=\"ql-align-center\">医院、医生注意啦！史上最严的医保监管来袭！</h3><p><br></p>', '', '2019-08-13 10:34:59', '2019-08-13 16:34:59'),
(5, '三部委印发智慧健康养老产业发展行动计划', 6, '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">分享到：&nbsp;腾讯&nbsp;新浪&nbsp;人人网&nbsp;邮件&nbsp;收藏夹&nbsp;复制网址</span></p>', '', '2019-08-13 10:35:52', '2019-08-13 16:35:52'),
(18, '孕妇微笑是胎儿的最好胎教', 9, '<h3 class=\"ql-align-center\">孕妇微笑是胎儿的最好胎教</h3><p><br></p>', '', '2019-08-13 23:34:04', '2019-08-14 05:34:04'),
(19, '孕妇选择文胸内裤的10个对策', 9, '<h3 class=\"ql-align-center\">孕妇选择文胸内裤的10个对策</h3><p><br></p>', '', '2019-08-13 23:33:31', '2019-08-14 05:33:31'),
(21, '胎宝宝缺氧也会“发脾气”', 9, '<h3 class=\"ql-align-center\">胎宝宝缺氧也会“发脾气”</h3><p><br></p>', '', '2019-08-14 05:34:25', '2019-08-14 05:34:25'),
(22, '孕期水肿的原因和防治措施', 9, '<h3 class=\"ql-align-center\">孕期水肿的原因和防治措施</h3><p><br></p>', '', '2019-08-14 05:34:41', '2019-08-14 05:34:41'),
(23, '“三伏”何所惧孕妇巧应对', 9, '<h3 class=\"ql-align-center\">“三伏”何所惧孕妇巧应对</h3><p><br></p>', '', '2019-08-14 05:34:53', '2019-08-14 05:34:53'),
(24, '夏日减肥要科学 饮食运动忌触“雷”', 11, '<h3 class=\"ql-align-center\">夏日减肥要科学 饮食运动忌触“雷”</h3><p><br></p>', '', '2019-08-14 05:35:08', '2019-08-14 05:35:08'),
(25, '长期消化不良或是癌症症状 当心这些癌症征兆！', 11, '<h3 class=\"ql-align-center\">长期消化不良或是癌症症状 当心这些癌症征兆！</h3><p><br></p>', '', '2019-08-14 05:35:34', '2019-08-14 05:35:34'),
(26, '放假狂吃喝节后减肥忙 当心“刮油”三大误区', 11, '<h3 class=\"ql-align-center\">放假狂吃喝节后减肥忙 当心“刮油”三大误区</h3><p><br></p>', '', '2019-08-14 05:35:46', '2019-08-14 05:35:46'),
(27, '老年人养生三大误区需注意', 11, '<h3 class=\"ql-align-center\">老年人养生三大误区需注意</h3><p><br></p>', '', '2019-08-14 05:36:02', '2019-08-14 05:36:02'),
(28, '身体缺水发出“求救信号” 你真的会正确喝水吗', 11, '<h3 class=\"ql-align-center\">身体缺水发出“求救信号” 你真的会正确喝水吗</h3><p><br></p>', '', '2019-08-14 05:36:13', '2019-08-14 05:36:13'),
(29, '我国科学家发现1445种新RNA病毒 科研成果在《自然》发表', 7, '<h3 class=\"ql-align-center\">我国科学家发现1445种新RNA病毒 科研成果在《自然》发表</h3><p><br></p>', '', '2019-08-14 05:37:07', '2019-08-14 05:37:07'),
(30, '疾控专家：雾霾与耐药菌无必然因果联系', 7, '<h3 class=\"ql-align-center\">疾控专家：雾霾与耐药菌无必然因果联系</h3><p><br></p>', '', '2019-08-14 05:37:20', '2019-08-14 05:37:20'),
(31, '国家卫计委将在全国建126个监测点 加强雾霾科学防控', 7, '<h3 class=\"ql-align-center\">国家卫计委将在全国建126个监测点 加强雾霾科学防控</h3><p><br></p>', '', '2019-08-14 05:37:32', '2019-08-14 05:37:32'),
(32, '卫计委提醒公众春节平衡膳食戒烟限酒 过健康年', 7, '<h3 class=\"ql-align-center\">卫计委提醒公众春节平衡膳食戒烟限酒 过健康年</h3><p><br></p>', '', '2019-08-14 05:37:42', '2019-08-14 05:37:42'),
(33, '十三五\"防艾计划:老年人首次被列入防控重点人群', 7, '<h3 class=\"ql-align-center\">十三五\"防艾计划:老年人首次被列入防控重点人群</h3><p><br></p>', '', '2019-08-14 05:37:53', '2019-08-14 05:37:53'),
(34, '北京·西山中医药文化季启动 指导老人养生', 10, '<h3 class=\"ql-align-center\">北京·西山中医药文化季启动 指导老人养生</h3><p><br></p>', '', '2019-08-14 05:38:03', '2019-08-14 05:38:03'),
(35, '“食疗”“药膳” 为何屡屡走入药材滥用误区？', 10, '<h3 class=\"ql-align-center\">“食疗”“药膳” 为何屡屡走入药材滥用误区？</h3><p><br></p>', '', '2019-08-14 05:38:15', '2019-08-14 05:38:15'),
(36, '中医诊疗指南编制要重视古籍文献研究', 10, '<h3 class=\"ql-align-center\">中医诊疗指南编制要重视古籍文献研究</h3><p><br></p>', '', '2019-08-14 05:38:30', '2019-08-14 05:38:30'),
(37, '习近平致信祝贺中国中医科学院成立60周年李克强作出批示表示祝贺', 10, '<h3 class=\"ql-align-center\">习近平致信祝贺中国中医科学院成立60周年李克强作出批示表示祝贺</h3><p><br></p>', '', '2019-08-14 05:38:42', '2019-08-14 05:38:42'),
(38, '中医药应融入生活　要改“处方药思维”', 10, '<h3 class=\"ql-align-center\">中医药应融入生活　要改“处方药思维”</h3><p><br></p>', '', '2019-08-14 05:38:54', '2019-08-14 05:38:54'),
(39, '为什么说人工智能其实是人工智障', 6, '<h3 class=\"ql-align-center\">为什么说人工智能其实是人工智障</h3><p><br></p>', '', '2019-08-14 05:39:30', '2019-08-14 05:39:30'),
(40, '人社部：生育险与医保合并 并非“五险变四险”', 6, '<p>	24日，人力资源和社会保障部举行生育保险和基本医疗保险合并实施试点工作会议，计划于今年6月底前在12个试点地区启动两险合并工作。人社部强调，两险合并实施并不是简单地将生育保险并入医保，而是要保留各自功能，实现一体化运行管理。</p><p class=\"ql-align-center\">	</p><p>	人社部副部长游钧说，合并实施不是简单地将生育保险并入医疗保险，而是在保留各自制度功能的前提下，按照新的发展理念，通过制度政策衔接、整合资源，实现一体化运行管理服务，探索建立更具协调、灵活、高效的运行机制，包括参保扩面机制、待遇保障机制、基金管理机制、医疗服务激励约束机制、统一经办管理机制。</p><p>	要按照两项保险的制度要求和运行管理的客观规律，统一参保登记，进一步扩大生育保险覆盖人群，更好地发挥生育保险的保障功能。统一基金征缴和管理，确保基金征缴到位、监管到位、支出管理到位，杜绝跑冒滴漏。统一医疗服务管理，借鉴医疗保险管理措施和平台，规范生育医疗服务行为。统一经办和信息服务，提升社保经办服务水平，确保经办业务不中断，参保群众更便捷，社保信息更安全。要确保职工生育期间的生育保险待遇不变。同时，要妥善处理好合并实施的制度和政策衔接。</p><p>	现在部分媒体和社会公众认为合并实施就是“五险变四险”，这种理解是不全面、不准确的。人社部医疗保险司副司长颜清辉在访谈中介绍，实际上，与医疗保险相比，生育保险还是具有独特功能的社会保障政策，作为一项社会保险险种，还有保留的必要：</p><p>	一是生育保险具有维护女性平等就业权益和女职工劳动保护的独特功能。</p><p>	二是生育保险强调雇主责任，职工个人是不需要缴纳生育保险费的。</p><p>	三是生育保险待遇也与医保待遇不一样，比如符合规定的生育医疗费用是实报实销的，生育保险基金还要支付生育津贴。</p><p class=\"ql-align-center\">	</p><p>	实际上生育津贴是生育保险基金支付的大头，约占基金支出的60%以上。通过生育津贴的支付，能够有效均衡不同用人单位负担、有利于促进妇女公平就业。</p><p><br></p><p><br></p><p>	</p>', '', '2019-08-14 05:39:55', '2019-08-14 05:39:55'),
(41, '70后想生二孩 先检查子宫好不好', 8, '<h3 class=\"ql-align-center\">70后想生二孩 先检查子宫好不好</h3><p><br></p>', '', '2019-08-14 05:40:09', '2019-08-14 05:40:09'),
(42, '翻来覆去睡不着？可能是你服药“姿势”不正确!', 8, '<h3 class=\"ql-align-center\">翻来覆去睡不着？可能是你服药“姿势”不正确!</h3><p><br></p>', '', '2019-08-14 05:40:20', '2019-08-14 05:40:20'),
(43, '出汗越多越好？春季运动的六大误区', 8, '<h3 class=\"ql-align-center\">出汗越多越好？春季运动的六大误区</h3><p><br></p>', '', '2019-08-14 05:40:31', '2019-08-14 05:40:31'),
(44, '早期不良抚育或增精神疾病风险', 8, '<h3 class=\"ql-align-center\">早期不良抚育或增精神疾病风险</h3><p><br></p>', '', '2019-08-14 05:40:43', '2019-08-14 05:40:43'),
(45, '国家食药局通告十家药批企业飞检结果', 8, '<h3 class=\"ql-align-center\">国家食药局通告十家药批企业飞检结果</h3><p><br></p>', 'health/2019/12/IJTEm7Wlk2ZCIZ7nWkjXgESnvgepAZx2CKsdnvrR.png', '2019-12-11 07:09:24', '2019-12-11 01:39:18'),
(46, 'Image Test', 11, '<p>Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post Image Test Post </p>', 'health/2019/12/8xflti03f5z6UGsgrhxXOmHqXE79PmE6JPWjGQUJ.png', '2019-12-11 10:49:28', '2019-12-11 05:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `prod_purchase`
--

CREATE TABLE `prod_purchase` (
  `id` int(10) UNSIGNED NOT NULL,
  `sale_id` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '(0 => Not Completed / 1 => Completed)',
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_purchase`
--

INSERT INTO `prod_purchase` (`id`, `sale_id`, `user_id`, `prod_id`, `status`, `valid_from`, `valid_to`) VALUES
(1, '5dea0db9b815b', 1, 11, 1, '2019-12-01', '2020-01-01'),
(2, '5dea12eb146b9', 1, 12, 0, '2019-10-10', '2019-12-10'),
(3, '5dea13082de08', 1, 12, 1, '2019-09-01', '2019-12-01'),
(4, '5dea22a8194f2', 1, 13, 0, '2019-12-06', '2020-03-06'),
(5, '5dea369d2a585', 1, 11, 0, '2019-12-06', '2020-01-06'),
(6, '5dea36f355270', 1, 13, 1, '2019-12-06', '2020-03-06'),
(7, '5df0c484af513', 1, 4, 0, '2019-12-11', '2020-01-11'),
(8, '5df8afbec1338', 1, 7, 0, '2019-12-17', '2020-03-17'),
(9, '5df8b0b3a7d89', 1, 12, 0, '2019-12-17', '2020-03-17'),
(10, '5df8b12895d7b', 1, 12, 0, '2019-12-17', '2020-01-17'),
(11, '5df8b16837907', 1, 12, 0, '2019-12-17', '2020-01-17'),
(12, '5df9e09e98fe3', 1, 7, 1, '2019-12-18', '2020-03-18'),
(13, '5e1216d53dbfb', 1, 11, 0, '2020-01-05', '2020-02-05'),
(14, '5e12d7a43a7e2', 12, 11, 1, '2020-01-06', '2020-04-06'),
(15, '5e13dc7fd064c', 13, 11, 1, '2020-01-07', '2020-02-07'),
(16, '5e13f6fbbb0e3', 1, 11, 0, '2020-01-07', '2020-02-07'),
(17, '5e1698377d48f', 11, 4, 0, '2020-01-09', '2020-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, 'slider/2019/11/4zGQTcCAzlHGirjc5xdc13fnjaLDy2F3g5xEhSKP.png', '2019-11-12 06:18:47', '2019-11-12 06:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) DEFAULT '0',
  `image` text,
  `age` int(11) DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$kv04wpOzhm.KXhb2xUcgteaYz8mFSGeLAbO7BrkJlQgJO3/wbPFJi', 1, 'user/2020/01/Qdudb39SCBw1Yd121RNPflQGaGpUQbmUf2v4nviY.jpeg', 28, '2MifLTWK1dTHPMK5X2Rlxh5ikp9VtjZSKEn2oxIuK8cR4x7ZJaF4SQVpQpcE', '2019-08-02 05:05:53', '2020-01-08 17:17:59'),
(2, 'Arpit Tiwari', 'arpit@gmail.com', '$2y$10$i27Xm9A7.uHyy.18geDcc.IqLRuDDKlu6i9zMTrjapd56PILap1Y2', 0, 'user/2019/12/rytr2V7UteIHot0rqp5ErQgMIxDexjD7ma6bTxe2.jpeg', 36, '3wOugcvtRB6rHCPOd93UAZAkqx2EC3bpfIyxbcvkTwDrRhQJ5hErLIAv7Fze', '2019-08-02 05:15:33', '2019-12-24 09:21:17'),
(3, 'Srivastava', 'pawan@gmail.com', '$2y$10$8V/AHwXgx/kx2HcCAvp/mOGnBwlXpmE6QciHJ1RHjlx5SL5WyhRui', 0, 'user/2019/12/ozg8ZtMULKnIZtI2JE7LTxrjc7fgBfcBbFn5lcJu.jpeg', 52, 'upsRPoPhFt6QR7GzbnGQXTzJkeIOFWS0TPvZnr1K1FhJVf6VlgtUP6VNfo6g', '2019-08-12 05:10:00', '2019-12-24 09:21:23'),
(4, 'Abc', 'john@gmail.com', '$2y$10$u2Q/BiqtYkdocyOjJ8phyeLWGA5NwV9mxdCi88llvBaBQ60Hrxy2O', 0, 'user/2019/12/IKRuwV5WRqcS0ikfOGtUJhvxkT6Z5VD4jrxsOnWb.jpeg', 54, 'SOrjcyvYr1dCNdkDNvVX1qmYZjq6nKNAqoAGeJz8JRzr5bTMYOzEVpUSjLfj', '2019-08-12 05:12:09', '2019-12-24 09:21:30'),
(5, 'Singh', 'josh@gmail.com', '$2y$10$cRyh4FOoE6bTmE5h959WF.k8Dxwq6Y/ytXADs0fhWFIjvWvicMINO', 0, 'user/2019/12/6fcPPghrQExY3GaYNz3zOCTCNVl8SNvLdfGH8gvV.jpeg', 36, 'mKbZzzRFHhW1qIopMAA255zRX7C2x2qd8d32zWZLwmxKhssiUlNWudJE9Znt', '2019-08-19 09:19:08', '2019-12-24 09:21:37'),
(6, '忠', '791584531@qq.com', '$2y$10$.QYqUscee4YfyIbhHQYiD.V4DDeELfwsynYKIzSxljuwa0W2pqqBq', 0, 'user/2019/12/KiJwfCw8rCLqgJWvS90aj7bSN4vI4dDxzkMI9S8N.jpeg', 85, NULL, '2019-08-27 07:35:10', '2019-12-24 09:21:45'),
(7, 'tiwari', 'rahul@gmail.com', '$2y$10$8yjUrC9Dy77zQIFCqE9S6ulkQ6yHyTUiqGEitwYYV1q1MCpyeFIG2', 0, 'user/2019/12/vcCUPULXJrlykXdq1BIBY6M5xdXxTsTwQytsWEo5.jpeg', 0, NULL, '2019-08-27 13:16:09', '2019-12-24 09:21:58'),
(8, '李', '498908798@qq.com', '$2y$10$sM8NI0VjQwvSwqun1yR08O9Xwi4EsuYyIwbuFZkQu7WC9z/8XaWdO', 0, 'user/2019/12/XuVtMOi8rBe4tMZBFkTgC9XhxkEZSIeQgLewmTEM.jpeg', 0, 'oh0iBsVeiBfH5A3rOp9DMN0pJTgM1xa8Q9XM14TaZxrsKc7CkagvCO59UOXW', '2019-09-05 08:27:49', '2019-12-24 09:22:06'),
(9, '寒冰', '785180478@qq.com', '$2y$10$D1wIsTt2MApY42wSLItexeNRzB4/eFRD7L4Tah2JEIQafnNRkh2l6', 0, 'user/2019/12/EKqWNpv8M9fXJrCk4hwnKAJNZAZyZxHHDVuhLj4e.jpeg', 0, 'pINAFv8vDegWGtKPBdxORDot6mbCTV5Dx0mfMzMJC4hzyQce2nlmjolAswyx', '2019-09-05 09:44:21', '2019-12-24 09:22:46'),
(10, 'Tiwari', 'arpittiwari1212@gmail.com', '$2y$10$sqt7krkB6RbXbwiymYR1BO1oD1vWZHIIB84Ht.a6PblI.PAYcEyAu', 0, 'user/2019/12/NjEwaR7cY5iLq415g72HBEP3kbf7jAmUYdKx1pGf.jpeg', 68, 'Hh9GIUSj3d2hhhSYSbDy0kAtWD3dvYolBoReXWExt884nwTq3sAH3eTHRX4x', '2019-11-20 07:10:25', '2019-12-24 09:22:39'),
(11, 'test', 'test@gmail.com', '$2y$10$3pqS9pkle1FORKYvD46mTunDCF6dSMoiJEXoGuIOLqJAs5slNAtvm', 0, 'user/2020/01/lCjcq9MaGXWXRvvGGa0Kmqg4yIWNv9cjNfyvs383.jpeg', 23, 'my44hWxCU3Pfe0j3uVhCc1qLiP87Xaa3gVfASMnMpjoKC3oqRAtGBAzfgKUL', '2019-12-03 09:38:09', '2020-01-09 07:46:51'),
(12, 'T.', 'van@gmail.com', '$2y$10$Vf1oPf3SBLWWuiARXX/wLutlcIF/EPbutnd.cxVVvxe34dmYbJsU2', 0, 'user/2020/01/G9n1o8t48z7V6YK2KeVIfE8Q79LC7PyRW8t6KpGn.jpeg', 35, NULL, '2020-01-06 13:43:41', '2020-01-06 19:02:38'),
(13, 'James', 'james@gmail.com', '$2y$10$ifM0FQzIq0czyDWl5N9/vOfBGXXDSwOc3JWVi69GUgfcreRw6XXNW', 0, 'user/2020/01/ENEARKzPWbZB1VzUY1jFNDiAOVGk3GlLrBF1B3iX.jpeg', 25, NULL, '2020-01-07 08:17:00', '2020-01-07 08:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `websitedynamics_posts`
--

CREATE TABLE `websitedynamics_posts` (
  `id` int(255) NOT NULL,
  `website_title` text CHARACTER SET utf8,
  `website_description` text CHARACTER SET utf8,
  `website_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websitedynamics_posts`
--

INSERT INTO `websitedynamics_posts` (`id`, `website_title`, `website_description`, `website_image`, `created_at`, `updated_at`) VALUES
(6, '消息公告消息公告消息公告消息公告消息公息公告消息公公 TITLE', '<p>消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告告消息 公告消息公告消息公告消息公告消息公告 DESC</p>', 'website_dynamics/2019/11/COWVpzRSOMJsrhN2qGnw0OYtvBpxexfw2XUP8N8U.png', '2019-12-11 07:54:46', '2019-12-11 02:24:40'),
(7, '消息公告消息公告消息公告消息公告消息公告消消息公告消息公公', '<p>消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告告消息 公告消息公告消息公告消息公告消息公告</p>', 'website_dynamics/2019/11/RvpnN3tG85b0jEWCZFzQ5PmgJYz7ZOZjNqz0Y0BA.png', '2019-11-22 06:29:19', '2019-11-22 00:59:11'),
(8, '消息公告消息公告消息公告消息公告消息公公', '<p>消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告消息公告告消息 公告消息公告消息公告消息公告消息公告</p>', 'website_dynamics/2019/11/oWPOtmQmAG9gV0WDsHbDW7C1NzqqJPm8iLn7HdC2.png', '2019-11-22 06:29:10', '2019-11-22 00:59:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicals`
--
ALTER TABLE `medicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_posts`
--
ALTER TABLE `news_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_categories`
--
ALTER TABLE `other_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_posts`
--
ALTER TABLE `other_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_purchase`
--
ALTER TABLE `prod_purchase`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sale_id` (`sale_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websitedynamics_posts`
--
ALTER TABLE `websitedynamics_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicals`
--
ALTER TABLE `medicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_posts`
--
ALTER TABLE `news_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `other_categories`
--
ALTER TABLE `other_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other_posts`
--
ALTER TABLE `other_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `prod_purchase`
--
ALTER TABLE `prod_purchase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `websitedynamics_posts`
--
ALTER TABLE `websitedynamics_posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
