{\rtf1\ansi\ansicpg1252\cocoartf1561\cocoasubrtf200
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx566\tx1133\tx1700\tx2267\tx2834\tx3401\tx3968\tx4535\tx5102\tx5669\tx6236\tx6803\pardirnatural\partightenfactor0

\f0\fs24 \cf0 -- phpMyAdmin SQL Dump\
-- version 4.7.3\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:3306\
-- Generation Time: Jan 26, 2018 at 03:28 PM\
-- Server version: 5.6.35\
-- PHP Version: 7.1.1\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `booking_db`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `admin`\
--\
\
CREATE TABLE `admin` (\
  `admin_id` int(11) NOT NULL,\
  `username` varchar(100) NOT NULL,\
  `password` varchar(200) NOT NULL,\
  `role` varchar(20) NOT NULL,\
  `admin_avatar` varchar(200) NOT NULL,\
  `admin_created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),\
  `power` varchar(20) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;\
\
--\
-- Dumping data for table `admin`\
--\
\
INSERT INTO `admin` (`admin_id`, `username`, `password`, `role`, `admin_avatar`, `admin_created_at`, `power`) VALUES\
(1, 'admin@homelight.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'uploads/images/avatar/4660823115a3bb5b5b30b1.', '2018-01-24 15:18:53.363969', 'super'),\
(21, 'admin@solarsaver', '5115fe2490cd14d7805404fc260148db', 'admin', 'uploads/images/avatar/8004335985a1d4a22876cf.png', '2017-11-28 11:36:02.578637', ''),\
(22, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'uploads/images/avatar/16687883115a4d25cf727b2.', '2018-01-03 18:49:51.469200', '');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `agent`\
--\
\
CREATE TABLE `agent` (\
  `agent_id` int(11) UNSIGNED NOT NULL,\
  `agent_name` varchar(255) DEFAULT NULL,\
  `agent_age` varchar(100) DEFAULT NULL,\
  `agent_location` varchar(255) DEFAULT NULL,\
  `agent_reference` varchar(255) DEFAULT NULL,\
  `agent_picture` varchar(255) DEFAULT NULL,\
  `agent_mobile` varchar(255) DEFAULT NULL,\
  `agent_email` varchar(255) DEFAULT NULL,\
  `agent_gender` varchar(255) DEFAULT NULL,\
  `token` varchar(255) DEFAULT NULL,\
  `status` varchar(10) DEFAULT NULL,\
  `agent_password` varchar(255) DEFAULT NULL,\
  `role` varchar(20) DEFAULT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `agent`\
--\
\
INSERT INTO `agent` (`agent_id`, `agent_name`, `agent_age`, `agent_location`, `agent_reference`, `agent_picture`, `agent_mobile`, `agent_email`, `agent_gender`, `token`, `status`, `agent_password`, `role`) VALUES\
(1, 'Mr. Test Account', '10', 'Shahi Eidgah', 'google.com', 'Profile Image', '017550422442', 'test@gmail.com', 'Male', '0000', '1', 'c33367701511b4f6020ec61ded352059', 'user');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `appartment`\
--\
\
CREATE TABLE `appartment` (\
  `appartment_id` int(11) UNSIGNED NOT NULL,\
  `appertment_price` varchar(255) DEFAULT NULL,\
  `bed` varchar(100) NOT NULL,\
  `bath` varchar(100) NOT NULL,\
  `style` varchar(100) NOT NULL,\
  `place` varchar(100) NOT NULL,\
  `space` varchar(100) NOT NULL,\
  `overview` varchar(255) NOT NULL,\
  `service_type` varchar(100) NOT NULL,\
  `service` varchar(100) NOT NULL,\
  `sub_place` varchar(100) NOT NULL,\
  `current_status` varchar(11) NOT NULL COMMENT '0 = pending , 1= confimed, 2 = cancel',\
  `flag` varchar(11) NOT NULL,\
  `appartment_title` varchar(100) NOT NULL,\
  `time_created` varchar(100) NOT NULL,\
  `agent_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `appartment`\
--\
\
INSERT INTO `appartment` (`appartment_id`, `appertment_price`, `bed`, `bath`, `style`, `place`, `space`, `overview`, `service_type`, `service`, `sub_place`, `current_status`, `flag`, `appartment_title`, `time_created`, `agent_id`) VALUES\
(1, '20000', '5', '3', 'duplex', ' Sylhet', '2400', '                                                awesome house \\r\\n             \\r\\n             \\r\\n            ', 'Sell', 'Appartment', ' Uposhohor', '1', 'update', 'shikimi vila', '2018-01-24 16:36:45', 1);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `bath_image_table`\
--\
\
CREATE TABLE `bath_image_table` (\
  `bath_image_id` int(11) NOT NULL,\
  `bath_image_url` varchar(255) NOT NULL,\
  `appartment_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `bath_image_table`\
--\
\
INSERT INTO `bath_image_table` (`bath_image_id`, `bath_image_url`, `appartment_id`) VALUES\
(1, 'uploads/images/service/bath-images/12710759855a689fc5d1dc4.jpg', 1);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `bed_image_table`\
--\
\
CREATE TABLE `bed_image_table` (\
  `bed_image` int(11) NOT NULL,\
  `bed_image_url` varchar(255) NOT NULL,\
  `appartment_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `bed_image_table`\
--\
\
INSERT INTO `bed_image_table` (`bed_image`, `bed_image_url`, `appartment_id`) VALUES\
(1, 'uploads/images/service/bed-images/14314509665a689fc5cc1c5.jpg', 1);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `contact_message`\
--\
\
CREATE TABLE `contact_message` (\
  `message_id` int(10) NOT NULL,\
  `sender_name` varchar(100) NOT NULL,\
  `sender_email` varchar(100) NOT NULL,\
  `sender_subject` varchar(100) NOT NULL,\
  `sender_message` varchar(1000) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `exterior_image_table`\
--\
\
CREATE TABLE `exterior_image_table` (\
  `exterior_image_id` int(11) NOT NULL,\
  `exterior_image_url` varchar(255) NOT NULL,\
  `appartment_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `exterior_image_table`\
--\
\
INSERT INTO `exterior_image_table` (`exterior_image_id`, `exterior_image_url`, `appartment_id`) VALUES\
(1, 'uploads/images/service/exterior-images/360934345a689fc5d1fd2.jpg', 1);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `land_table`\
--\
\
CREATE TABLE `land_table` (\
  `land_id` int(11) NOT NULL,\
  `space` varchar(100) NOT NULL,\
  `service_type` varchar(100) NOT NULL,\
  `land_price` varchar(100) NOT NULL,\
  `place` varchar(100) NOT NULL,\
  `land_image` varchar(100) NOT NULL,\
  `sub_place` varchar(100) NOT NULL,\
  `land_overview` varchar(255) NOT NULL,\
  `service` varchar(100) NOT NULL,\
  `current_status` varchar(11) NOT NULL,\
  `flag` varchar(11) NOT NULL,\
  `agent_id` int(11) NOT NULL,\
  `land_title` varchar(255) NOT NULL,\
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `land_table`\
--\
\
INSERT INTO `land_table` (`land_id`, `space`, `service_type`, `land_price`, `place`, `land_image`, `sub_place`, `land_overview`, `service`, `current_status`, `flag`, `agent_id`, `land_title`, `time_created`) VALUES\
(1, '2400', 'Sell', '1200', ' Sylhet', 'uploads/images/service/land-images/16417288375a68a26ee4af9.jpg', ' Amborkhan', 'bcvscdcv hvdcv', ' Land', '1', 'update', 1, 'This is title', '2018-01-24 15:17:21');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `service_master`\
--\
\
CREATE TABLE `service_master` (\
  `service_master_id` int(11) NOT NULL,\
  `agent_id` int(11) NOT NULL,\
  `appartment_id` int(11) NOT NULL,\
  `land_id` int(11) NOT NULL,\
  `service_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `testimonials`\
--\
\
CREATE TABLE `testimonials` (\
  `t_id` int(11) NOT NULL,\
  `name` varchar(255) NOT NULL,\
  `email` varchar(255) NOT NULL,\
  `review` varchar(1000) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `testimonials`\
--\
\
INSERT INTO `testimonials` (`t_id`, `name`, `email`, `review`) VALUES\
(0, 'nabil hassan', 'n2@asda.ocm', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\\r\\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letra');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `admin`\
--\
ALTER TABLE `admin`\
  ADD PRIMARY KEY (`admin_id`);\
\
--\
-- Indexes for table `agent`\
--\
ALTER TABLE `agent`\
  ADD PRIMARY KEY (`agent_id`);\
\
--\
-- Indexes for table `appartment`\
--\
ALTER TABLE `appartment`\
  ADD PRIMARY KEY (`appartment_id`);\
\
--\
-- Indexes for table `bath_image_table`\
--\
ALTER TABLE `bath_image_table`\
  ADD PRIMARY KEY (`bath_image_id`);\
\
--\
-- Indexes for table `bed_image_table`\
--\
ALTER TABLE `bed_image_table`\
  ADD PRIMARY KEY (`bed_image`);\
\
--\
-- Indexes for table `contact_message`\
--\
ALTER TABLE `contact_message`\
  ADD PRIMARY KEY (`message_id`);\
\
--\
-- Indexes for table `exterior_image_table`\
--\
ALTER TABLE `exterior_image_table`\
  ADD PRIMARY KEY (`exterior_image_id`);\
\
--\
-- Indexes for table `land_table`\
--\
ALTER TABLE `land_table`\
  ADD PRIMARY KEY (`land_id`);\
\
--\
-- Indexes for table `service_master`\
--\
ALTER TABLE `service_master`\
  ADD PRIMARY KEY (`service_master_id`);\
\
--\
-- AUTO_INCREMENT for dumped tables\
--\
\
--\
-- AUTO_INCREMENT for table `admin`\
--\
ALTER TABLE `admin`\
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;\
--\
-- AUTO_INCREMENT for table `agent`\
--\
ALTER TABLE `agent`\
  MODIFY `agent_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `appartment`\
--\
ALTER TABLE `appartment`\
  MODIFY `appartment_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `bath_image_table`\
--\
ALTER TABLE `bath_image_table`\
  MODIFY `bath_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `bed_image_table`\
--\
ALTER TABLE `bed_image_table`\
  MODIFY `bed_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `contact_message`\
--\
ALTER TABLE `contact_message`\
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT;\
--\
-- AUTO_INCREMENT for table `exterior_image_table`\
--\
ALTER TABLE `exterior_image_table`\
  MODIFY `exterior_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `land_table`\
--\
ALTER TABLE `land_table`\
  MODIFY `land_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;\
--\
-- AUTO_INCREMENT for table `service_master`\
--\
ALTER TABLE `service_master`\
  MODIFY `service_master_id` int(11) NOT NULL AUTO_INCREMENT;}