-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2014 at 01:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parexons`
--
CREATE DATABASE IF NOT EXISTS `parexons` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `parexons`;

-- --------------------------------------------------------

--
-- Table structure for table `about_parexons`
--

CREATE TABLE IF NOT EXISTS `about_parexons` (
  `about_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `about_title` varchar(200) NOT NULL,
  `about_descrip` text NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `about_parexons`
--

INSERT INTO `about_parexons` (`about_id`, `about_title`, `about_descrip`) VALUES
(2, 'About Parexons', ' arrow   Parexons is a dynamic client focused IT Solutions & Services Company\r\n\r\n?\r\n\r\narrow   The prime focus of our activities is to add value to our clients by enabling them to incorporate IT technologies to lower their operational\r\n\r\n       cost, improve their performance, automate & integrate their business processes.\r\n\r\n \r\n\r\narrow   We develop, deploy IT solutions & provide services in the technology areas of Cloud Computing & Consulting, Intelligent Business\r\n\r\n       Applications,Web Solutions, Open source, Projects & Business Processes Management');

-- --------------------------------------------------------

--
-- Table structure for table `carrers`
--

CREATE TABLE IF NOT EXISTS `carrers` (
  `carrer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carrer_title` varchar(200) NOT NULL,
  `carrer_tagline` varchar(200) NOT NULL,
  `carrer_details` text NOT NULL,
  PRIMARY KEY (`carrer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `carrers`
--

INSERT INTO `carrers` (`carrer_id`, `carrer_title`, `carrer_tagline`, `carrer_details`) VALUES
(4, 'Parexons is a customer focused forward looking company.', 'The main goal of our business is to provide our clients the right solutions and services underpinned by a highly capable team of professionals.', 'At Parexons, we believe our employees are our greatest asset. Our staff''s professionalism, innovation, teamwork and dedication have been essential to our past achievements and are vital to our future success. If you would like to make a change, looking for a challenge, have an innovative mind, willing to work in a fast paced corporate environment, then join the Parexons team. We provide work environment that is conducive to learning, growth & professional development.\r\n\r\n \r\n\r\nIn a service oreinted paradigm, capabilities of the workforce are the key to future success. We, at Parexons, want to make sure that we continue to deliver the highest quality services and solutions to our customers, we recruit people who have the capabilities to constantly progress & develope, who can innovate & think outside of the box, who thrive on challenges, who are team players and excellent communicators.\r\n\r\n \r\n\r\nIf you believe that you have those guts to meet challenges and bring something incredible for the IT industry shoot us your CV at career@parexons.com and our recruitment experts will be reviewing it closely. If we find that spunk in you we will surely contact you to join us.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `product_name`, `name`, `email`, `comment`) VALUES
(6, 'Management Information System(MIS) ', 'name ', 'name@email.com', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore \r\nmagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo \r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contect_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_location` varchar(200) NOT NULL,
  `contact_address` varchar(200) NOT NULL,
  `contact_phone` varchar(200) NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `contact_cell` varchar(200) NOT NULL,
  `map_location` varchar(200) NOT NULL,
  PRIMARY KEY (`contect_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contect_id`, `contact_location`, `contact_address`, `contact_phone`, `contact_email`, `contact_cell`, `map_location`) VALUES
(2, 'PAK', 'FF-151, Deans Trade Center,  Peshawar Cantt:  Pakistan.', '0092-342-8953-521', 'business@parexons.com', 'none', 'none'),
(3, 'UK', '53, Suite 4, Croxteth Road,  Mersyside Liverpool L8 3SF  United Kingdom', '00447765604401', 'imran@parexons.com', 'none', 'none'),
(4, 'USA', '287, Tremont St  Newton, Massachusetts, 02458,  United States of America ', '001617 834 7423', 'zahoor@parexons.com', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE IF NOT EXISTS `customer_groups` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customer_groups`
--

INSERT INTO `customer_groups` (`customer_id`, `customer_name`, `description`) VALUES
(2, 'SMEs', 'Small to Medium size Enterprises are of our particular focus. We understand staying competitive in this global market with such limited resources is a big challenge for SMEs. Our service and solutions are specially designed for SMEs to give them the leverage they need in achieving their business objectives.\r\n\r\n \r\n\r\nOur Cloud Computing services are designed with SMEs requirements in mind. Our expert Cloud consulting services can lower your IT expenditure and increase profitability and efficiency. With our cloud consulting services, you can be sure that you are getting the best possible solution that is a perfect match to your requirements and budget. We identify your business requirements and your current and foreseeable future cost of provisioning your IT services and then identify the cloud services provider that fulfils your requirements with cost much lower than what you are paying for your on-premises IT services. We prepare system migration plans and prepare cloud for your applications. We then migrate and test the applications on the cloud and hand over the turnkey platform to you without any services disruption.\r\n\r\n \r\n\r\nOur Managed Hosting Services are proven winners when it comes cost saving and efficiency. You just tell us what are your current provisioning cost of IT services and your IT pain points (technology deficiencies that are holding you back from achieving your objectives) and we will put together fully managed cloud solution that will be fraction of your current cost and enable you grow your business without investing upfront in IT infrastructure and IT staff, taken care by Parexons cloud experts freeing you to focus on your business.'),
(3, 'Academia', 'Information technology have revolutionised almost all aspects of our societies and academia is no exception.   We, at Parexons, believe technology has to play bigger role in the modernisation of our academic institutions. Academic organisations have to adapt to this new teaching and training paradigm; the online teaching, which can bring tremendous benefits and huge opportunities to the academic organisations and the communities. This will enable academic organisations to reach out to audience who for some reasons cannot afford to attend on-premise classes.\r\n\r\n \r\n\r\nParexons Learning & Course Management System, Zaiwar, is designed to help academic organisations to deliver their courses and conduct exams in secure online environment. Zaiwar LMS is feature rich and customisable for all kind of online course delivery purposes but if you need further customisation then our team of experts can deliver it the way you want it. Moreover, Parexons can provide you with fully managed hosted solution for Zaiwar LMS, where you do not have to worry about maintenance, security, scalability and system administration tasks. Parexons provide you with options to avail traditional hosting solution or deploy it on the cloud for maximum scalability and resources efficiency. We can setup a demo account on our live system for you to give it try for free.'),
(4, 'Government', 'Like commercial enterprises, government departments are faced with challenges of financial & time constraints and that they are constantly under huge pressure to modernise and deliver quality services to the public. We, at Parexons, perfectly understand and looking for creative ways to help public sector organisations to fulfil their obligations most efficiently. We have extensive experience in Open Source technologies that can be leveraged to develop and deliver solutions that enable you to achieve your organisational objectives efficiently and cost effectively.\r\n\r\n \r\n\r\nGovernments across the world, developed and developing countries are looking for Open source based solutions to lower their total cost of ownership and speed up delivery time. Our team of professionals is expert in the open source solutions development, customisation and deployment. We have worked on global level projects based on open source technologies for the government sectors. We can bring that global level exposure to your project to ensure your project success.\r\n\r\n \r\n\r\nGovernment projects are usually long term, they are big projects based on high budget and tough requirements. We have got a team of developers, designers, testers, marketers, product and business analysts who can handle any project no matter how large scale it is. Our team members are highly dedicated to work and believe in professionalism, every challenging task add up something new in their career history therefore we are confident that no project is ever a failure at Parexons.'),
(5, 'Retail', 'Parexons offers Retail industry specialised services and solutions to facilitate and increase their sale activity and increase profitability. Parexons caters for the needs of all categories of retail clients.\r\n\r\n \r\n\r\nOur e-commerce solutions have been delivering tremendous value to retail sector. We have e-commerce solutions which can help your retail business go global. It is easy to use and very affordable. We can give you complete e-commerce solution ready for you to sell your product online. We provide managed hosting for your e-commerce website. We facilitate and setup your account for accepting online payments.\r\n\r\n \r\n\r\nHaving updated stock information is crucial for retail business. We provide your business with easy to use robust Inventory Management Systems that will allow you get updates on the current stock levels on click of button, generate purchase orders. We can even integrate it with your supplier computer systems to automate the product supply when stock level drops below the minimum stock levels.\r\n\r\n \r\n\r\nWe not only help our retail customer getting their business online but also provide them with services that can give them maximum exposure in their field of retail sectors. Social media like facebook, twitter, linkedin, pinterest etc have been a great business promoters recently. Companies, big and small are taking advantage of the online social media channels to promote their products and communicate with their customers. We create and managing social media campaigns for your online business to ensure your online business success.\r\n\r\n \r\n\r\nIF you are looking for an e-commerce solution, inventory management system or promoting your product online, then you should not hesitate to contact Parexons. Our professional and easy to approach staff is here to help. We will guide and train you and provide you throughout. Our retail solutions are the most competitive solutions in the market & we provide it on your terms.'),
(6, 'Non Governmental Organisations (NGOs)', 'Non-Governmental Organisations are divers and so are their technology requirements but we have covered them all. We, at Parexons, are well aware of the fact that NGOs have tight budgets and most of their fundings come from donors and public money. We, therefore, make sure that their money goes further for them and that they get the best possible value. We, therefore, have designed our services and solutions keeping their needs & constraints in mind.  So, you should be sure that when you go with Parexons for you technology fulfilment, you are going with organisation whose solutions & services are tailored to your requirements & very are cost effective.\r\n\r\n \r\n\r\nParexons can provide you IT solutions for your Payroll, Human Resource Management, Accounting, and Inventory Management, Website development, IT trainings & IT infrastructure maintenance services.\r\n\r\n \r\n\r\nParexons has also worked with NGO''s , we have designed and developed websites for NGO''s and it helped them in gaining good response from the visitors, therefore, increasing funds, aid and help to needy citizens through these channels.'),
(7, 'Financial Institutions', 'Financial institutions, banks, insurance companies, shipping companies and other such organizations seek help for complex problems; their major issue is to make their routine tasks simpler and easier. They have massive data, lengthy calculations and time consuming operations they need such a solution which should be exactly according to their business processes and can make it run fast and smooth. Parexons is helping financial institutions to go online, involve less human intervention even in most complex tasks and focus on productivity taking care of their routine work which should be transformed into a web or desktop based application.\r\n\r\n \r\n\r\nParexons has developed strong capabilities in business processes management and IT systems integration. We follow international standards and industry best practices to ensure quality. We have certified Project Management Professionals (PMP), IT Services Management Certified Professionals (ITIL) and Certified Business Process Management Professionals to take care of your most important IT projects.'),
(8, 'Telecom', 'Parexons is expanding wings and providing services to telecom industry as well. We have done few projects in telecom industry and we are looking for more challenging tasks in this area. Telecom industry is a vast field to study; there can be a number of possibilities to bring things online. If you are an emerging technology provider and you need to work on any project with some IT services providing company we are ready to shake hands. We work independently but we would like to work for mutual benefits if there is an out of the box idea.'),
(9, 'Healthcare', 'Parexons is helping health care organizations, hospitals, clinics and nursing homes to shift their routine tasks on computerized systems. We are working on medical record keeping software''s, appointment handling, patient''s record system and a number of such solutions that can make daily task easier and hassle free. You can get help for small to medium or even large health care organization from us. We are ready to map your requirements and deliver you the best suited solution for your organization.');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallary`
--

CREATE TABLE IF NOT EXISTS `image_gallary` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `full_name`, `user_name`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `management_team`
--

CREATE TABLE IF NOT EXISTS `management_team` (
  `team_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `specifications` varchar(200) NOT NULL,
  `certification` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(200) NOT NULL,
  `news_date` date NOT NULL,
  `news_details` text NOT NULL,
  `creat_date` date NOT NULL,
  `news_image` varchar(200) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_date`, `news_details`, `creat_date`, `news_image`) VALUES
(1, 'dfgs', '0000-00-00', 'sdfg', '0000-00-00', '256px-Cloud_computing_icon.svg__1.png'),
(2, 'sdfghsdfg', '0000-00-00', 'sdfg', '0000-00-00', '27935.png'),
(3, 'dfgs', '0000-00-00', 'sdfgsdfg', '0000-00-00', 'Untitled-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `prduct_summary` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `prduct_summary`) VALUES
(2, 'TourSenseKPK', 'toursense2.png', 'TourSenseKPK is the first complete and comprehensive tourist information app for KPK Pakistan. TourSenseKPK is an application to facilitate tourists who are planning to visit many tourists destinations of Khyber Pakhtunkhwa KPK in Pakistan. It provides information about places of interest, hotels to stay, restaurants to eat in and traditional gifts to buy. Users can book hotels, calculate tour cost estimates and record tour expenses in this user friendly application.'),
(3, 'Management Information System(MIS) ', '12.png', 'Projects MIS, let your organisation see information as a strategic resource and manage it accordingly. This MIS will manage your projects information and bring the right information, to the right people at the right time so that decisions can be made to improve the outputs and the impact of project interventions.'),
(4, 'My Cloude Document Management System', '22.png', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE IF NOT EXISTS `product_features` (
  `feature_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `feature` varchar(200) NOT NULL,
  `feature_ico` varchar(200) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`feature_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `product_features`
--

INSERT INTO `product_features` (`feature_id`, `feature`, `feature_ico`, `product_id`) VALUES
(1, 'Hotel Information', 'notepad-pencil-icon7.png', 2),
(2, 'Hotel Contacts', 'Address-Book-icon6.png', 2),
(3, 'Cost Estimation', '279354.png', 2),
(4, 'Places to Visit', 'icon3.png', 2),
(5, 'Activities to Enjoy', 'Apple-Download-iPhoto-9-0-1-for-iPhoto-11-Upgrade-to-Avoid-Data-Loss-26.png', 2),
(6, 'Visualise information ', 'notepad-pencil-icon8.png', 3),
(7, 'Monitor project activities', 'disk8.png', 3),
(8, 'Track project activities', 'icon4.png', 3),
(9, 'Flexible and responsive ', 'managed-services-icon1.png', 3),
(10, 'Manage the right information', 'Address-Book-icon7.png', 3),
(11, 'Lessons learned', '082008-green-grunge-clipart-icon-business-document81.png', 3),
(12, 'Success stories', 'document-plugin-logo_0_01.png', 3),
(13, 'Role based access privileges', '1password-icon-5123.png', 3),
(14, 'Easy to use ', 'search-inside-text-files4.jpg', 3),
(15, 'Neat & clean user interface ', 'comment-edit-icon2.png', 3),
(16, 'Authenticated access', 'icons_4_162.png', 4),
(17, 'View/download history', 'icons_4_03_(2)2.png', 4),
(18, 'Store, manage and track', 'search-inside-text-files5.jpg', 4),
(19, 'Document tracking', 'icon_rm_2562.png', 4),
(20, 'integrated with cloud storage', 'Cloud-Storage_(2)3.png', 4),
(21, 'Document categorization', 'Documents-icon19.png', 4),
(22, 'Easy document searching', '279355.png', 4),
(23, 'Permission based access', 'icons_4_062.png', 4),
(24, 'Document version control', 'Documents-icon20.png', 4),
(25, 'Scalable & customizable', 'free_web_design_png_icons_4_116.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `product_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_img_1` varchar(200) NOT NULL,
  `product_img_2` varchar(200) NOT NULL,
  `product_img_3` varchar(200) NOT NULL,
  `product_img_4` varchar(200) NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_img_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_img_id`, `product_img_1`, `product_img_2`, `product_img_3`, `product_img_4`, `product_id`) VALUES
(2, '2013-09-23-18-13-54.png', '2013-09-23-18-15-55.png', '2013-09-23-18-36-25.png', 'utilities.jpg', 2),
(3, 'world-bank-12.png', 'world-bank-22.png', 'world-bank-32.png', 'world-bank-13.png', 3),
(4, '1.png', '2.png', '3.png', '1.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `project_tagline` varchar(200) NOT NULL,
  `project_description` text NOT NULL,
  `project_image` varchar(200) NOT NULL,
  `project_image_2` varchar(200) NOT NULL,
  `project_image_3` varchar(200) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_tagline`, `project_description`, `project_image`, `project_image_2`, `project_image_3`) VALUES
(1, 'OPM TPMA', ' Information System', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ', 'world-bank-22.png', 'world-bank-32.png', 'world-bank-13.png'),
(2, 'Green Box', 'Remittenance Management System', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ', 'Fig-2.png', 'Fig-3.png', 'Fig-5.png'),
(3, 'My CDMS', 'Web Application', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ', '1.png', '2.png', '3.png'),
(4, 'Shawwal Luxury Buses', 'Content Management System', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. ', 'dubai.jpg\r\n', 'dubai-2.png', 'dubai.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `proposal_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `company_name` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `attachment` varchar(200) NOT NULL,
  PRIMARY KEY (`proposal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`proposal_id`, `email`, `subject`, `name`, `company_name`, `phone`, `message`, `attachment`) VALUES
(1, 0, 0, 0, 0, 0, 0, 'world-bank-21.png'),
(2, 0, 0, 0, 0, 0, 0, 'world-bank-22.png'),
(3, 0, 0, 0, 0, 0, 0, 'world-bank-23.png'),
(4, 0, 0, 0, 0, 0, 0, 'world-bank-24.png'),
(5, 0, 0, 0, 0, 0, 0, 'world-bank-25.png'),
(6, 0, 0, 0, 0, 1617, 0, '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `serv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serv_title` varchar(200) NOT NULL,
  `serv_tagline` varchar(200) NOT NULL,
  `serv_image` varchar(200) NOT NULL,
  `serv_description` text NOT NULL,
  PRIMARY KEY (`serv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serv_id`, `serv_title`, `serv_tagline`, `serv_image`, `serv_description`) VALUES
(16, 'IT Outsoursing', 'none', 'images.png', 'Parexons IT Outsourcing services offer tremendous value to clients seeking to deploy highly trained professionals, readily available, to spearhead their projects with minimum investment and maximum efficiency.    Most companies prefer hiring an offshore team rather than employing 50 persons on site which increases the project cost, requires time and effort to manage such a big team and in future when the project will be over there is no surety if the entire team will be required until there is another project of the same kind\r\n'),
(17, 'IT Maintenance', 'none', 'Featured-Image1.png', 'Parexons IT maintenance & support function is run by young & motivated team of professionals who are keen to help and ready to solve your IT problems and also take proactive measures to make sure these problems do not happen again. We have setup a support system that ensures ontime and effective resolution of your IT issues. All support calls are logged into support services database and a dediacted specialist assigned until your IT problem has been solved or issue resolved. We follow international standards and industry best practices in delivering our support and maintenance services. We have certified IT services management professionals (ITIL certified from the UK) on the team, who are specialists in their field. Our support & maintenance services are provided on the basis of Service Level Agreements (SLAs) which outlines the support services provisioning terms & conditions including response time, issues resolution period, access method, chargeback & compensation etc'),
(18, 'Cloude Computing', 'none', 'icon.png', 'Besides the too much hype that has been created about the cloud computing and the boom that it gave to the IT industry, did anyone bothered to ask what should be the strategy to implement cloud in an organization? Is that something which will be really fruitful for you? Will your business model be a best fit in the cloud? What will be the risk factors and do you really need cloud for your processing? Well, there are three major points one should consider before designing a cloud computing strategy for his/her organization. These points are'),
(19, 'App Development', 'none', 'Network-Service-icon.png', 'Desktop Application development requires much time, Expertise, a big team and budget and years of experience to create something that meets the client''s requirement and should be capable of facilitating users in a large organization ad complex business systems. Desktop Application development is considered complicated and tough as compare to web application development because the application runs offline and the purpose is to solve routine tasks, develop utilities for the staff and to bring manual systems on computer to reduce labour, time, efforts and increase productivity by providing efficient desktop applications'),
(20, 'Web Developement', 'none', 'managed-services-icon.png', 'Parexons Pvt Ltd is a reputable name in web application development industry, where everyone is running after name Parexons is striving to maintain its reputation and t bring improvement in her work. The successful web applications projects can be viewed in the portfolio section of this website. To give you an idea of our process flow for web application development, we tart with gathering requirements from you and prepare a dummy application, once you approve the dummy application we move on to next step and our challenging and dynamic developers starts working on it within few hours of approval. We try our level best to deliver the product in strict deadlines and we make it a win-win situation every time'),
(21, 'Mobile Applications', 'none', 'images-mobile-20apps-250x250.png', 'Parexons believe that both combined, mobile websites — that is, responsive websites — and mobile apps can have a huge impact on shopping. Thus, armed with a responsive site and a platform-specific mobile app, will provide retail merchants with multiple customer touch points. Moreover, these two mobile properties, the interactive site and mobile app, will promote and complement each other thus resulting in excellent customer experience and increased sale');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slide_title` varchar(200) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) NOT NULL,
  `image_3` varchar(200) NOT NULL,
  `content_1` varchar(200) NOT NULL,
  `content_2` varchar(200) NOT NULL,
  `content_3` varchar(200) NOT NULL,
  `content_4` varchar(200) NOT NULL,
  `content_5` varchar(200) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slide_title`, `image_1`, `image_2`, `image_3`, `content_1`, `content_2`, `content_3`, `content_4`, `content_5`) VALUES
(1, '', '1password-icon-512.png', '241.jpg', 'Address-Book-icon.png', 'sdfg', 'sdfg', 'sdfg', 'dfgs', 'sdfgs'),
(2, 'zdfgs', '1password-icon-5121.png', '2411.jpg', 'Address-Book-icon1.png', 'sdfg', 'sdfg', 'sdfg', 'dfgs', 'sdfgs');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE IF NOT EXISTS `solutions` (
  `sol_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sol_title` varchar(200) NOT NULL,
  `sol_tagline` varchar(200) NOT NULL,
  `sol_image` varchar(200) NOT NULL,
  `sol_description` text NOT NULL,
  PRIMARY KEY (`sol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`sol_id`, `sol_title`, `sol_tagline`, `sol_image`, `sol_description`) VALUES
(3, 'Cloude Hosting', 'none', 'cloude-hosting.png', 'Parexons have solved this problem and managing cloud hosting is not a big deal anymore. We adopt technology that matches your business processes. Your business applications and underlying infrastructure is delivered to you on the basis of your requirements, you pay for what you consume, with 99.9 % guaranteed up-time and fully managed by our expert professionals. You can now imagine your business running on top class IT infrastructure at fraction of the cost. There are several advantages of shifting your business to the cloud:'),
(4, 'Cloude Storage', 'none', 'cloud-storage.png', 'There is a variety of cloud storage solutions available, having different features, different level of operational performances, security levels, interoperability, monitoring levels and cost models. It is very important to choose a storage solution that is affordable and right for your business requirement. Parexons has developed extensive capabilities in most of the major cloud storage solutions providers like Amazon Simple Storage Systems (S3), AWS Storage Gateway, Google Drive, CETRA Cloud Attached Storage, and EMC & NetApp. So why not talk to our experts to asses your storage requirements and give you a solution that is best fit to your business needs and budget.'),
(5, 'Virtual Private Cloude', 'none', 'private-cloud.png', 'A VPC- Virtual Private Cloud is basically a private cloud but it is shared within a public cloud or in other words inter-clouds. VPC- Virtual Private Cloud is a best option for those who are looking for dedicated and private cloud technology but cannot afford or get into the hassle of managing hardware, infrastructure, by utilizing virtual private network one can provide IT services to all departments in the same company. By using VPC you will be focusing on resources and not hardware therefore increasing performance and productivity rather than increasing budget. The core features of virtual private cloud are'),
(6, 'E-Commerce', 'none', 'e-commerce-2.png', 'E-Commerce or electronic commerce is a vastly used term on internet. Without a presence of e-store it is simply impossible to get good sales and pace up your ROI. More buyers are looking for online product catalogues, e-store, online stock lists, products and services to purchase. An e-commerce based website or solution is a complete product or service catalogue which is offered online to make orders and do safe transactions online'),
(7, 'Business Inteligence', 'none', 'business-intillegnce.png', 'Business Intelligence is a technique which utilizes computer technology and business insight to analyse, extract and organize data, mostly business related data to create reports, graphs, charts, tables for the purpose of identifying patterns and trends that can help business decision makers to formulate strategies and future course of action for their business to compete and succeed. Applications that can manage data in such a way that it can be used to forecast sales, analyse revenue and design future business strategies on the basis of available information can be very powerful tool for your business'),
(8, 'IT Consultancy Services', '', 'icon5.png', 'Parexons is providing IT consulting from small to medium and large scale organizations. Share your business requirements with us or the problems that you are facing, we will be helping you with the most appropriate solution for your business. We not only suggest the solution but we will also work on providing this solution to you.\r\n\r\n \r\n\r\nWe are a team of expert IT consultants working in the field of IT since last decade. We have provided IT solutions to a number of organizations; you can view our portfolio to get a better idea of where we stand. We have worked on complex problems and completed challenging tasks within strict deadlines. If the foundation is strong the rest of the project stands firmly and completes successfully. Therefore we assure maximum analysis before project initiation and our consultancy works great to accomplish your goals.');

-- --------------------------------------------------------

--
-- Table structure for table `solutions_features`
--

CREATE TABLE IF NOT EXISTS `solutions_features` (
  `sol_feature_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sol_feature` varchar(200) NOT NULL,
  `sol_id` int(11) NOT NULL,
  PRIMARY KEY (`sol_feature_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `specification` varchar(200) NOT NULL,
  `certification` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `photo`, `designation`, `qualification`, `specification`, `certification`, `email`, `phone`, `details`) VALUES
(3, 'Sajjad Ali', 'sajjad-ali1.jpg', 'Chief Executive Officer', 'MSc Software & System Engineering - Glasgow University, UK  BE (Hons) - Engineering University Peshawar, Pak', 'Strategies & Leadership, Projects & Business Processes Management, Cloud Computing, Big Data Business Intelligence, eCommerce ', 'PMP (Project Management) ITIL (IT Services Mgmt.) OCEB (Business Processes)', 'business@parexons.com', '0092-91-5603-326', 'Sajjad has more than 15 years of IT experience delivering projects in different parts of the world, with companies ranging from mid, large to multinationals (Schlumberger, Clogau Gold UK, KACST Saudi Arabia, CosmoSeis UAE, ProAct Intl. UK). Sajjad holds MSc degree in Software and Systems Engineering from the University of Glasgow, UK. He is certified Project Management Professional (PMP) from PMI, USA & ITIL – certified IT Services Management Professional, from BCS - UK, and also OCEB (Certified Expert in Business Processes Management) UK.\r\n\r\nSajjad'' s focus and expertise include Leadership & Management direction, Strategy Development, Project Management, Business Processes Management, IT Services Management & Cloud Computing. He is also very hands on with JAVA, C, PHP, MySQL, Oracle, Web Content Management Systems, Linux, and also an Open Source Technology Visionary.\r\n\r\nSajjad is leading Parexons as an Executive Director & CEO.'),
(4, ' Ghulam Mustafa Khan  ', 'ghulam_mustafa_khan_pic.jpg', 'Business Development Manager', 'MSc Computer Science, University of Peshawar, Pak', 'Strategies & Leadership, Project Management, Business Consultation, Business Development', '', '', '', 'Mustafa Khan is business strategist, IT industry vetern, now focused on taking Parexons forward after a varied career that has spanned the entire technology and business horizons. Mustafa has more than 30 years of experience in IT. He has served Pakistan Air Force as Director IT (Group Captain) & also worked as head of IT in various Banks and IT companies. He has also served projects of Asian Development Bank, Canadian International Development Agency, USAID and other international organizations. He has a diversified experience in IT project management, system analysis & designing, IT strategy development, business development, customer relationship and IT trainings delivery.\r\n\r\n \r\n\r\nMr. Mustafa is amongst the pioneers of establishing IT education and industry in Pakistan.\r\n\r\n \r\n\r\nMr Mustafa is taking Parexons forward as business development manager & an experienced mentor.'),
(5, ' Bahadar Ali  ', 'bahadar-ali.png', 'Lead Web Engineer', 'M.Sc Computer Science University of Peshawar Pakistan', 'Web 2.0 Concepts and Technologies  Software Quality Assurance Project Management and Testing ', '', '', '', 'Bahadar Ali has wide ranging experience in all stages of Web and software development lifecycle, from concept and development through quality assurance (QA) and tuning.\r\n\r\nHe is highly versed in Web 2.0 concepts with skills in creating websites with RSS, social networking, games, and video capabilities. Bahadar has in-depth understanding of security, SEO, and optimization to maximize site performance. He has extensive knowledge and on-hands experience in information architecture, web design, project management, and testing.\r\n\r\nBahadar Ali holds M.Sc Degree in Computer Science from the University of Peshawar and is taking Parexons forward as Senior Web Engineer. '),
(6, ' Zahoor Ali  ', 'sir_zahoor_pic.jpg', 'Director Technology', 'MSc Computer Science (Intelligent Systems) , Sweden  MIT Gomal University, Pak', 'Big Data, Business Intelligence, Cloud Computing, Quality Assurance ', '', '', '', '\r\n\r\nZahoor holds MSc Computer Science degree in intelligent systems from Sweden and Ireland (Erasmus Scholar). He is MIT (Master of Information Technology) with Specialization in Information Systems from Gomal University, Pakistan.\r\n\r\n \r\n\r\nZahoor has designed and developed variety of Management Information Systems (MIS) e.g. Human Resource Management Information System, Financial Management Information System, Billing & Collection System, Inventory System, Citizen’s Complaint Tracking System, Projects & Program Monitoring System and he is the pioneer of Poverty Classification Information System (based on poverty score card).\r\n\r\n \r\n\r\nZahoor areas of expertise include building predictive models for automating real life processes, software system analysis and design, Open Source Technologies, Mobile devices application development, Databases, Client server application development (program writing), Information Systems design, Testing Software Systems, Implementation of information systems (transition from legacy manual systems), Research in computer science for discovering solutions faced by industry, Delivering Trainings, Data cleaning, Designing and development of intelligent decision support systems, Report writing, Financial Management Systems Designing and Development. He has been delivering IT trainings at organizational level and conducted trainings at Government and Private sectors, which includes on job trainings.\r\n\r\n \r\n\r\nMr. Zahoor is serving Parexons as Director Technology & based in the US, leading Parexons operations in the US and Canada\r\n'),
(7, ' Imran Khan    ', 'sir_imran_khan_pic.jpg', 'Business Development Manager & HR Manager', 'MSc Human Resource Management - University of Liverpool, UK  LLB - University of Peshawar, Pak', 'Human Resource Management, Business Development, Trainings, Corporate Legal Affairs ', '', '', '', '\r\n\r\nImran has more than 6 years of experience in Human Resource and Business development. He holds MSc degree in Human Resource Management from the University of Liverpool, UK and LLB from the University of Peshawar.\r\n\r\n \r\n\r\nImran has an excellent insight into HR and business processes and has good experience in utilizing, customizing HR tools and systems. Prior to Parexons, he was working with Marks & Spencer, UK & Oxfam.\r\n\r\n \r\n\r\nImran Specialities include highly developed interpersonal skills, HR management, business development and client relationship.\r\n\r\n \r\n\r\nHe is taking Parexons forward as a HR Manager & Manager Business Development in the UK.\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
