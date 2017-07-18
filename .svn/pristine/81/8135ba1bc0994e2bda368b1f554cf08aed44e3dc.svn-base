-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 12 日 15:40
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wordpress01`
--

-- --------------------------------------------------------

--
-- 表的结构 `wp_commentmeta`
--

CREATE TABLE IF NOT EXISTS `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_comments`
--

CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2016-10-12 11:43:42', '2016-10-12 03:43:42', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href="https://gravatar.com">Gravatar</a>.', 0, 'post-trashed', '', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wp_layerslider`
--

CREATE TABLE IF NOT EXISTS `wp_layerslider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` int(10) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `data` mediumtext NOT NULL,
  `date_c` int(10) NOT NULL,
  `date_m` int(11) NOT NULL,
  `flag_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `flag_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_links`
--

CREATE TABLE IF NOT EXISTS `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_options`
--

CREATE TABLE IF NOT EXISTS `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=277 ;

--
-- 转存表中的数据 `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://stoneappliance.co.nz', 'yes'),
(2, 'home', 'http://stoneappliance.co.nz', 'yes'),
(3, 'blogname', 'Concept Kitchen', 'yes'),
(4, 'blogdescription', '又一个WordPress站点', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', '478996650@qq.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'Y年n月j日', 'yes'),
(24, 'time_format', 'ag:i', 'yes'),
(25, 'links_updated_date_format', 'Y年n月j日ag:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:151:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:12:"slideshow/?$";s:29:"index.php?post_type=slideshow";s:42:"slideshow/feed/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?post_type=slideshow&feed=$matches[1]";s:37:"slideshow/(feed|rdf|rss|rss2|atom)/?$";s:46:"index.php?post_type=slideshow&feed=$matches[1]";s:29:"slideshow/page/([0-9]{1,})/?$";s:47:"index.php?post_type=slideshow&paged=$matches[1]";s:8:"ufaqs/?$";s:24:"index.php?post_type=ufaq";s:38:"ufaqs/feed/(feed|rdf|rss|rss2|atom)/?$";s:41:"index.php?post_type=ufaq&feed=$matches[1]";s:33:"ufaqs/(feed|rdf|rss|rss2|atom)/?$";s:41:"index.php?post_type=ufaq&feed=$matches[1]";s:25:"ufaqs/page/([0-9]{1,})/?$";s:42:"index.php?post_type=ufaq&paged=$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:54:"ufaq-category/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?ufaq-category=$matches[1]&feed=$matches[2]";s:49:"ufaq-category/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?ufaq-category=$matches[1]&feed=$matches[2]";s:30:"ufaq-category/([^/]+)/embed/?$";s:46:"index.php?ufaq-category=$matches[1]&embed=true";s:42:"ufaq-category/([^/]+)/page/?([0-9]{1,})/?$";s:53:"index.php?ufaq-category=$matches[1]&paged=$matches[2]";s:24:"ufaq-category/([^/]+)/?$";s:35:"index.php?ufaq-category=$matches[1]";s:49:"ufaq-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?ufaq-tag=$matches[1]&feed=$matches[2]";s:44:"ufaq-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?ufaq-tag=$matches[1]&feed=$matches[2]";s:25:"ufaq-tag/([^/]+)/embed/?$";s:41:"index.php?ufaq-tag=$matches[1]&embed=true";s:37:"ufaq-tag/([^/]+)/page/?([0-9]{1,})/?$";s:48:"index.php?ufaq-tag=$matches[1]&paged=$matches[2]";s:19:"ufaq-tag/([^/]+)/?$";s:30:"index.php?ufaq-tag=$matches[1]";s:35:"slideshow/.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:45:"slideshow/.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:65:"slideshow/.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"slideshow/.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:60:"slideshow/.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:41:"slideshow/.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:24:"slideshow/(.+?)/embed/?$";s:52:"index.php?twoj_slideshow_post=$matches[1]&embed=true";s:28:"slideshow/(.+?)/trackback/?$";s:46:"index.php?twoj_slideshow_post=$matches[1]&tb=1";s:36:"slideshow/(.+?)/page/?([0-9]{1,})/?$";s:59:"index.php?twoj_slideshow_post=$matches[1]&paged=$matches[2]";s:43:"slideshow/(.+?)/comment-page-([0-9]{1,})/?$";s:59:"index.php?twoj_slideshow_post=$matches[1]&cpage=$matches[2]";s:32:"slideshow/(.+?)(?:/([0-9]+))?/?$";s:58:"index.php?twoj_slideshow_post=$matches[1]&page=$matches[2]";s:37:"slideshow/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:47:"slideshow/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:67:"slideshow/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:62:"slideshow/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:62:"slideshow/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:43:"slideshow/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:26:"slideshow/([^/]+)/embed/?$";s:42:"index.php?slideshow=$matches[1]&embed=true";s:30:"slideshow/([^/]+)/trackback/?$";s:36:"index.php?slideshow=$matches[1]&tb=1";s:50:"slideshow/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:48:"index.php?slideshow=$matches[1]&feed=$matches[2]";s:45:"slideshow/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:48:"index.php?slideshow=$matches[1]&feed=$matches[2]";s:38:"slideshow/([^/]+)/page/?([0-9]{1,})/?$";s:49:"index.php?slideshow=$matches[1]&paged=$matches[2]";s:45:"slideshow/([^/]+)/comment-page-([0-9]{1,})/?$";s:49:"index.php?slideshow=$matches[1]&cpage=$matches[2]";s:34:"slideshow/([^/]+)(?:/([0-9]+))?/?$";s:48:"index.php?slideshow=$matches[1]&page=$matches[2]";s:26:"slideshow/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:36:"slideshow/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:56:"slideshow/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:51:"slideshow/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:51:"slideshow/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:32:"slideshow/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:33:"ufaqs/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:43:"ufaqs/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:63:"ufaqs/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:58:"ufaqs/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:58:"ufaqs/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:39:"ufaqs/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:22:"ufaqs/([^/]+)/embed/?$";s:37:"index.php?ufaq=$matches[1]&embed=true";s:26:"ufaqs/([^/]+)/trackback/?$";s:31:"index.php?ufaq=$matches[1]&tb=1";s:46:"ufaqs/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?ufaq=$matches[1]&feed=$matches[2]";s:41:"ufaqs/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?ufaq=$matches[1]&feed=$matches[2]";s:34:"ufaqs/([^/]+)/page/?([0-9]{1,})/?$";s:44:"index.php?ufaq=$matches[1]&paged=$matches[2]";s:41:"ufaqs/([^/]+)/comment-page-([0-9]{1,})/?$";s:44:"index.php?ufaq=$matches[1]&cpage=$matches[2]";s:30:"ufaqs/([^/]+)(?:/([0-9]+))?/?$";s:43:"index.php?ufaq=$matches[1]&page=$matches[2]";s:22:"ufaqs/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:32:"ufaqs/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:52:"ufaqs/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:47:"ufaqs/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:47:"ufaqs/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:28:"ufaqs/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:39:"index.php?&page_id=26&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:14:"search/(.+)/?$";s:31:"index.php?facetious=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:11:{i:0;s:35:"redux-framework/redux-framework.php";i:1;s:28:"2j-slideshow/2jslideshow.php";i:2;s:27:"LayerSlider/layerslider.php";i:3;s:36:"contact-form-7/wp-contact-form-7.php";i:4;s:23:"facetious/facetious.php";i:5;s:24:"gallery-videos/index.php";i:6;s:38:"recent-tweets-widget/recent-tweets.php";i:7;s:23:"revslider/revslider.php";i:8;s:44:"slideshow-jquery-image-gallery/slideshow.php";i:9;s:22:"ultimate-faqs/Main.php";i:10;s:41:"wordpress-importer/wordpress-importer.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'integral', 'yes'),
(41, 'stylesheet', 'integral', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '37965', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:10:"Categories";s:5:"count";i:0;s:12:"hierarchical";i:1;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:27:"LayerSlider/layerslider.php";s:29:"layerslider_uninstall_scripts";}', 'no'),
(82, 'timezone_string', 'Asia/Shanghai', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '26', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '37965', 'yes'),
(92, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:64:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;s:45:"slideshow-jquery-image-gallery-add-slideshows";b:1;s:46:"slideshow-jquery-image-gallery-edit-slideshows";b:1;s:48:"slideshow-jquery-image-gallery-delete-slideshows";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:37:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:45:"slideshow-jquery-image-gallery-add-slideshows";b:1;s:46:"slideshow-jquery-image-gallery-edit-slideshows";b:1;s:48:"slideshow-jquery-image-gallery-delete-slideshows";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:13:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;s:45:"slideshow-jquery-image-gallery-add-slideshows";b:1;s:46:"slideshow-jquery-image-gallery-edit-slideshows";b:1;s:48:"slideshow-jquery-image-gallery-delete-slideshows";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(93, 'WPLANG', 'zh_CN', 'yes'),
(94, 'widget_search', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'widget_recent-posts', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_recent-comments', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_archives', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'widget_meta', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(99, 'sidebars_widgets', 'a:9:{s:19:"wp_inactive_widgets";a:0:{}s:8:"rightbar";a:2:{i:0;s:12:"categories-2";i:1;s:18:"facetious_widget-2";}s:15:"feature-widgets";a:0:{}s:22:"single-project-widgets";a:0:{}s:14:"client-widgets";a:0:{}s:19:"testimonial-widgets";a:0:{}s:15:"service-widgets";a:0:{}s:12:"team-widgets";a:0:{}s:13:"array_version";i:3;}', 'yes'),
(100, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(101, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(103, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(104, 'cron', 'a:4:{i:1476287023;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1476330282;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1476330727;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(122, '_transient_timeout_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9', '1476287041', 'no'),
(114, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:1:{i:0;O:8:"stdClass":10:{s:8:"response";s:6:"latest";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.1.zip";s:6:"locale";s:5:"zh_CN";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.1.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.6.1-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.6.1-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.6.1";s:7:"version";s:5:"4.6.1";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.4";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1476243837;s:15:"version_checked";s:5:"4.6.1";s:12:"translations";a:0:{}}', 'no'),
(119, '_transient_feed_mod_7d1d7866a17d17cf5f79e1f075b87a31', '1476243840', 'no'),
(120, 'can_compress_scripts', '1', 'no'),
(121, '_transient_timeout_feed_d117b5738fbd35bd8c0391cda1f2b5d9', '1476287041', 'no'),
(123, '_transient_feed_mod_d117b5738fbd35bd8c0391cda1f2b5d9', '1476243841', 'no'),
(124, '_transient_timeout_feed_b9388c83948825c1edaef0d856b7b109', '1476287042', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(125, '_transient_feed_b9388c83948825c1edaef0d856b7b109', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n	\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:117:"\n		\n		\n		\n		\n		\n		\n				\n\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n\n	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:45:"https://wordpress.org/plugins/browse/popular/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:34:"WordPress Plugins » View: Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 12 Oct 2016 03:30:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:25:"http://bbpress.org/?v=1.1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:30:{i:0;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:21:"Regenerate Thumbnails";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/regenerate-thumbnails/#post-6743";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 23 Aug 2008 14:38:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"6743@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:76:"Allows you to regenerate your thumbnails after changing the thumbnail sizes.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:25:"Alex Mills (Viper007Bond)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"TinyMCE Advanced";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"https://wordpress.org/plugins/tinymce-advanced/#post-2082";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 27 Jun 2007 15:00:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2082@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:58:"Extends and enhances TinyMCE, the WordPress Visual Editor.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Andrew Ozz";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:26:"Page Builder by SiteOrigin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/siteorigin-panels/#post-51888";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 11 Apr 2013 10:36:42 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"51888@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:111:"Build responsive page layouts using the widgets you know and love using this simple drag and drop page builder.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Greg Priday";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"Google Analytics by MonsterInsights";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"https://wordpress.org/plugins/google-analytics-for-wordpress/#post-2316";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 14 Sep 2007 12:15:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2316@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:113:"Connect Google Analytics with WordPress by adding your Google Analytics tracking code. Get the stats that matter.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Syed Balkhi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"WP-PageNavi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wp-pagenavi/#post-363";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 23:17:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"363@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:49:"Adds a more advanced paging navigation interface.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Lester Chan";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"Wordfence Security";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/wordfence/#post-29832";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 04 Sep 2011 03:13:51 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"29832@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:149:"Secure your website with the most comprehensive WordPress security plugin. Firewall, malware scan, blocking, live traffic, login security &#38; more.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Wordfence";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:22:"Advanced Custom Fields";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/advanced-custom-fields/#post-25254";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 17 Mar 2011 04:07:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"25254@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:68:"Customise WordPress with powerful, professional and intuitive fields";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"elliotcondon";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:21:"Really Simple CAPTCHA";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"https://wordpress.org/plugins/really-simple-captcha/#post-9542";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 09 Mar 2009 02:17:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"9542@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:138:"Really Simple CAPTCHA is a CAPTCHA module intended to be called from other plugins. It is originally created for my Contact Form 7 plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Duplicate Post";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/duplicate-post/#post-2646";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 05 Dec 2007 17:40:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2646@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:22:"Clone posts and pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Lopo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"W3 Total Cache";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/w3-total-cache/#post-12073";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 29 Jul 2009 18:46:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"12073@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:144:"Search Engine (SEO) &#38; Performance Optimization (WPO) via caching. Integrated caching: CDN, Minify, Page, Object, Fragment, Database support.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Frederick Townes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Contact Form 7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/contact-form-7/#post-2141";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Aug 2007 12:45:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2141@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:54:"Just another contact form plugin. Simple but flexible.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"Akismet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://wordpress.org/plugins/akismet/#post-15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:11:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"15@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:98:"Akismet checks your comments against the Akismet Web service to see if they look like spam or not.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"WP Super Cache";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"https://wordpress.org/plugins/wp-super-cache/#post-2572";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Nov 2007 11:40:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"2572@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:73:"A very fast caching engine for WordPress that produces static html files.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Donncha O Caoimh";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:9:"Yoast SEO";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:54:"https://wordpress.org/plugins/wordpress-seo/#post-8321";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Jan 2009 20:34:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"8321@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:114:"Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using Yoast SEO plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Joost de Valk";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:15:"NextGEN Gallery";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/plugins/nextgen-gallery/#post-1169";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 23 Apr 2007 20:08:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"1169@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:121:"The most popular WordPress gallery plugin and one of the most popular plugins of all time with over 15 million downloads.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Alex Rabe";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"WordPress Importer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wordpress-importer/#post-18101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2010 17:42:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"18101@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Brian Colinger";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"Hello Dolly";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/hello-dolly/#post-5790";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 May 2008 22:11:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"5790@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"WooCommerce";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/woocommerce/#post-29860";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 05 Sep 2011 08:13:36 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"29860@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:97:"WooCommerce is a powerful, extendable eCommerce plugin that helps you sell anything. Beautifully.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"WooThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Google XML Sitemaps";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"https://wordpress.org/plugins/google-sitemap-generator/#post-132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:31:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"132@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:105:"This plugin will generate a special XML sitemap which will help search engines to better index your blog.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Arne Brachhold";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"All in One SEO Pack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:59:"https://wordpress.org/plugins/all-in-one-seo-pack/#post-753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 30 Mar 2007 20:08:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"753@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"One of the most downloaded plugins for WordPress (over 30 million downloads since 2007). Use All in One SEO Pack to automatically optimize your site f";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"uberdose";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"Jetpack by WordPress.com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://wordpress.org/plugins/jetpack/#post-23862";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 Jan 2011 02:21:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"23862@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:107:"Increase your traffic, view your stats, speed up your site, and protect yourself from hackers with Jetpack.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Automattic";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:30:"Clef Two-Factor Authentication";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:48:"https://wordpress.org/plugins/wpclef/#post-47509";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Dec 2012 01:25:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"47509@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:139:"Modern two-factor that people love to use: strong authentication without passwords or tokens; single sign on/off; magical login experience.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Dave Ross";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"UpdraftPlus WordPress Backup Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://wordpress.org/plugins/updraftplus/#post-38058";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 21 May 2012 15:14:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"38058@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:148:"Backup and restoration made easy. Complete backups; manual or scheduled (backup to S3, Dropbox, Google Drive, Rackspace, FTP, SFTP, email + others).";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"David Anderson";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"Disable Comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"https://wordpress.org/plugins/disable-comments/#post-26907";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 27 May 2011 04:42:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"26907@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:134:"Allows administrators to globally disable comments on their site. Comments can be disabled according to post type. Multisite friendly.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Samir Shah";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"Google Analytics Dashboard for WP";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:75:"https://wordpress.org/plugins/google-analytics-dashboard-for-wp/#post-50539";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 10 Mar 2013 17:07:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"50539@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:127:"Displays Google Analytics reports in your WordPress Dashboard. Inserts the latest Google Analytics tracking code in your pages.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Alin Marcu";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"WP Multibyte Patch";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/wp-multibyte-patch/#post-28395";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Jul 2011 12:22:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"28395@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:71:"Multibyte functionality enhancement for the WordPress Japanese package.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"plugin-master";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:27:"Black Studio TinyMCE Widget";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"https://wordpress.org/plugins/black-studio-tinymce-widget/#post-31973";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 10 Nov 2011 15:06:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"31973@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:39:"The visual editor widget for Wordpress.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Marco Chiesi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:10:"Duplicator";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"https://wordpress.org/plugins/duplicator/#post-26607";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 16 May 2011 12:15:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"26607@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:88:"Duplicate, clone, backup, move and transfer an entire site from one location to another.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Cory Lamle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"iThemes Security (formerly Better WP Security)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"https://wordpress.org/plugins/better-wp-security/#post-21738";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 22 Oct 2010 22:06:05 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"21738@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:146:"Take the guesswork out of WordPress security. iThemes Security offers 30+ ways to lock down WordPress in an easy-to-use WordPress security plugin.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"iThemes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"Meta Slider";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"https://wordpress.org/plugins/ml-slider/#post-49521";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 16:56:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:36:"49521@https://wordpress.org/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:131:"Easy to use WordPress Slider plugin. Create responsive slideshows with Nivo Slider, Flex Slider, Coin Slider and Responsive Slides.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Matcha Labs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:46:"https://wordpress.org/plugins/rss/view/popular";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:"\0*\0data";a:12:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Wed, 12 Oct 2016 03:44:04 GMT";s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:25:"strict-transport-security";s:11:"max-age=360";s:7:"expires";s:29:"Wed, 12 Oct 2016 04:05:04 GMT";s:13:"cache-control";s:0:"";s:6:"pragma";s:0:"";s:13:"last-modified";s:31:"Wed, 12 Oct 2016 03:30:04 +0000";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:11:"HIT lax 249";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20130910150210";}', 'no'),
(111, '_site_transient_timeout_theme_roots', '1476245700', 'no'),
(112, '_site_transient_theme_roots', 'a:4:{s:8:"integral";s:7:"/themes";s:13:"twentyfifteen";s:7:"/themes";s:14:"twentyfourteen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(115, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1476243901;s:7:"checked";a:4:{s:8:"integral";s:6:"1.0.21";s:13:"twentyfifteen";s:3:"1.6";s:14:"twentyfourteen";s:3:"1.8";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:1:{s:8:"integral";a:4:{s:5:"theme";s:8:"integral";s:11:"new_version";s:5:"1.1.3";s:3:"url";s:38:"https://wordpress.org/themes/integral/";s:7:"package";s:56:"https://downloads.wordpress.org/theme/integral.1.1.3.zip";}}s:12:"translations";a:0:{}}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(226, 'integral', 'a:132:{s:8:"last_tab";s:2:"18";s:12:"button-color";s:7:"#00aded";s:11:"theme-color";s:7:"#00aded";s:17:"header-background";s:7:"#ffffff";s:17:"footer-background";s:7:"#111111";s:7:"hero-bg";a:7:{s:16:"background-color";s:0:"";s:17:"background-repeat";s:0:"";s:15:"background-size";s:5:"cover";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:0:"";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:19:"hero-overlay-toggle";s:1:"0";s:20:"hero-parallax-toggle";s:1:"0";s:10:"hero-title";s:7:"Elegant";s:13:"hero-subtitle";s:14:"Business Theme";s:12:"hero-tagline";s:99:"A one page theme for professionals, agencies and businesses.\r\nCreate a stunning website in minutes.";s:16:"hero-btn1-toggle";s:1:"0";s:14:"hero-btn1-text";s:13:"View Features";s:13:"hero-btn1-url";s:1:"#";s:16:"hero-btn2-toggle";s:1:"0";s:14:"hero-btn2-text";s:12:"Download Now";s:13:"hero-btn2-url";s:1:"#";s:15:"features-layout";s:1:"4";s:13:"feature-icons";s:0:"";s:20:"feature-custom-class";s:17:"no-padding-bottom";s:23:"features-section-toggle";s:1:"1";s:10:"work-title";s:4:"Work";s:15:"work-title-icon";s:7:"fa-leaf";s:13:"work-subtitle";s:101:"Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.";s:9:"work-text";s:0:"";s:17:"work-custom-class";s:17:"no-padding-bottom";s:19:"work-section-toggle";s:1:"0";s:20:"project-single-title";s:8:"Projects";s:23:"project-single-autoplay";s:1:"0";s:21:"project-single-slider";s:1:"7";s:27:"project-single-custom-class";s:17:"no-padding-bottom";s:29:"project-single-section-toggle";s:1:"0";s:17:"clients-maintitle";s:11:"Our Clients";s:14:"clients-layout";s:1:"2";s:20:"clients-custom-class";s:0:"";s:22:"clients-section-toggle";s:1:"0";s:11:"testi-title";s:12:"Testimonials";s:8:"testi-bg";a:7:{s:16:"background-color";s:0:"";s:17:"background-repeat";s:0:"";s:15:"background-size";s:5:"cover";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:79:"http://stoneappliance.co.nz/wp-content/themes/integral/images/bg-testimonials.jpg";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:20:"testi-overlay-toggle";s:1:"0";s:21:"testi-parallax-toggle";s:1:"0";s:14:"testi-autoplay";s:1:"0";s:12:"testi-slider";s:1:"7";s:18:"testi-custom-class";s:0:"";s:20:"testi-section-toggle";s:1:"0";s:14:"services-title";s:8:"Services";s:19:"services-title-icon";s:16:"fa-space-shuttle";s:17:"services-subtitle";s:90:"We provide the best service for every customer. Wish they are satisfied with our services.";s:13:"services-text";s:0:"";s:15:"services-layout";s:1:"4";s:21:"services-custom-class";s:0:"";s:23:"services-section-toggle";s:1:"1";s:15:"calltoaction-bg";a:7:{s:16:"background-color";s:0:"";s:17:"background-repeat";s:0:"";s:15:"background-size";s:5:"cover";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:70:"http://stoneappliance.co.nz/wp-content/themes/integral/images/bg-cta.jpg";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:27:"calltoaction-overlay-toggle";s:1:"0";s:28:"calltoaction-parallax-toggle";s:1:"0";s:18:"calltoaction-title";s:14:"Call to Action";s:17:"calltoaction-text";s:70:"Lorem ipsum veniam adipisicing cupidatat dolor do adipisicing commodo.";s:24:"calltoaction-btn1-toggle";s:0:"";s:22:"calltoaction-btn1-text";s:0:"";s:21:"calltoaction-btn1-url";s:0:"";s:24:"calltoaction-btn2-toggle";s:1:"0";s:22:"calltoaction-btn2-text";s:8:"Download";s:21:"calltoaction-btn2-url";s:1:"#";s:25:"calltoaction-custom-class";s:0:"";s:27:"calltoaction-section-toggle";s:1:"0";s:11:"about-title";s:5:"About";s:16:"about-title-icon";s:7:"fa-user";s:14:"about-subtitle";s:101:"Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.";s:10:"about-text";s:0:"";s:18:"about-custom-class";s:17:"no-padding-bottom";s:20:"about-section-toggle";s:1:"0";s:12:"skills-title";s:6:"Skills";s:11:"skills-text";s:0:"";s:11:"skill1-name";s:7:"Skill 1";s:12:"skill1-color";s:7:"#5cb85c";s:14:"skill1-percent";s:2:"40";s:11:"skill2-name";s:7:"Skill 2";s:12:"skill2-color";s:7:"#5bc0de";s:14:"skill2-percent";s:2:"60";s:11:"skill3-name";s:7:"Skill 3";s:12:"skill3-color";s:7:"#f0ad4e";s:14:"skill3-percent";s:2:"80";s:11:"skill4-name";s:7:"Skill 4";s:12:"skill4-color";s:7:"#d9534f";s:14:"skill4-percent";s:3:"100";s:11:"skill5-name";s:0:"";s:12:"skill5-color";s:7:"#333333";s:14:"skill5-percent";s:1:"1";s:11:"skill6-name";s:0:"";s:12:"skill6-color";s:7:"#333333";s:14:"skill6-percent";s:1:"1";s:19:"skills-custom-class";s:17:"no-padding-bottom";s:21:"skills-section-toggle";s:1:"0";s:10:"team-title";s:8:"Our Team";s:11:"team-layout";s:1:"4";s:17:"team-custom-class";s:17:"no-padding-bottom";s:19:"team-section-toggle";s:1:"0";s:10:"blog-title";s:13:"From Our Blog";s:10:"blog-posts";s:1:"3";s:11:"blog-layout";s:1:"4";s:15:"blog-below-text";s:64:"<p class="text-center"><a href="#">Read the blog &#8594;</a></p>";s:17:"blog-custom-class";s:0:"";s:19:"blog-section-toggle";s:1:"0";s:13:"newsletter-bg";a:7:{s:16:"background-color";s:0:"";s:17:"background-repeat";s:0:"";s:15:"background-size";s:5:"cover";s:21:"background-attachment";s:0:"";s:19:"background-position";s:0:"";s:16:"background-image";s:77:"http://stoneappliance.co.nz/wp-content/themes/integral/images/bg-newsletter.jpg";s:5:"media";a:4:{s:2:"id";s:0:"";s:6:"height";s:0:"";s:5:"width";s:0:"";s:9:"thumbnail";s:0:"";}}s:25:"newsletter-overlay-toggle";s:1:"0";s:26:"newsletter-parallax-toggle";s:1:"0";s:16:"newsletter-title";s:15:"Newsletter Form";s:15:"newsletter-text";s:109:"Display a small newsletter subscription form. Integrates with services such as MailChimp and ConstantContact.";s:14:"mailchimp-code";s:963:"<!-- Begin MailChimp Signup Form -->\r\n<div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="//themely.us12.list-manage.com/subscribe/post?u=96d68578362e503cedd707b57&amp;id=7629c7ed4b" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">\r\n<div id="mc_embed_signup_scroll">\r\n<div class="mc-field-group"><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address" /></div>\r\n<div id="mce-responses" class="clear"></div>\r\n<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->\r\n<div style="position: absolute; left: -5000px;"><input tabindex="-1" name="b_96d68578362e503cedd707b57_7629c7ed4b" type="text" value="" /></div>\r\n<div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /></div>\r\n</div>\r\n</form></div>\r\n<!--End mc_embed_signup-->";s:23:"newsletter-custom-class";s:0:"";s:25:"newsletter-section-toggle";s:1:"0";s:13:"contact-title";s:7:"Contact";s:18:"contact-title-icon";s:11:"fa-envelope";s:16:"contact-subtitle";s:101:"Donec nec justo eget felis facilisis fermentum. Aliquam dignissim felis auctor ultrices ut elementum.";s:12:"contact-text";s:0:"";s:17:"contactinfo-title";s:12:"Contact Info";s:13:"contact-phone";s:15:"+1 323 456 7891";s:13:"contact-email";s:21:"hello@yourwebsite.com";s:15:"contact-address";s:111:"1 Pacific Ave, Suite 100\r\n                        Santa Monica, CA 90210\r\n                        United States";s:16:"contact-facebook";s:1:"#";s:15:"contact-twitter";s:1:"#";s:18:"contact-googleplus";s:1:"#";s:14:"contact-github";s:1:"#";s:15:"contact-behance";s:1:"#";s:16:"contact-linkedin";s:1:"#";s:17:"contact-instagram";s:1:"#";s:15:"contact-youtube";s:1:"#";s:17:"contact-form-code";s:46:"[contact-form-7 id="1" title="Contact form 1"]";s:20:"contact-custom-class";s:0:"";s:22:"contact-section-toggle";s:1:"0";s:14:"copyright-text";s:191:"&copy; 2016 All Rights Reserved | Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a> | Made with &#10084; by <a href="https://www.themely.com" target="_blank">Themely</a>";s:15:"gen-home-layout";a:2:{s:7:"Enabled";a:14:{s:4:"hero";s:4:"Hero";s:8:"features";s:8:"Features";s:4:"work";s:4:"Work";s:14:"project-single";s:14:"Project Single";s:7:"clients";s:7:"Clients";s:12:"testimonials";s:12:"Testimonials";s:8:"services";s:8:"Services";s:14:"call-to-action";s:14:"Call to Action";s:5:"about";s:5:"About";s:6:"skills";s:6:"Skills";s:4:"team";s:4:"Team";s:4:"blog";s:4:"Blog";s:10:"newsletter";s:10:"Newsletter";s:7:"contact";s:7:"Contact";}s:8:"Disabled";a:0:{}}s:14:"topmenu-sticky";b:1;}', 'yes'),
(117, '_transient_timeout_feed_7d1d7866a17d17cf5f79e1f075b87a31', '1476287040', 'no'),
(118, '_transient_timeout_feed_mod_7d1d7866a17d17cf5f79e1f075b87a31', '1476287040', 'no'),
(126, '_transient_timeout_feed_mod_b9388c83948825c1edaef0d856b7b109', '1476287042', 'no'),
(127, '_transient_feed_mod_b9388c83948825c1edaef0d856b7b109', '1476243842', 'no'),
(128, '_transient_timeout_plugin_slugs', '1476331461', 'no'),
(129, '_transient_plugin_slugs', 'a:14:{i:0;s:28:"2j-slideshow/2jslideshow.php";i:1;s:19:"akismet/akismet.php";i:2;s:36:"contact-form-7/wp-contact-form-7.php";i:3;s:23:"facetious/facetious.php";i:4;s:22:"ultimate-faqs/Main.php";i:5;s:24:"gallery-videos/index.php";i:6;s:9:"hello.php";i:7;s:27:"LayerSlider/layerslider.php";i:8;s:38:"recent-tweets-widget/recent-tweets.php";i:9;s:35:"redux-framework/redux-framework.php";i:10;s:23:"revslider/revslider.php";i:11;s:44:"slideshow-jquery-image-gallery/slideshow.php";i:12;s:29:"widget-logic/widget_logic.php";i:13;s:41:"wordpress-importer/wordpress-importer.php";}', 'no'),
(130, '_transient_timeout_dash_5438fb5baf31c513fff2b9a1067656a6', '1476287042', 'no'),
(131, '_transient_dash_5438fb5baf31c513fff2b9a1067656a6', '<div class="rss-widget"><ul><li><a class=''rsswidget'' href=''https://cn.wordpress.org/2016/04/17/coleman/''>WordPress 4.5“Coleman”</a> <span class="rss-date">2016年4月17日</span><div class="rssSummary">WordPress 4.5简体中文版现已开放下载。</div></li></ul></div><div class="rss-widget"><ul><li><a class=''rsswidget'' href=''https://wptavern.com/take-the-2016-git-users-survey''>WPTavern: Take the 2016 Git User’s Survey</a></li><li><a class=''rsswidget'' href=''https://wptavern.com/you-are-responsible-for-your-own-awesome''>WPTavern: You Are Responsible for Your Own Awesome</a></li><li><a class=''rsswidget'' href=''https://wptavern.com/polyglots-team-to-host-2nd-global-wordpress-translation-day-november-12''>WPTavern: Polyglots Team to Host 2nd Global WordPress Translation Day November 12</a></li></ul></div><div class="rss-widget"><ul><li class="dashboard-news-plugin"><span>热门插件:</span> Google Analytics Dashboard for WP&nbsp;<a href="plugin-install.php?tab=plugin-information&amp;plugin=google-analytics-dashboard-for-wp&amp;_wpnonce=4f18d208a6&amp;TB_iframe=true&amp;width=600&amp;height=800" class="thickbox open-plugin-details-modal" aria-label="安装Google Analytics Dashboard for WP">(安装)</a></li></ul></div>', 'no'),
(222, 'redux_version_upgraded_from', '3.6.1', 'yes'),
(223, '_transient_timeout__redux_activation_redirect', '1476253784', 'no'),
(224, '_transient__redux_activation_redirect', '1', 'no'),
(225, '_site_transient_update_plugins', 'O:8:"stdClass":5:{s:12:"last_checked";i:1476245008;s:7:"checked";a:14:{s:28:"2j-slideshow/2jslideshow.php";s:6:"1.2.19";s:19:"akismet/akismet.php";s:3:"3.2";s:36:"contact-form-7/wp-contact-form-7.php";s:3:"4.5";s:23:"facetious/facetious.php";s:5:"1.1.4";s:22:"ultimate-faqs/Main.php";s:5:"1.5.8";s:24:"gallery-videos/index.php";s:5:"1.0.6";s:9:"hello.php";s:3:"1.6";s:27:"LayerSlider/layerslider.php";s:5:"5.1.1";s:38:"recent-tweets-widget/recent-tweets.php";s:5:"1.6.5";s:35:"redux-framework/redux-framework.php";s:5:"3.6.1";s:23:"revslider/revslider.php";s:5:"4.3.6";s:44:"slideshow-jquery-image-gallery/slideshow.php";s:5:"2.3.1";s:29:"widget-logic/widget_logic.php";s:4:"0.57";s:41:"wordpress-importer/wordpress-importer.php";s:5:"0.6.3";}s:8:"response";a:4:{s:36:"contact-form-7/wp-contact-form-7.php";O:8:"stdClass":8:{s:2:"id";s:3:"790";s:4:"slug";s:14:"contact-form-7";s:6:"plugin";s:36:"contact-form-7/wp-contact-form-7.php";s:11:"new_version";s:5:"4.5.1";s:3:"url";s:45:"https://wordpress.org/plugins/contact-form-7/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/contact-form-7.4.5.1.zip";s:6:"tested";s:5:"4.6.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:22:"ultimate-faqs/Main.php";O:8:"stdClass":8:{s:2:"id";s:5:"51884";s:4:"slug";s:13:"ultimate-faqs";s:6:"plugin";s:22:"ultimate-faqs/Main.php";s:11:"new_version";s:5:"1.5.9";s:3:"url";s:44:"https://wordpress.org/plugins/ultimate-faqs/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/ultimate-faqs.zip";s:6:"tested";s:5:"4.6.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:24:"gallery-videos/index.php";O:8:"stdClass":8:{s:2:"id";s:5:"73755";s:4:"slug";s:14:"gallery-videos";s:6:"plugin";s:24:"gallery-videos/index.php";s:11:"new_version";s:5:"1.1.0";s:3:"url";s:45:"https://wordpress.org/plugins/gallery-videos/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/gallery-videos.1.1.0.zip";s:6:"tested";s:5:"4.6.1";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:35:"redux-framework/redux-framework.php";O:8:"stdClass":8:{s:2:"id";s:5:"45018";s:4:"slug";s:15:"redux-framework";s:6:"plugin";s:35:"redux-framework/redux-framework.php";s:11:"new_version";s:5:"3.6.2";s:3:"url";s:46:"https://wordpress.org/plugins/redux-framework/";s:7:"package";s:64:"https://downloads.wordpress.org/plugin/redux-framework.3.6.2.zip";s:6:"tested";s:3:"4.8";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}}s:12:"translations";a:1:{i:0;a:7:{s:4:"type";s:6:"plugin";s:4:"slug";s:18:"wordpress-importer";s:8:"language";s:5:"zh_CN";s:7:"version";s:5:"0.6.3";s:7:"updated";s:19:"2015-08-01 21:44:03";s:7:"package";s:85:"https://downloads.wordpress.org/translation/plugin/wordpress-importer/0.6.3/zh_CN.zip";s:10:"autoupdate";b:1;}}s:9:"no_update";a:8:{s:28:"2j-slideshow/2jslideshow.php";O:8:"stdClass":7:{s:2:"id";s:5:"65574";s:4:"slug";s:12:"2j-slideshow";s:6:"plugin";s:28:"2j-slideshow/2jslideshow.php";s:11:"new_version";s:6:"1.2.19";s:3:"url";s:43:"https://wordpress.org/plugins/2j-slideshow/";s:7:"package";s:55:"https://downloads.wordpress.org/plugin/2j-slideshow.zip";s:14:"upgrade_notice";s:20:"JS code optimization";}s:19:"akismet/akismet.php";O:8:"stdClass":6:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:3:"3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/akismet.3.2.zip";}s:23:"facetious/facetious.php";O:8:"stdClass":7:{s:2:"id";s:5:"38300";s:4:"slug";s:9:"facetious";s:6:"plugin";s:23:"facetious/facetious.php";s:11:"new_version";s:5:"1.1.4";s:3:"url";s:40:"https://wordpress.org/plugins/facetious/";s:7:"package";s:52:"https://downloads.wordpress.org/plugin/facetious.zip";s:14:"upgrade_notice";s:78:"Remove some PHP 5.3-specific code to avoid a fatal error when running PHP 5.2.";}s:9:"hello.php";O:8:"stdClass":6:{s:2:"id";s:4:"3564";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";}s:38:"recent-tweets-widget/recent-tweets.php";O:8:"stdClass":6:{s:2:"id";s:5:"39142";s:4:"slug";s:20:"recent-tweets-widget";s:6:"plugin";s:38:"recent-tweets-widget/recent-tweets.php";s:11:"new_version";s:5:"1.6.5";s:3:"url";s:51:"https://wordpress.org/plugins/recent-tweets-widget/";s:7:"package";s:69:"https://downloads.wordpress.org/plugin/recent-tweets-widget.1.6.5.zip";}s:44:"slideshow-jquery-image-gallery/slideshow.php";O:8:"stdClass":6:{s:2:"id";s:5:"31854";s:4:"slug";s:30:"slideshow-jquery-image-gallery";s:6:"plugin";s:44:"slideshow-jquery-image-gallery/slideshow.php";s:11:"new_version";s:5:"2.3.1";s:3:"url";s:61:"https://wordpress.org/plugins/slideshow-jquery-image-gallery/";s:7:"package";s:73:"https://downloads.wordpress.org/plugin/slideshow-jquery-image-gallery.zip";}s:29:"widget-logic/widget_logic.php";O:8:"stdClass":6:{s:2:"id";s:4:"2545";s:4:"slug";s:12:"widget-logic";s:6:"plugin";s:29:"widget-logic/widget_logic.php";s:11:"new_version";s:4:"0.57";s:3:"url";s:43:"https://wordpress.org/plugins/widget-logic/";s:7:"package";s:60:"https://downloads.wordpress.org/plugin/widget-logic.0.57.zip";}s:41:"wordpress-importer/wordpress-importer.php";O:8:"stdClass":6:{s:2:"id";s:5:"14975";s:4:"slug";s:18:"wordpress-importer";s:6:"plugin";s:41:"wordpress-importer/wordpress-importer.php";s:11:"new_version";s:5:"0.6.3";s:3:"url";s:49:"https://wordpress.org/plugins/wordpress-importer/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/wordpress-importer.0.6.3.zip";}}}', 'no'),
(133, 'recently_activated', 'a:0:{}', 'yes'),
(134, 'theme_mods_twentysixteen', 'a:1:{s:16:"sidebars_widgets";a:2:{s:4:"time";i:1476243906;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(135, 'current_theme', 'Integral', 'yes'),
(136, 'theme_mods_integral', 'a:2:{i:0;b:0;s:18:"nav_menu_locations";a:1:{s:7:"primary";i:12;}}', 'yes'),
(137, 'theme_switched', '', 'yes'),
(138, 'widget_integral_feature', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(139, 'widget_integral_service', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(140, 'widget_integral_testimonial', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(141, 'widget_integral_our_clients', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(142, 'widget_integral_our_team', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(143, 'widget_integral_projects_single', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(259, 'slideshow-jquery-image-gallery-edit-slideshows', 'a:2:{s:6:"editor";s:2:"on";s:6:"author";s:2:"on";}', 'yes'),
(167, 'facetious_dbv', '1', 'yes'),
(168, 'EWD_UFAQ_Toggle', 'Yes', 'yes'),
(169, 'EWD_UFAQ_Display_Back_To_Top', 'No', 'yes'),
(170, 'EWD_UFAQ_Comments_On', 'No', 'yes'),
(171, 'EWD_UFAQ_Display_Style', 'Default', 'yes'),
(172, 'EWD_UFAQ_FAQ_Ratings', 'No', 'yes'),
(154, 'category_children', 'a:2:{i:2;a:5:{i:0;i:3;i:1;i:4;i:2;i:5;i:3;i:6;i:4;i:7;}i:8;a:3:{i:0;i:9;i:1;i:10;i:2;i:11;}}', 'yes'),
(165, 'widget_twoj_widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(166, 'widget_facetious_widget', 'a:2:{i:2;a:4:{s:5:"title";s:16:"Search Questions";s:6:"submit";s:2:"Go";s:6:"fields";a:2:{i:0;s:1:"s";i:1;s:13:"ufaq-category";}s:9:"post_type";a:1:{i:0;s:4:"ufaq";}}s:12:"_multiwidget";i:1;}', 'yes'),
(173, 'EWD_UFAQ_WooCommerce_FAQs', 'No', 'yes'),
(174, 'EWD_UFAQ_Use_Product', 'Yes', 'yes'),
(175, 'EWD_UFAQ_Color_Block_Shape', 'Square', 'yes'),
(176, 'FAQ_Auto_Complete_Titles', 'Yes', 'yes'),
(177, 'EWD_UFAQ_Permalink_Type', 'SamePage', 'yes'),
(178, 'EWD_UFAQ_Slug_Base', 'ufaqs', 'yes'),
(179, 'EWD_UFAQ_Hide_Blank_Fields', 'Yes', 'yes'),
(180, 'EWD_UFAQ_Styling_Category_Heading_Type', 'h4', 'yes'),
(181, 'EWD_UFAQ_Styling_FAQ_Heading_Type', 'h4', 'yes'),
(182, 'EWD_UFAQ_Version', '1.5.5', 'yes'),
(183, 'EWD_UFAQ_Category_Toggle', 'No', 'yes'),
(184, 'EWD_UFAQ_FAQ_Accordion', 'No', 'yes'),
(185, 'EWD_UFAQ_Hide_Categories', 'No', 'yes'),
(186, 'EWD_UFAQ_Hide_Tags', 'No', 'yes'),
(187, 'EWD_UFAQ_Scroll_To_Top', 'Yes', 'yes'),
(188, 'EWD_UFAQ_Display_All_Answers', 'No', 'yes'),
(189, 'EWD_UFAQ_Display_Author', 'Yes', 'yes'),
(190, 'EWD_UFAQ_Display_Date', 'Yes', 'yes'),
(191, 'EWD_UFAQ_Include_Permalink', 'Yes', 'yes'),
(192, 'EWD_UFAQ_Show_TinyMCE', 'Yes', 'yes'),
(193, 'EWD_UFAQ_Reveal_Effect', 'none', 'yes'),
(194, 'EWD_UFAQ_Pretty_Permalinks', 'No', 'yes'),
(195, 'EWD_UFAQ_Allow_Proposed_Answer', 'No', 'yes'),
(196, 'EWD_UFAQ_Admin_Question_Notification', 'No', 'yes'),
(197, 'EWD_UFAQ_Auto_Complete_Titles', 'Yes', 'yes'),
(198, 'EWD_UFAQ_Group_By_Category', 'No', 'yes'),
(199, 'EWD_UFAQ_Group_By_Order_By', 'name', 'yes'),
(200, 'EWD_UFAQ_Group_By_Order', 'ASC', 'yes'),
(201, 'EWD_UFAQ_Order_By', 'date', 'yes'),
(202, 'EWD_UFAQ_Order', 'DESC', 'yes'),
(203, 'EWD_UFAQ_Toggle_Symbol', 'A', 'yes'),
(204, 'EWD_UFAQ_Full_Version', 'No', 'yes'),
(205, 'EWD_UFAQ_Update_Flag', 'Yes', 'yes'),
(206, 'EWD_UFAQ_Install_Flag', 'Yes', 'yes'),
(207, 'UFAQ_Run_Tutorial', 'Yes', 'yes'),
(208, 'plugin_error', '', 'yes'),
(209, 'widget_ewd_ufaq_display_faq_post_list', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(210, 'widget_ewd_ufaq_display_recent_faqs', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(211, 'widget_ewd_ufaq_display_popular_faqs', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(212, 'widget_ewd_ufaq_display_faq_categories', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(213, 'widget_total_soft_gallery_video', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(214, 'tp_twitter_global_notification', '1', 'yes'),
(215, 'widget_tp_widget_recent_tweets', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(216, 'ls-plugin-version', '5.1.1', 'yes'),
(217, 'ls-db-version', '5.0.0', 'yes'),
(218, 'ls-installed', '1', 'yes'),
(219, 'ls-google-fonts', 'a:4:{i:0;a:2:{s:5:"param";s:28:"Lato:100,300,regular,700,900";s:5:"admin";b:0;}i:1;a:2:{s:5:"param";s:13:"Open+Sans:300";s:5:"admin";b:0;}i:2;a:2:{s:5:"param";s:20:"Indie+Flower:regular";s:5:"admin";b:0;}i:3;a:2:{s:5:"param";s:22:"Oswald:300,regular,700";s:5:"admin";b:0;}}', 'yes'),
(220, 'widget_layerslider_widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(221, 'ReduxFrameworkPlugin_ACTIVATED_NOTICES', 'a:1:{i:0;s:138:"Redux Framework has an embedded demo. <a href="./plugins.php?ReduxFrameworkPlugin=demo">Click here to activate the sample config file.</a>";}', 'yes'),
(227, 'integral-transients', 'a:3:{s:14:"changed_values";a:1:{s:22:"contact-section-toggle";s:1:"1";}s:9:"last_save";i:1476246380;s:13:"last_compiler";i:1476245227;}', 'yes'),
(228, 'revslider_checktables', '1', 'yes'),
(229, 'revslider-static-css', '.tp-caption a {\ncolor:#ff7302;\ntext-shadow:none;\n-webkit-transition:all 0.2s ease-out;\n-moz-transition:all 0.2s ease-out;\n-o-transition:all 0.2s ease-out;\n-ms-transition:all 0.2s ease-out;\n}\n\n.tp-caption a:hover {\ncolor:#ffa902;\n}', 'yes'),
(230, 'revslider-update-check-short', '1476245016', 'yes'),
(231, 'widget_rev-slider-widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(232, 'slideshow-plugin-updated-from-v1-x-x-to-v2-0-1', 'updated', 'no'),
(233, 'slideshow-plugin-updated-from-v2-to-v2-1-20', 'updated', 'no'),
(234, 'slideshow-jquery-image-gallery-updated-from-v2-1-20-to-v2-1-22', 'updated', 'no'),
(235, 'slideshow-jquery-image-gallery-updated-from-v2-1-20-to-v2-1-23', 'updated', 'no'),
(236, 'slideshow-jquery-image-gallery-updated-from-v2-1-23-to-v2-2-0', 'updated', 'no'),
(237, 'slideshow-jquery-image-gallery-updated-from-v2-2-0-to-v2-2-8', 'updated', 'no'),
(238, 'slideshow-jquery-image-gallery-updated-from-v2-2-8-to-v2-2-12', 'updated', 'no'),
(239, 'slideshow-jquery-image-gallery-updated-from-v2-2-12-to-v2-2-16', 'updated', 'no'),
(240, 'slideshow-jquery-image-gallery-updated-from-v2-2-16-to-v2-2-17', 'updated', 'no'),
(241, 'slideshow-jquery-image-gallery-updated-from-v2-2-17-to-v2-2-20', 'updated', 'no'),
(242, 'slideshow-jquery-image-gallery-plugin-version', '2.3.1', 'yes'),
(243, 'widget_slideshowwidget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(244, 'wpcf7', 'a:2:{s:7:"version";s:3:"4.5";s:13:"bulk_validate";a:4:{s:9:"timestamp";d:1476273859;s:7:"version";s:3:"4.5";s:11:"count_valid";i:1;s:13:"count_invalid";i:0;}}', 'yes'),
(245, '_transient_timeout_select2-css_style_cdn_is_up', '1476331473', 'no'),
(246, '_transient_select2-css_style_cdn_is_up', '1', 'no'),
(247, '_transient_timeout_select2-js_script_cdn_is_up', '1476331474', 'no'),
(248, '_transient_select2-js_script_cdn_is_up', '1', 'no'),
(249, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:"auto_add";a:1:{i:0;i:12;}}', 'yes'),
(258, 'slideshow-jquery-image-gallery-add-slideshows', 'a:2:{s:6:"editor";s:2:"on";s:6:"author";s:2:"on";}', 'yes'),
(256, 'slideshow-jquery-image-gallery-stylesheet-location', 'footer', 'yes'),
(257, 'slideshow-jquery-image-gallery-enable-lazy-loading', 'false', 'yes'),
(260, 'slideshow-jquery-image-gallery-delete-slideshows', 'a:2:{s:6:"editor";s:2:"on";s:6:"author";s:2:"on";}', 'yes'),
(261, 'slideshow-jquery-image-gallery-default-settings', 'a:26:{s:9:"animation";s:5:"slide";s:10:"slideSpeed";s:1:"1";s:16:"descriptionSpeed";s:3:"0.4";s:13:"intervalSpeed";s:1:"5";s:13:"slidesPerView";s:1:"2";s:8:"maxWidth";s:1:"0";s:11:"aspectRatio";s:3:"3:1";s:6:"height";s:3:"300";s:14:"imageBehaviour";s:7:"natural";s:27:"preserveSlideshowDimensions";s:5:"false";s:20:"enableResponsiveness";s:4:"true";s:15:"showDescription";s:4:"true";s:15:"hideDescription";s:4:"true";s:4:"play";s:4:"true";s:4:"loop";s:4:"true";s:12:"pauseOnHover";s:4:"true";s:12:"controllable";s:4:"true";s:21:"hideNavigationButtons";s:5:"false";s:14:"showPagination";s:4:"true";s:14:"hidePagination";s:4:"true";s:12:"controlPanel";s:5:"false";s:16:"hideControlPanel";s:4:"true";s:15:"waitUntilLoaded";s:4:"true";s:15:"showLoadingIcon";s:4:"true";s:6:"random";s:5:"false";s:11:"avoidFilter";s:4:"true";}', 'yes'),
(262, 'slideshow-jquery-image-gallery-default-style-settings', 'a:1:{s:5:"style";s:15:"style-light.css";}', 'yes'),
(263, 'slideshow-jquery-image-gallery-custom-styles', 'a:0:{}', 'yes'),
(273, 'ufaq-category_children', 'a:0:{}', 'yes'),
(274, 'EWD_UFAQ_Blog_Content', '<a target=''_blank'' href=''http://www.etoilewebdesign.com/wordpress-beginner-how-to-build-a-business-website-or-blog-in-24-hours/''><h3>WORDPRESS BEGINNER? HOW TO BUILD A BUSINESS WEBSITE OR BLOG IN 24 HOURS.</h3></a>\r\n<p>If you are considering a WordPress website project you’ll be in good company. Over 70…</p>', 'yes'),
(275, 'EWD_UFAQ_Changelog_Content', '\r\n<h3>1.5.8</h3>\r\n<br />- Added in a pre-built shortcode display on the edit FAQ page, to display a single FAQ\r\n<br />- Fixed an error where the upgrade box was displayed on multiplate tabs\r\n\r\n<h3>1.5.7</h3>\r\n<br />- Fixed an issue where the ratings buttons weren''t working using the AJAX search feature\r\n\r\n', 'yes');

-- --------------------------------------------------------

--
-- 表的结构 `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=408 ;

--
-- 转存表中的数据 `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 1, '_wp_trash_meta_status', 'publish'),
(3, 1, '_wp_trash_meta_time', '1476244321'),
(4, 1, '_wp_desired_post_slug', 'hello-world'),
(5, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:"1";}'),
(6, 5, '_edit_last', '1'),
(7, 5, '_edit_lock', '1476252698:1'),
(10, 8, '_edit_last', '1'),
(11, 8, '_edit_lock', '1476252940:1'),
(13, 10, '_edit_last', '1'),
(14, 10, '_edit_lock', '1476253712:1'),
(16, 13, '_edit_last', '1'),
(17, 13, '_edit_lock', '1476244363:1'),
(19, 15, '_edit_last', '1'),
(20, 15, '_edit_lock', '1476244386:1'),
(22, 17, '_edit_last', '1'),
(23, 17, '_edit_lock', '1476244417:1'),
(25, 19, '_edit_last', '1'),
(26, 19, '_edit_lock', '1476244442:1'),
(28, 21, '_edit_last', '1'),
(29, 21, '_edit_lock', '1476244462:1'),
(31, 23, '_edit_last', '1'),
(32, 23, '_edit_lock', '1476253279:1'),
(34, 2, '_wp_trash_meta_status', 'publish'),
(35, 2, '_wp_trash_meta_time', '1476244684'),
(36, 2, '_wp_desired_post_slug', 'sample-page'),
(37, 26, '_edit_last', '1'),
(38, 26, '_edit_lock', '1476249441:1'),
(39, 26, '_wp_page_template', 'template_home.php'),
(40, 28, '_form', '<label> 你的名字 （必填）\n    [text* your-name] </label>\n\n<label> 你的邮箱 （必填）\n    [email* your-email] </label>\n\n<label> 主题\n    [text your-subject] </label>\n\n<label> 你的留言\n    [textarea your-message] </label>\n\n[submit "发送"]'),
(41, 28, '_mail', 'a:8:{s:7:"subject";s:32:"Concept Kitchen "[your-subject]"";s:6:"sender";s:30:"[your-name] <478996650@qq.com>";s:4:"body";s:184:"发件人：[your-name] <[your-email]>\n主题：[your-subject]\n\n留言正文：\n[your-message]\n\n--\n这封邮件通过联系表单【Concept Kitchen (http://stoneappliance.co.nz)】发送";s:9:"recipient";s:16:"478996650@qq.com";s:18:"additional_headers";s:22:"Reply-To: [your-email]";s:11:"attachments";s:0:"";s:8:"use_html";i:0;s:13:"exclude_blank";i:0;}'),
(42, 28, '_mail_2', 'a:9:{s:6:"active";b:0;s:7:"subject";s:32:"Concept Kitchen "[your-subject]"";s:6:"sender";s:34:"Concept Kitchen <478996650@qq.com>";s:4:"body";s:120:"留言正文：\n[your-message]\n\n--\n这封邮件通过联系表单【Concept Kitchen (http://stoneappliance.co.nz)】发送";s:9:"recipient";s:12:"[your-email]";s:18:"additional_headers";s:26:"Reply-To: 478996650@qq.com";s:11:"attachments";s:0:"";s:8:"use_html";i:0;s:13:"exclude_blank";i:0;}'),
(43, 28, '_messages', 'a:8:{s:12:"mail_sent_ok";s:45:"Thank you for your message. It has been sent.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:22:"The field is required.";s:16:"invalid_too_long";s:22:"The field is too long.";s:17:"invalid_too_short";s:23:"The field is too short.";}'),
(44, 28, '_additional_settings', NULL),
(45, 28, '_locale', 'zh_CN'),
(46, 29, '_menu_item_type', 'custom'),
(47, 29, '_menu_item_menu_item_parent', '0'),
(48, 29, '_menu_item_object_id', '29'),
(49, 29, '_menu_item_object', 'custom'),
(50, 29, '_menu_item_target', ''),
(51, 29, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(52, 29, '_menu_item_xfn', ''),
(53, 29, '_menu_item_url', 'http://stoneappliance.co.nz/'),
(54, 29, '_menu_item_orphaned', '1476245463'),
(55, 30, '_menu_item_type', 'post_type'),
(56, 30, '_menu_item_menu_item_parent', '0'),
(57, 30, '_menu_item_object_id', '26'),
(58, 30, '_menu_item_object', 'page'),
(59, 30, '_menu_item_target', ''),
(60, 30, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(61, 30, '_menu_item_xfn', ''),
(62, 30, '_menu_item_url', ''),
(63, 30, '_menu_item_orphaned', '1476245463'),
(64, 31, '_edit_last', '1'),
(65, 31, '_edit_lock', '1476245410:1'),
(66, 31, '_wp_page_template', 'default'),
(67, 31, 'slide_template', 'default'),
(68, 33, '_edit_last', '1'),
(69, 33, '_edit_lock', '1476245439:1'),
(70, 33, '_wp_page_template', 'default'),
(71, 33, 'slide_template', 'default'),
(72, 35, '_edit_last', '1'),
(73, 35, '_edit_lock', '1476245463:1'),
(74, 35, '_wp_page_template', 'default'),
(75, 35, 'slide_template', 'default'),
(76, 37, '_edit_last', '1'),
(77, 37, '_edit_lock', '1476245496:1'),
(78, 37, '_wp_page_template', 'default'),
(79, 37, 'slide_template', 'default'),
(80, 39, '_edit_last', '1'),
(81, 39, '_edit_lock', '1476245519:1'),
(82, 39, '_wp_page_template', 'default'),
(83, 39, 'slide_template', 'default'),
(84, 41, '_edit_last', '1'),
(85, 41, '_edit_lock', '1476245541:1'),
(86, 41, '_wp_page_template', 'default'),
(87, 41, 'slide_template', 'default'),
(88, 43, '_edit_last', '1'),
(89, 43, '_edit_lock', '1476251189:1'),
(90, 43, '_wp_page_template', 'default'),
(91, 43, 'slide_template', 'default'),
(92, 45, '_edit_last', '1'),
(93, 45, '_wp_page_template', 'default'),
(94, 45, 'slide_template', 'default'),
(95, 45, '_edit_lock', '1476245596:1'),
(96, 47, '_edit_last', '1'),
(97, 47, '_edit_lock', '1476245619:1'),
(98, 47, '_wp_page_template', 'default'),
(99, 47, 'slide_template', 'default'),
(100, 50, '_edit_last', '1'),
(101, 50, '_wp_page_template', 'default'),
(102, 50, 'slide_template', 'default'),
(103, 50, '_edit_lock', '1476245638:1'),
(104, 52, '_menu_item_type', 'custom'),
(105, 52, '_menu_item_menu_item_parent', '0'),
(106, 52, '_menu_item_object_id', '52'),
(107, 52, '_menu_item_object', 'custom'),
(108, 52, '_menu_item_target', ''),
(109, 52, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(110, 52, '_menu_item_xfn', ''),
(111, 52, '_menu_item_url', 'http://stoneappliance.co.nz/'),
(112, 52, '_menu_item_orphaned', '1476245786'),
(113, 53, '_menu_item_type', 'post_type'),
(114, 53, '_menu_item_menu_item_parent', '0'),
(115, 53, '_menu_item_object_id', '31'),
(116, 53, '_menu_item_object', 'page'),
(117, 53, '_menu_item_target', ''),
(118, 53, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(119, 53, '_menu_item_xfn', ''),
(120, 53, '_menu_item_url', ''),
(121, 53, '_menu_item_orphaned', '1476245786'),
(122, 54, '_menu_item_type', 'post_type'),
(123, 54, '_menu_item_menu_item_parent', '0'),
(124, 54, '_menu_item_object_id', '50'),
(125, 54, '_menu_item_object', 'page'),
(126, 54, '_menu_item_target', ''),
(127, 54, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(128, 54, '_menu_item_xfn', ''),
(129, 54, '_menu_item_url', ''),
(130, 54, '_menu_item_orphaned', '1476245786'),
(131, 55, '_menu_item_type', 'post_type'),
(132, 55, '_menu_item_menu_item_parent', '0'),
(133, 55, '_menu_item_object_id', '26'),
(134, 55, '_menu_item_object', 'page'),
(135, 55, '_menu_item_target', ''),
(136, 55, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(137, 55, '_menu_item_xfn', ''),
(138, 55, '_menu_item_url', ''),
(140, 56, '_menu_item_type', 'post_type'),
(141, 56, '_menu_item_menu_item_parent', '0'),
(142, 56, '_menu_item_object_id', '47'),
(143, 56, '_menu_item_object', 'page'),
(144, 56, '_menu_item_target', ''),
(145, 56, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(146, 56, '_menu_item_xfn', ''),
(147, 56, '_menu_item_url', ''),
(148, 56, '_menu_item_orphaned', '1476245786'),
(149, 57, '_menu_item_type', 'post_type'),
(150, 57, '_menu_item_menu_item_parent', '0'),
(151, 57, '_menu_item_object_id', '33'),
(152, 57, '_menu_item_object', 'page'),
(153, 57, '_menu_item_target', ''),
(154, 57, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(155, 57, '_menu_item_xfn', ''),
(156, 57, '_menu_item_url', ''),
(158, 58, '_menu_item_type', 'post_type'),
(159, 58, '_menu_item_menu_item_parent', '0'),
(160, 58, '_menu_item_object_id', '35'),
(161, 58, '_menu_item_object', 'page'),
(162, 58, '_menu_item_target', ''),
(163, 58, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(164, 58, '_menu_item_xfn', ''),
(165, 58, '_menu_item_url', ''),
(166, 58, '_menu_item_orphaned', '1476245786'),
(167, 59, '_menu_item_type', 'post_type'),
(168, 59, '_menu_item_menu_item_parent', '0'),
(169, 59, '_menu_item_object_id', '37'),
(170, 59, '_menu_item_object', 'page'),
(171, 59, '_menu_item_target', ''),
(172, 59, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(173, 59, '_menu_item_xfn', ''),
(174, 59, '_menu_item_url', ''),
(175, 59, '_menu_item_orphaned', '1476245786'),
(176, 60, '_menu_item_type', 'post_type'),
(177, 60, '_menu_item_menu_item_parent', '0'),
(178, 60, '_menu_item_object_id', '39'),
(179, 60, '_menu_item_object', 'page'),
(180, 60, '_menu_item_target', ''),
(181, 60, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(182, 60, '_menu_item_xfn', ''),
(183, 60, '_menu_item_url', ''),
(184, 60, '_menu_item_orphaned', '1476245786'),
(185, 61, '_menu_item_type', 'post_type'),
(186, 61, '_menu_item_menu_item_parent', '0'),
(187, 61, '_menu_item_object_id', '41'),
(188, 61, '_menu_item_object', 'page'),
(189, 61, '_menu_item_target', ''),
(190, 61, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(191, 61, '_menu_item_xfn', ''),
(192, 61, '_menu_item_url', ''),
(193, 61, '_menu_item_orphaned', '1476245786'),
(194, 62, '_menu_item_type', 'post_type'),
(195, 62, '_menu_item_menu_item_parent', '0'),
(196, 62, '_menu_item_object_id', '43'),
(197, 62, '_menu_item_object', 'page'),
(198, 62, '_menu_item_target', ''),
(199, 62, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(200, 62, '_menu_item_xfn', ''),
(201, 62, '_menu_item_url', ''),
(202, 62, '_menu_item_orphaned', '1476245786'),
(203, 63, '_menu_item_type', 'post_type'),
(204, 63, '_menu_item_menu_item_parent', '0'),
(205, 63, '_menu_item_object_id', '45'),
(206, 63, '_menu_item_object', 'page'),
(207, 63, '_menu_item_target', ''),
(208, 63, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(209, 63, '_menu_item_xfn', ''),
(210, 63, '_menu_item_url', ''),
(211, 63, '_menu_item_orphaned', '1476245786'),
(212, 64, '_menu_item_type', 'taxonomy'),
(213, 64, '_menu_item_menu_item_parent', '57'),
(214, 64, '_menu_item_object_id', '3'),
(215, 64, '_menu_item_object', 'category'),
(216, 64, '_menu_item_target', ''),
(217, 64, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(218, 64, '_menu_item_xfn', ''),
(219, 64, '_menu_item_url', ''),
(221, 65, '_menu_item_type', 'taxonomy'),
(222, 65, '_menu_item_menu_item_parent', '57'),
(223, 65, '_menu_item_object_id', '4'),
(224, 65, '_menu_item_object', 'category'),
(225, 65, '_menu_item_target', ''),
(226, 65, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(227, 65, '_menu_item_xfn', ''),
(228, 65, '_menu_item_url', ''),
(230, 66, '_menu_item_type', 'taxonomy'),
(231, 66, '_menu_item_menu_item_parent', '57'),
(232, 66, '_menu_item_object_id', '5'),
(233, 66, '_menu_item_object', 'category'),
(234, 66, '_menu_item_target', ''),
(235, 66, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(236, 66, '_menu_item_xfn', ''),
(237, 66, '_menu_item_url', ''),
(239, 67, '_menu_item_type', 'taxonomy'),
(240, 67, '_menu_item_menu_item_parent', '57'),
(241, 67, '_menu_item_object_id', '6'),
(242, 67, '_menu_item_object', 'category'),
(243, 67, '_menu_item_target', ''),
(244, 67, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(245, 67, '_menu_item_xfn', ''),
(246, 67, '_menu_item_url', ''),
(248, 68, '_menu_item_type', 'taxonomy'),
(249, 68, '_menu_item_menu_item_parent', '57'),
(250, 68, '_menu_item_object_id', '7'),
(251, 68, '_menu_item_object', 'category'),
(252, 68, '_menu_item_target', ''),
(253, 68, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(254, 68, '_menu_item_xfn', ''),
(255, 68, '_menu_item_url', ''),
(257, 69, '_menu_item_type', 'taxonomy'),
(258, 69, '_menu_item_menu_item_parent', '72'),
(259, 69, '_menu_item_object_id', '9'),
(260, 69, '_menu_item_object', 'category'),
(261, 69, '_menu_item_target', ''),
(262, 69, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(263, 69, '_menu_item_xfn', ''),
(264, 69, '_menu_item_url', ''),
(266, 70, '_menu_item_type', 'taxonomy'),
(267, 70, '_menu_item_menu_item_parent', '72'),
(268, 70, '_menu_item_object_id', '10'),
(269, 70, '_menu_item_object', 'category'),
(270, 70, '_menu_item_target', ''),
(271, 70, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(272, 70, '_menu_item_xfn', ''),
(273, 70, '_menu_item_url', ''),
(275, 71, '_menu_item_type', 'taxonomy'),
(276, 71, '_menu_item_menu_item_parent', '72'),
(277, 71, '_menu_item_object_id', '11'),
(278, 71, '_menu_item_object', 'category'),
(279, 71, '_menu_item_target', ''),
(280, 71, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(281, 71, '_menu_item_xfn', ''),
(282, 71, '_menu_item_url', ''),
(284, 72, '_menu_item_type', 'post_type'),
(285, 72, '_menu_item_menu_item_parent', '0'),
(286, 72, '_menu_item_object_id', '45'),
(287, 72, '_menu_item_object', 'page'),
(288, 72, '_menu_item_target', ''),
(289, 72, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(290, 72, '_menu_item_xfn', ''),
(291, 72, '_menu_item_url', ''),
(293, 73, '_menu_item_type', 'post_type'),
(294, 73, '_menu_item_menu_item_parent', '0'),
(295, 73, '_menu_item_object_id', '50'),
(296, 73, '_menu_item_object', 'page'),
(297, 73, '_menu_item_target', ''),
(298, 73, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(299, 73, '_menu_item_xfn', ''),
(300, 73, '_menu_item_url', ''),
(311, 22995, 'views', '8'),
(302, 74, '_menu_item_type', 'post_type'),
(303, 74, '_menu_item_menu_item_parent', '0'),
(304, 74, '_menu_item_object_id', '47'),
(305, 74, '_menu_item_object', 'page'),
(306, 74, '_menu_item_target', ''),
(307, 74, '_menu_item_classes', 'a:1:{i:0;s:0:"";}'),
(308, 74, '_menu_item_xfn', ''),
(309, 74, '_menu_item_url', ''),
(314, 77, '_wp_attached_file', '2016/10/service_img.jpg'),
(315, 77, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1139;s:6:"height";i:86;s:4:"file";s:23:"2016/10/service_img.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:22:"service_img-150x86.jpg";s:5:"width";i:150;s:6:"height";i:86;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:22:"service_img-300x23.jpg";s:5:"width";i:300;s:6:"height";i:23;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:22:"service_img-768x58.jpg";s:5:"width";i:768;s:6:"height";i:58;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:23:"service_img-1024x77.jpg";s:5:"width";i:1024;s:6:"height";i:77;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:22:"service_img-750x57.jpg";s:5:"width";i:750;s:6:"height";i:57;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:22:"service_img-720x86.jpg";s:5:"width";i:720;s:6:"height";i:86;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(316, 78, '_wp_attached_file', '2016/10/images-1.jpg'),
(317, 78, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:259;s:6:"height";i:194;s:4:"file";s:20:"2016/10/images-1.jpg";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:20:"images-1-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(318, 79, '_wp_attached_file', '2016/10/contact_us-1.jpg'),
(319, 79, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:217;s:6:"height";i:232;s:4:"file";s:24:"2016/10/contact_us-1.jpg";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:24:"contact_us-1-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(320, 80, '_wp_attached_file', '2016/10/shop-150x150.jpg'),
(321, 80, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:150;s:6:"height";i:150;s:4:"file";s:24:"2016/10/shop-150x150.jpg";s:5:"sizes";a:0:{}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(322, 81, '_wp_attached_file', '2016/10/images-2-150x150.jpg'),
(323, 81, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:150;s:6:"height";i:150;s:4:"file";s:28:"2016/10/images-2-150x150.jpg";s:5:"sizes";a:0:{}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(324, 26, 'slide_template', 'default'),
(325, 85, '_wp_attached_file', '2016/10/logo.png'),
(326, 85, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:810;s:6:"height";i:218;s:4:"file";s:16:"2016/10/logo.png";s:5:"sizes";a:5:{s:9:"thumbnail";a:4:{s:4:"file";s:16:"logo-150x150.png";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:9:"image/png";}s:6:"medium";a:4:{s:4:"file";s:15:"logo-300x81.png";s:5:"width";i:300;s:6:"height";i:81;s:9:"mime-type";s:9:"image/png";}s:12:"medium_large";a:4:{s:4:"file";s:16:"logo-768x207.png";s:5:"width";i:768;s:6:"height";i:207;s:9:"mime-type";s:9:"image/png";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:16:"logo-750x202.png";s:5:"width";i:750;s:6:"height";i:202;s:9:"mime-type";s:9:"image/png";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:16:"logo-720x218.png";s:5:"width";i:720;s:6:"height";i:218;s:9:"mime-type";s:9:"image/png";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(327, 86, '_edit_last', '1'),
(328, 86, '_edit_lock', '1476250601:1'),
(329, 87, '_wp_attached_file', '2016/10/img-1.jpg'),
(330, 87, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1140;s:6:"height";i:641;s:4:"file";s:17:"2016/10/img-1.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"img-1-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:17:"img-1-300x169.jpg";s:5:"width";i:300;s:6:"height";i:169;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:17:"img-1-768x432.jpg";s:5:"width";i:768;s:6:"height";i:432;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:18:"img-1-1024x576.jpg";s:5:"width";i:1024;s:6:"height";i:576;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:17:"img-1-750x422.jpg";s:5:"width";i:750;s:6:"height";i:422;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:17:"img-1-720x360.jpg";s:5:"width";i:720;s:6:"height";i:360;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(331, 88, '_wp_attached_file', '2016/10/WechatIMG14.jpeg'),
(332, 88, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1140;s:6:"height";i:641;s:4:"file";s:24:"2016/10/WechatIMG14.jpeg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:24:"WechatIMG14-150x150.jpeg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:24:"WechatIMG14-300x169.jpeg";s:5:"width";i:300;s:6:"height";i:169;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:24:"WechatIMG14-768x432.jpeg";s:5:"width";i:768;s:6:"height";i:432;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:25:"WechatIMG14-1024x576.jpeg";s:5:"width";i:1024;s:6:"height";i:576;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:24:"WechatIMG14-750x422.jpeg";s:5:"width";i:750;s:6:"height";i:422;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:24:"WechatIMG14-720x360.jpeg";s:5:"width";i:720;s:6:"height";i:360;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(333, 89, '_wp_attached_file', '2016/10/contemporary-kitchen-art-decor.jpg'),
(334, 89, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:5000;s:6:"height";i:2457;s:4:"file";s:42:"2016/10/contemporary-kitchen-art-decor.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:42:"contemporary-kitchen-art-decor-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:42:"contemporary-kitchen-art-decor-300x147.jpg";s:5:"width";i:300;s:6:"height";i:147;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:42:"contemporary-kitchen-art-decor-768x377.jpg";s:5:"width";i:768;s:6:"height";i:377;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:43:"contemporary-kitchen-art-decor-1024x503.jpg";s:5:"width";i:1024;s:6:"height";i:503;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:42:"contemporary-kitchen-art-decor-750x369.jpg";s:5:"width";i:750;s:6:"height";i:369;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:42:"contemporary-kitchen-art-decor-720x360.jpg";s:5:"width";i:720;s:6:"height";i:360;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(335, 90, '_wp_attached_file', '2016/10/img-2.jpg'),
(336, 90, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1140;s:6:"height";i:641;s:4:"file";s:17:"2016/10/img-2.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:17:"img-2-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:17:"img-2-300x169.jpg";s:5:"width";i:300;s:6:"height";i:169;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:17:"img-2-768x432.jpg";s:5:"width";i:768;s:6:"height";i:432;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:18:"img-2-1024x576.jpg";s:5:"width";i:1024;s:6:"height";i:576;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:17:"img-2-750x422.jpg";s:5:"width";i:750;s:6:"height";i:422;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:17:"img-2-720x360.jpg";s:5:"width";i:720;s:6:"height";i:360;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(337, 91, '_wp_attached_file', '2016/10/brandlogo.jpg'),
(338, 91, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1140;s:6:"height";i:641;s:4:"file";s:21:"2016/10/brandlogo.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:21:"brandlogo-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:21:"brandlogo-300x169.jpg";s:5:"width";i:300;s:6:"height";i:169;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:21:"brandlogo-768x432.jpg";s:5:"width";i:768;s:6:"height";i:432;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:22:"brandlogo-1024x576.jpg";s:5:"width";i:1024;s:6:"height";i:576;s:9:"mime-type";s:10:"image/jpeg";}s:24:"integral-post-thumbnails";a:4:{s:4:"file";s:21:"brandlogo-750x422.jpg";s:5:"width";i:750;s:6:"height";i:422;s:9:"mime-type";s:10:"image/jpeg";}s:29:"integral-home-post-thumbnails";a:4:{s:4:"file";s:21:"brandlogo-720x360.jpg";s:5:"width";i:720;s:6:"height";i:360;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(339, 86, 'slide_template', 'default'),
(340, 86, 'twojs_slideshowImages', 'a:4:{i:0;s:2:"91";i:1;s:2:"87";i:2;s:2:"88";i:3;s:2:"90";}'),
(341, 86, 'twojs_size', 'a:3:{s:5:"width";s:3:"100";s:9:"widthType";s:1:"1";s:6:"height";s:0:"";}'),
(342, 86, 'twojs_minsize', 'a:2:{s:5:"width";s:3:"300";s:6:"height";s:0:"";}'),
(343, 86, 'twojs_maxsize', 'a:3:{s:5:"width";s:3:"100";s:9:"widthType";s:1:"1";s:6:"height";s:0:"";}'),
(344, 86, 'twojs_ratio', '16/9'),
(345, 86, 'twojs_fit', 'contain'),
(346, 86, 'twojs_margin', '3'),
(347, 86, 'twojs_thumbmargin', '2'),
(348, 86, 'twojs_nav', 'dots'),
(349, 86, 'twojs_navPos', '0'),
(350, 86, 'twojs_thumb-size-options', 'a:3:{s:5:"width";s:3:"120";s:6:"height";s:2:"60";s:6:"source";s:6:"medium";}'),
(351, 86, 'twojs_fullscreen', 'false'),
(352, 86, 'twojs_arrow', '1'),
(354, 86, 'twojs_border-options', 'a:3:{s:5:"width";s:1:"5";s:5:"style";s:5:"solid";s:5:"color";s:16:"rgb(229, 64, 40)";}'),
(355, 86, 'twojs_bgColor', 'rgb(255, 255, 255)'),
(356, 86, 'twojs_bgNavColor', 'rgb(255, 255, 255)'),
(357, 86, 'twojs_transition', 'slide'),
(358, 86, 'twojs_transitionduration', '300'),
(359, 86, 'twojs_loop', '1'),
(360, 86, 'twojs_autoplay', '1'),
(361, 86, 'twojs_timer', '5000'),
(362, 86, 'twojs_autoplaystop', '1'),
(363, 86, 'views', '12'),
(368, 95, '_edit_last', '1'),
(365, 23, 'slide_template', 'default'),
(369, 95, '_edit_lock', '1476252590:1'),
(385, 102, '_wp_attached_file', '2016/10/333.jpg'),
(386, 102, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:283;s:6:"height";i:178;s:4:"file";s:15:"2016/10/333.jpg";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:15:"333-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(383, 101, '_wp_attached_file', '2016/10/222.jpg'),
(384, 101, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:263;s:6:"height";i:192;s:4:"file";s:15:"2016/10/222.jpg";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:15:"222-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(381, 100, '_wp_attached_file', '2016/10/111.jpg'),
(382, 100, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:268;s:6:"height";i:188;s:4:"file";s:15:"2016/10/111.jpg";s:5:"sizes";a:1:{s:9:"thumbnail";a:4:{s:4:"file";s:15:"111-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:0:"";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(376, 95, 'slide_template', 'default'),
(377, 95, 'settings', 'a:26:{s:9:"animation";s:5:"slide";s:10:"slideSpeed";s:1:"1";s:16:"descriptionSpeed";s:3:"0.4";s:13:"intervalSpeed";s:1:"5";s:13:"slidesPerView";s:1:"2";s:8:"maxWidth";s:1:"0";s:11:"aspectRatio";s:3:"3:1";s:6:"height";s:3:"300";s:14:"imageBehaviour";s:7:"natural";s:15:"showDescription";s:4:"true";s:15:"hideDescription";s:4:"true";s:27:"preserveSlideshowDimensions";s:5:"false";s:20:"enableResponsiveness";s:4:"true";s:4:"play";s:4:"true";s:4:"loop";s:4:"true";s:12:"pauseOnHover";s:4:"true";s:12:"controllable";s:4:"true";s:21:"hideNavigationButtons";s:5:"false";s:14:"showPagination";s:4:"true";s:14:"hidePagination";s:4:"true";s:12:"controlPanel";s:5:"false";s:16:"hideControlPanel";s:4:"true";s:15:"waitUntilLoaded";s:4:"true";s:15:"showLoadingIcon";s:4:"true";s:6:"random";s:5:"false";s:11:"avoidFilter";s:4:"true";}'),
(378, 95, 'styleSettings', 'a:1:{s:5:"style";s:15:"style-light.css";}'),
(379, 95, 'slides', 'a:3:{i:1;a:9:{s:17:"titleElementTagID";s:1:"0";s:5:"title";s:3:"333";s:23:"descriptionElementTagID";s:1:"0";s:11:"description";s:0:"";s:3:"url";s:0:"";s:9:"urlTarget";s:5:"_self";s:15:"alternativeText";s:0:"";s:4:"type";s:10:"attachment";s:6:"postId";s:3:"102";}i:2;a:9:{s:17:"titleElementTagID";s:1:"0";s:5:"title";s:3:"222";s:23:"descriptionElementTagID";s:1:"0";s:11:"description";s:0:"";s:3:"url";s:0:"";s:9:"urlTarget";s:5:"_self";s:15:"alternativeText";s:0:"";s:4:"type";s:10:"attachment";s:6:"postId";s:3:"101";}i:3;a:9:{s:17:"titleElementTagID";s:1:"0";s:5:"title";s:3:"111";s:23:"descriptionElementTagID";s:1:"0";s:11:"description";s:0:"";s:3:"url";s:0:"";s:9:"urlTarget";s:5:"_self";s:15:"alternativeText";s:0:"";s:4:"type";s:10:"attachment";s:6:"postId";s:3:"100";}}'),
(387, 103, '_wp_attached_file', '2016/10/Net-study-progress.pdf'),
(390, 105, 'ufaq_order', '1000'),
(389, 5, 'slide_template', 'default'),
(391, 105, '_edit_last', '1'),
(392, 105, '_edit_lock', '1476253059:1'),
(393, 105, 'slide_template', 'default'),
(394, 105, 'EWD_UFAQ_Post_Author', 'admin'),
(395, 106, 'ufaq_order', '1000'),
(396, 106, '_edit_last', '1'),
(397, 106, '_edit_lock', '1476253091:1'),
(398, 106, 'slide_template', 'default'),
(399, 106, 'EWD_UFAQ_Post_Author', 'admin'),
(400, 107, 'ufaq_order', '1000'),
(401, 108, 'ufaq_order', '1000'),
(404, 106, 'ufaq_view_count', '1'),
(403, 8, 'slide_template', 'default'),
(407, 105, 'ufaq_view_count', '1'),
(406, 10, 'slide_template', 'default');

-- --------------------------------------------------------

--
-- 表的结构 `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=110 ;

--
-- 转存表中的数据 `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2016-10-12 11:43:42', '2016-10-12 03:43:42', '欢迎使用WordPress。这是您的第一篇文章。编辑或删除它，然后开始写作吧！', '世界，您好！', '', 'trash', 'open', 'open', '', 'hello-world__trashed', '', '', '2016-10-12 11:52:01', '2016-10-12 03:52:01', '', 0, 'http://stoneappliance.co.nz/?p=1', 0, 'post', '', 1),
(2, 1, '2016-10-12 11:43:42', '2016-10-12 03:43:42', '这是一个范例页面。它和博客文章不同，因为它的页面位置是固定的，同时会显示于您的博客导航栏（大多数主题中）。大多数人会新增一个“关于”页面向访客介绍自己。它可能类似下面这样：\n\n<blockquote>我是一个很有趣的人，我创建了工厂和庄园。并且，顺便提一下，我的妻子也很好。</blockquote>\n\n……或下面这样：\n\n<blockquote>XYZ装置公司成立于1971年，公司成立以来，我们一直向市民提供高品质的装置。我们位于北京市，有超过2,000名员工，对北京市有着相当大的贡献。</blockquote>\n\n作为一个新的WordPress用户，您可以前往<a href="http://stoneappliance.co.nz/wp-admin/">您的仪表盘</a>删除这个页面，并建立属于您的全新内容。祝您使用愉快！', '示例页面', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2016-10-12 11:58:04', '2016-10-12 03:58:04', '', 0, 'http://stoneappliance.co.nz/?page_id=2', 0, 'page', '', 0),
(3, 1, '2016-10-12 11:43:55', '0000-00-00 00:00:00', '', '自动草稿', '', 'auto-draft', 'open', 'open', '', '', '', '', '2016-10-12 11:43:55', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=3', 0, 'post', '', 0),
(4, 1, '2016-10-12 11:52:01', '2016-10-12 03:52:01', '欢迎使用WordPress。这是您的第一篇文章。编辑或删除它，然后开始写作吧！', '世界，您好！', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2016-10-12 11:52:01', '2016-10-12 03:52:01', '', 1, 'http://stoneappliance.co.nz/2016/10/12/1-revision-v1/', 0, 'revision', '', 0),
(5, 1, '2016-10-12 11:53:19', '2016-10-12 03:53:19', '<a href="http://stoneappliance.co.nz/wp-content/uploads/2016/10/Net-study-progress.pdf">net-study-progress</a>', 'manual', '', 'publish', 'open', 'open', '', 'manual', '', '', '2016-10-12 14:13:03', '2016-10-12 06:13:03', '', 0, 'http://stoneappliance.co.nz/?p=5', 0, 'post', '', 0),
(104, 1, '2016-10-12 14:13:03', '2016-10-12 06:13:03', '<a href="http://stoneappliance.co.nz/wp-content/uploads/2016/10/Net-study-progress.pdf">net-study-progress</a>', 'manual', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2016-10-12 14:13:03', '2016-10-12 06:13:03', '', 5, 'http://stoneappliance.co.nz/2016/10/12/5-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2016-10-12 11:53:19', '2016-10-12 03:53:19', '<a href="http://stoneappliance.co.nz/wp-content/uploads/2016/10/Net-study-progress.pdf">net-study-progress</a>\r\n\r\n<a href="http://localhost:8080/wordpress/wp-content/uploads/2016/09/JavaScript权威指南.pdf">Js指南</a>', 'manual', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2016-10-12 11:53:19', '2016-10-12 03:53:19', '', 5, 'http://stoneappliance.co.nz/2016/10/12/5-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2016-10-12 11:53:51', '2016-10-12 03:53:51', '[ultimate-faqs]', 'Questions&Answers', '', 'publish', 'open', 'open', '', 'questionsanswers', '', '', '2016-10-12 14:16:45', '2016-10-12 06:16:45', '', 0, 'http://stoneappliance.co.nz/?p=8', 0, 'post', '', 0),
(9, 1, '2016-10-12 11:53:51', '2016-10-12 03:53:51', '[ultimate-faqs]', 'Questions&Answers', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2016-10-12 11:53:51', '2016-10-12 03:53:51', '', 8, 'http://stoneappliance.co.nz/2016/10/12/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2016-10-12 11:54:19', '2016-10-12 03:54:19', '[Total_Soft_Gallery_Video id="2"]', 'Gallery--one', '', 'publish', 'open', 'open', '', 'gallery-one', '', '', '2016-10-12 14:28:29', '2016-10-12 06:28:29', '', 0, 'http://stoneappliance.co.nz/?p=10', 0, 'post', '', 0),
(11, 1, '2016-10-12 11:54:19', '2016-10-12 03:54:19', '[Total_Soft_Gallery_Video id="1"]', 'Gallery--one', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2016-10-12 11:54:19', '2016-10-12 03:54:19', '', 10, 'http://stoneappliance.co.nz/2016/10/12/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2016-10-12 11:54:25', '0000-00-00 00:00:00', '', '自动草稿', '', 'auto-draft', 'open', 'open', '', '', '', '', '2016-10-12 11:54:25', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=12', 0, 'post', '', 0),
(13, 1, '2016-10-12 11:54:55', '2016-10-12 03:54:55', '', 'Home Entertainment', '', 'publish', 'open', 'open', '', 'home-entertainment', '', '', '2016-10-12 11:54:55', '2016-10-12 03:54:55', '', 0, 'http://stoneappliance.co.nz/?p=13', 0, 'post', '', 0),
(14, 1, '2016-10-12 11:54:55', '2016-10-12 03:54:55', '', 'Home Entertainment', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2016-10-12 11:54:55', '2016-10-12 03:54:55', '', 13, 'http://stoneappliance.co.nz/2016/10/12/13-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2016-10-12 11:55:22', '2016-10-12 03:55:22', '', 'Kitchen Whiteware', '', 'publish', 'open', 'open', '', 'kitchen-whiteware', '', '', '2016-10-12 11:55:22', '2016-10-12 03:55:22', '', 0, 'http://stoneappliance.co.nz/?p=15', 0, 'post', '', 0),
(16, 1, '2016-10-12 11:55:22', '2016-10-12 03:55:22', '', 'Kitchen Whiteware', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2016-10-12 11:55:22', '2016-10-12 03:55:22', '', 15, 'http://stoneappliance.co.nz/2016/10/12/15-revision-v1/', 0, 'revision', '', 0),
(17, 1, '2016-10-12 11:55:43', '2016-10-12 03:55:43', '', 'Home Appliances', '', 'publish', 'open', 'open', '', 'home-appliances', '', '', '2016-10-12 11:55:43', '2016-10-12 03:55:43', '', 0, 'http://stoneappliance.co.nz/?p=17', 0, 'post', '', 0),
(18, 1, '2016-10-12 11:55:43', '2016-10-12 03:55:43', '', 'Home Appliances', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2016-10-12 11:55:43', '2016-10-12 03:55:43', '', 17, 'http://stoneappliance.co.nz/2016/10/12/17-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2016-10-12 11:56:12', '2016-10-12 03:56:12', '', 'Hot Deal--one', '', 'publish', 'open', 'open', '', 'hot-deal-one', '', '', '2016-10-12 11:56:12', '2016-10-12 03:56:12', '', 0, 'http://stoneappliance.co.nz/?p=19', 0, 'post', '', 0),
(20, 1, '2016-10-12 11:56:12', '2016-10-12 03:56:12', '', 'Hot Deal--one', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2016-10-12 11:56:12', '2016-10-12 03:56:12', '', 19, 'http://stoneappliance.co.nz/2016/10/12/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2016-10-12 11:56:39', '2016-10-12 03:56:39', '', 'Furniture–two', '', 'publish', 'open', 'open', '', 'furniture-two', '', '', '2016-10-12 11:56:39', '2016-10-12 03:56:39', '', 0, 'http://stoneappliance.co.nz/?p=21', 0, 'post', '', 0),
(22, 1, '2016-10-12 11:56:39', '2016-10-12 03:56:39', '', 'Furniture–two', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2016-10-12 11:56:39', '2016-10-12 03:56:39', '', 21, 'http://stoneappliance.co.nz/2016/10/12/21-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2016-10-12 11:57:41', '2016-10-12 03:57:41', '<p style="text-align: left;">[Total_Soft_Gallery_Video id="1"]</p>\r\nThe kitchen is the heart of a home; it is where meals are cooked, meaning conversations happen, and everyone gets the bulk of their nutrition, both physical and emotional. There is something to be said for a sweet, quaint little space, and there is also something significant about a super-sleek, ultra-modern space with all the latest finishes. Kitchen is the hub of your home.\r\n\r\n[slideshow_deploy id=''95'']', 'Furniture–one', '', 'publish', 'open', 'open', '', 'furniture-one', '', '', '2016-10-12 14:09:02', '2016-10-12 06:09:02', '', 0, 'http://stoneappliance.co.nz/?p=23', 0, 'post', '', 0),
(24, 1, '2016-10-12 11:57:41', '2016-10-12 03:57:41', '<p style="text-align: left;">[Total_Soft_Gallery_Video id="2"]</p>\r\nThe kitchen is the heart of a home; it is where meals are cooked, meaning conversations happen, and everyone gets the bulk of their nutrition, both physical and emotional. There is something to be said for a sweet, quaint little space, and there is also something significant about a super-sleek, ultra-modern space with all the latest finishes. Kitchen is the hub of your home.\r\n\r\n[slideshow_deploy id=''23024'']', 'Furniture–one', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2016-10-12 11:57:41', '2016-10-12 03:57:41', '', 23, 'http://stoneappliance.co.nz/2016/10/12/23-revision-v1/', 0, 'revision', '', 0),
(25, 1, '2016-10-12 11:58:04', '2016-10-12 03:58:04', '这是一个范例页面。它和博客文章不同，因为它的页面位置是固定的，同时会显示于您的博客导航栏（大多数主题中）。大多数人会新增一个“关于”页面向访客介绍自己。它可能类似下面这样：\n\n<blockquote>我是一个很有趣的人，我创建了工厂和庄园。并且，顺便提一下，我的妻子也很好。</blockquote>\n\n……或下面这样：\n\n<blockquote>XYZ装置公司成立于1971年，公司成立以来，我们一直向市民提供高品质的装置。我们位于北京市，有超过2,000名员工，对北京市有着相当大的贡献。</blockquote>\n\n作为一个新的WordPress用户，您可以前往<a href="http://stoneappliance.co.nz/wp-admin/">您的仪表盘</a>删除这个页面，并建立属于您的全新内容。祝您使用愉快！', '示例页面', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2016-10-12 11:58:04', '2016-10-12 03:58:04', '', 2, 'http://stoneappliance.co.nz/2016/10/12/2-revision-v1/', 0, 'revision', '', 0),
(26, 1, '2016-10-12 12:01:43', '2016-10-12 04:01:43', '<p style="text-align: center;">[2jslideshow id="86"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n\r\n<div class="items-group no-divider">\r\n<div class="content-block">\r\n<div class="content-block-inner">\r\n<div class="text-section">\r\n\r\n<span style="font-size: 15px;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</span>\r\n<a href="http://localhost:8080/wordpress/?page_id=22721"><img class="alignnone wp-image-23015" style="margin-left: 100px;" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us" width="160" height="171" /></a>                            <a href=" http://localhost:8080/conceptkitchen/?page_id=22698"><img class="alignnone wp-image-23011" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop" width="170" height="170" /></a>                   <a href=" http://localhost:8080/conceptkitchen/?page_id=22711"><img class="alignnone wp-image-23010" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images" width="170" height="170" /></a>\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2016-10-12 13:04:14', '2016-10-12 05:04:14', '', 0, 'http://stoneappliance.co.nz/?page_id=26', 0, 'page', '', 0),
(27, 1, '2016-10-12 12:01:43', '2016-10-12 04:01:43', '<p style="text-align: center;">[2jslideshow id="22995"]</p>\r\n<p style="text-align: center;"></p>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 12:01:43', '2016-10-12 04:01:43', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(28, 1, '2016-10-12 12:04:19', '2016-10-12 04:04:19', '<label> 你的名字 （必填）\n    [text* your-name] </label>\n\n<label> 你的邮箱 （必填）\n    [email* your-email] </label>\n\n<label> 主题\n    [text your-subject] </label>\n\n<label> 你的留言\n    [textarea your-message] </label>\n\n[submit "发送"]\nConcept Kitchen "[your-subject]"\n[your-name] <478996650@qq.com>\n发件人：[your-name] <[your-email]>\n主题：[your-subject]\n\n留言正文：\n[your-message]\n\n--\n这封邮件通过联系表单【Concept Kitchen (http://stoneappliance.co.nz)】发送\n478996650@qq.com\nReply-To: [your-email]\n\n0\n0\n\nConcept Kitchen "[your-subject]"\nConcept Kitchen <478996650@qq.com>\n留言正文：\n[your-message]\n\n--\n这封邮件通过联系表单【Concept Kitchen (http://stoneappliance.co.nz)】发送\n[your-email]\nReply-To: 478996650@qq.com\n\n0\n0\nThank you for your message. It has been sent.\nThere was an error trying to send your message. Please try again later.\nOne or more fields have an error. Please check and try again.\nThere was an error trying to send your message. Please try again later.\nYou must accept the terms and conditions before sending your message.\nThe field is required.\nThe field is too long.\nThe field is too short.', '联系表单 1', '', 'publish', 'closed', 'closed', '', '%e8%81%94%e7%b3%bb%e8%a1%a8%e5%8d%95-1', '', '', '2016-10-12 12:04:19', '2016-10-12 04:04:19', '', 0, 'http://stoneappliance.co.nz/?post_type=wpcf7_contact_form&p=28', 0, 'wpcf7_contact_form', '', 0),
(29, 1, '2016-10-12 12:11:03', '0000-00-00 00:00:00', '', '首页', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:11:03', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=29', 1, 'nav_menu_item', '', 0),
(30, 1, '2016-10-12 12:11:03', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:11:03', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=30', 1, 'nav_menu_item', '', 0),
(31, 1, '2016-10-12 12:12:23', '2016-10-12 04:12:23', '', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2016-10-12 12:12:23', '2016-10-12 04:12:23', '', 0, 'http://stoneappliance.co.nz/?page_id=31', 0, 'page', '', 0),
(32, 1, '2016-10-12 12:12:23', '2016-10-12 04:12:23', '', 'About Us', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2016-10-12 12:12:23', '2016-10-12 04:12:23', '', 31, 'http://stoneappliance.co.nz/2016/10/12/31-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2016-10-12 12:12:47', '2016-10-12 04:12:47', '', 'Shop', '', 'publish', 'closed', 'closed', '', 'shop', '', '', '2016-10-12 12:12:47', '2016-10-12 04:12:47', '', 0, 'http://stoneappliance.co.nz/?page_id=33', 0, 'page', '', 0),
(34, 1, '2016-10-12 12:12:47', '2016-10-12 04:12:47', '', 'Shop', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2016-10-12 12:12:47', '2016-10-12 04:12:47', '', 33, 'http://stoneappliance.co.nz/2016/10/12/33-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2016-10-12 12:13:19', '2016-10-12 04:13:19', '', 'Hot Deal', '', 'publish', 'closed', 'closed', '', 'hot-deal', '', '', '2016-10-12 12:13:19', '2016-10-12 04:13:19', '', 33, 'http://stoneappliance.co.nz/?page_id=35', 0, 'page', '', 0),
(36, 1, '2016-10-12 12:13:19', '2016-10-12 04:13:19', '', 'Hot Deal', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2016-10-12 12:13:19', '2016-10-12 04:13:19', '', 35, 'http://stoneappliance.co.nz/2016/10/12/35-revision-v1/', 0, 'revision', '', 0),
(37, 1, '2016-10-12 12:13:41', '2016-10-12 04:13:41', '', 'Furniture', '', 'publish', 'closed', 'closed', '', 'furniture', '', '', '2016-10-12 12:13:41', '2016-10-12 04:13:41', '', 33, 'http://stoneappliance.co.nz/?page_id=37', 1, 'page', '', 0),
(38, 1, '2016-10-12 12:13:41', '2016-10-12 04:13:41', '', 'Furniture', '', 'inherit', 'closed', 'closed', '', '37-revision-v1', '', '', '2016-10-12 12:13:41', '2016-10-12 04:13:41', '', 37, 'http://stoneappliance.co.nz/2016/10/12/37-revision-v1/', 0, 'revision', '', 0),
(39, 1, '2016-10-12 12:14:16', '2016-10-12 04:14:16', '', 'Home Entertainment', '', 'publish', 'closed', 'closed', '', 'home-entertainment', '', '', '2016-10-12 12:14:16', '2016-10-12 04:14:16', '', 33, 'http://stoneappliance.co.nz/?page_id=39', 2, 'page', '', 0),
(40, 1, '2016-10-12 12:14:16', '2016-10-12 04:14:16', '', 'Home Entertainment', '', 'inherit', 'closed', 'closed', '', '39-revision-v1', '', '', '2016-10-12 12:14:16', '2016-10-12 04:14:16', '', 39, 'http://stoneappliance.co.nz/2016/10/12/39-revision-v1/', 0, 'revision', '', 0),
(41, 1, '2016-10-12 12:14:37', '2016-10-12 04:14:37', '', 'Home Appliances', '', 'publish', 'closed', 'closed', '', 'home-appliances', '', '', '2016-10-12 12:14:37', '2016-10-12 04:14:37', '', 33, 'http://stoneappliance.co.nz/?page_id=41', 3, 'page', '', 0),
(42, 1, '2016-10-12 12:14:37', '2016-10-12 04:14:37', '', 'Home Appliances', '', 'inherit', 'closed', 'closed', '', '41-revision-v1', '', '', '2016-10-12 12:14:37', '2016-10-12 04:14:37', '', 41, 'http://stoneappliance.co.nz/2016/10/12/41-revision-v1/', 0, 'revision', '', 0),
(43, 1, '2016-10-12 12:15:15', '2016-10-12 04:15:15', '', 'Kitchen Whiteware', '', 'publish', 'closed', 'closed', '', 'kitchen-whiteware', '', '', '2016-10-12 12:15:15', '2016-10-12 04:15:15', '', 33, 'http://stoneappliance.co.nz/?page_id=43', 4, 'page', '', 0),
(44, 1, '2016-10-12 12:15:15', '2016-10-12 04:15:15', '', 'Kitchen Whiteware', '', 'inherit', 'closed', 'closed', '', '43-revision-v1', '', '', '2016-10-12 12:15:15', '2016-10-12 04:15:15', '', 43, 'http://stoneappliance.co.nz/2016/10/12/43-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2016-10-12 12:15:31', '2016-10-12 04:15:31', '', 'Support', '', 'publish', 'closed', 'closed', '', 'support', '', '', '2016-10-12 12:15:31', '2016-10-12 04:15:31', '', 0, 'http://stoneappliance.co.nz/?page_id=45', 0, 'page', '', 0),
(46, 1, '2016-10-12 12:15:31', '2016-10-12 04:15:31', '', 'Support', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2016-10-12 12:15:31', '2016-10-12 04:15:31', '', 45, 'http://stoneappliance.co.nz/2016/10/12/45-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2016-10-12 12:15:56', '2016-10-12 04:15:56', '', 'Kitchentrend.Mag', '', 'publish', 'closed', 'closed', '', 'kitchentrend-mag', '', '', '2016-10-12 12:15:56', '2016-10-12 04:15:56', '', 0, 'http://stoneappliance.co.nz/?page_id=47', 0, 'page', '', 0),
(48, 1, '2016-10-12 12:15:56', '2016-10-12 04:15:56', '', 'Kitchentrend.Mag', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2016-10-12 12:15:56', '2016-10-12 04:15:56', '', 47, 'http://stoneappliance.co.nz/2016/10/12/47-revision-v1/', 0, 'revision', '', 0),
(49, 1, '2016-10-12 12:16:00', '2016-10-12 04:16:00', '', 'Kitchentrend.Mag', '', 'inherit', 'closed', 'closed', '', '47-autosave-v1', '', '', '2016-10-12 12:16:00', '2016-10-12 04:16:00', '', 47, 'http://stoneappliance.co.nz/2016/10/12/47-autosave-v1/', 0, 'revision', '', 0),
(50, 1, '2016-10-12 12:16:11', '2016-10-12 04:16:11', '', 'Contact Us', '', 'publish', 'closed', 'closed', '', 'contact-us', '', '', '2016-10-12 12:16:11', '2016-10-12 04:16:11', '', 0, 'http://stoneappliance.co.nz/?page_id=50', 0, 'page', '', 0),
(51, 1, '2016-10-12 12:16:11', '2016-10-12 04:16:11', '', 'Contact Us', '', 'inherit', 'closed', 'closed', '', '50-revision-v1', '', '', '2016-10-12 12:16:11', '2016-10-12 04:16:11', '', 50, 'http://stoneappliance.co.nz/2016/10/12/50-revision-v1/', 0, 'revision', '', 0),
(52, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', '首页', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=52', 1, 'nav_menu_item', '', 0),
(53, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=53', 1, 'nav_menu_item', '', 0),
(54, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=54', 1, 'nav_menu_item', '', 0),
(55, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '55', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 0, 'http://stoneappliance.co.nz/?p=55', 1, 'nav_menu_item', '', 0),
(56, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=56', 1, 'nav_menu_item', '', 0),
(57, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '57', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 0, 'http://stoneappliance.co.nz/?p=57', 2, 'nav_menu_item', '', 0),
(58, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 33, 'http://stoneappliance.co.nz/?p=58', 1, 'nav_menu_item', '', 0),
(59, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 33, 'http://stoneappliance.co.nz/?p=59', 1, 'nav_menu_item', '', 0),
(60, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 33, 'http://stoneappliance.co.nz/?p=60', 1, 'nav_menu_item', '', 0),
(61, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 33, 'http://stoneappliance.co.nz/?p=61', 1, 'nav_menu_item', '', 0),
(62, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 33, 'http://stoneappliance.co.nz/?p=62', 1, 'nav_menu_item', '', 0),
(63, 1, '2016-10-12 12:16:26', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2016-10-12 12:16:26', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?p=63', 1, 'nav_menu_item', '', 0),
(64, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '64', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 2, 'http://stoneappliance.co.nz/?p=64', 3, 'nav_menu_item', '', 0),
(65, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '65', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 2, 'http://stoneappliance.co.nz/?p=65', 6, 'nav_menu_item', '', 0),
(66, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '66', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 2, 'http://stoneappliance.co.nz/?p=66', 5, 'nav_menu_item', '', 0),
(67, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '67', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 2, 'http://stoneappliance.co.nz/?p=67', 4, 'nav_menu_item', '', 0),
(68, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '68', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 2, 'http://stoneappliance.co.nz/?p=68', 7, 'nav_menu_item', '', 0),
(69, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '69', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 8, 'http://stoneappliance.co.nz/?p=69', 9, 'nav_menu_item', '', 0),
(70, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '70', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 8, 'http://stoneappliance.co.nz/?p=70', 11, 'nav_menu_item', '', 0),
(71, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '71', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 8, 'http://stoneappliance.co.nz/?p=71', 10, 'nav_menu_item', '', 0),
(72, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '72', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 0, 'http://stoneappliance.co.nz/?p=72', 8, 'nav_menu_item', '', 0),
(73, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '73', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 0, 'http://stoneappliance.co.nz/?p=73', 13, 'nav_menu_item', '', 0),
(74, 1, '2016-10-12 12:19:21', '2016-10-12 04:19:21', ' ', '', '', 'publish', 'closed', 'closed', '', '74', '', '', '2016-10-12 12:19:37', '2016-10-12 04:19:37', '', 0, 'http://stoneappliance.co.nz/?p=74', 12, 'nav_menu_item', '', 0),
(76, 1, '2016-10-12 12:44:42', '2016-10-12 04:44:42', '<p style="text-align: center;">[2jslideshow id="22995"]</p>\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\n\n<div class="items-group no-divider">\n<div class="content-block">\n<div class="content-block-inner">\n<div class="text-section">\n\n<p style="text-align: left;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</p>\n<p style="text-align: left;">                              <img class="wp-image-79 alignnone" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us-1" width="160" height="171" />               <img class="alignnone wp-image-80" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop-150x150" width="170" height="170" />                    <img class="alignnone wp-image-81" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images-2-150x150" width="170" height="170" /></p>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-autosave-v1', '', '', '2016-10-12 12:44:42', '2016-10-12 04:44:42', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-autosave-v1/', 0, 'revision', '', 0),
(77, 1, '2016-10-12 12:34:51', '2016-10-12 04:34:51', '', 'service_img', '', 'inherit', 'open', 'closed', '', 'service_img', '', '', '2016-10-12 12:34:51', '2016-10-12 04:34:51', '', 26, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg', 0, 'attachment', 'image/jpeg', 0),
(78, 1, '2016-10-12 12:36:57', '2016-10-12 04:36:57', '', 'images-1', '', 'inherit', 'open', 'closed', '', 'images-1', '', '', '2016-10-12 12:36:57', '2016-10-12 04:36:57', '', 26, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(79, 1, '2016-10-12 12:38:02', '2016-10-12 04:38:02', '', 'contact_us-1', '', 'inherit', 'open', 'closed', '', 'contact_us-1', '', '', '2016-10-12 12:38:02', '2016-10-12 04:38:02', '', 26, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(80, 1, '2016-10-12 12:39:27', '2016-10-12 04:39:27', '', 'shop-150x150', '', 'inherit', 'open', 'closed', '', 'shop-150x150', '', '', '2016-10-12 12:39:27', '2016-10-12 04:39:27', '', 26, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg', 0, 'attachment', 'image/jpeg', 0),
(81, 1, '2016-10-12 12:40:29', '2016-10-12 04:40:29', '', 'images-2-150x150', '', 'inherit', 'open', 'closed', '', 'images-2-150x150', '', '', '2016-10-12 12:40:29', '2016-10-12 04:40:29', '', 26, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg', 0, 'attachment', 'image/jpeg', 0),
(82, 1, '2016-10-12 12:41:38', '2016-10-12 04:41:38', '<p style="text-align: center;">[2jslideshow id="22995"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n<p style="text-align: left;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</p>\r\n<p style="text-align: left;">                    <img class="alignnone wp-image-79" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us-1" width="160" height="171" />               <img class="alignnone wp-image-80" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop-150x150" width="170" height="170" />                    <img class="alignnone wp-image-81" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images-2-150x150" width="170" height="170" /></p>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 12:41:38', '2016-10-12 04:41:38', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(83, 1, '2016-10-12 12:42:37', '2016-10-12 04:42:37', '<p style="text-align: center;">[2jslideshow id="22995"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n<p style="text-align: left;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</p>\r\n<p style="text-align: left;">                              <img class="wp-image-79 alignnone" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us-1" width="160" height="171" />               <img class="alignnone wp-image-80" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop-150x150" width="170" height="170" />                    <img class="alignnone wp-image-81" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images-2-150x150" width="170" height="170" /></p>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 12:42:37', '2016-10-12 04:42:37', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(84, 1, '2016-10-12 12:46:38', '2016-10-12 04:46:38', '<p style="text-align: center;">[2jslideshow id="22995"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n\r\n<div class="items-group no-divider">\r\n<div class="content-block">\r\n<div class="content-block-inner">\r\n<div class="text-section">\r\n\r\n<span style="font-size: 15px;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</span>\r\n<a href="http://localhost:8080/wordpress/?page_id=22721"><img class="alignnone wp-image-23015" style="margin-left: 100px;" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us" width="160" height="171" /></a>                            <a href=" http://localhost:8080/conceptkitchen/?page_id=22698"><img class="alignnone wp-image-23011" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop" width="170" height="170" /></a>                   <a href=" http://localhost:8080/conceptkitchen/?page_id=22711"><img class="alignnone wp-image-23010" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images" width="170" height="170" /></a>\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 12:46:38', '2016-10-12 04:46:38', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(85, 1, '2016-10-12 12:50:09', '2016-10-12 04:50:09', '', 'logo', '', 'inherit', 'open', 'closed', '', 'logo', '', '', '2016-10-12 12:50:09', '2016-10-12 04:50:09', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/logo.png', 0, 'attachment', 'image/png', 0),
(86, 1, '2016-10-12 12:59:00', '2016-10-12 04:59:00', '', 'home_slideshow', '', 'publish', 'open', 'closed', '', 'home_slideshow', '', '', '2016-10-12 13:35:07', '2016-10-12 05:35:07', '', 0, 'http://stoneappliance.co.nz/?post_type=twoj_slideshow_post&#038;p=86', 0, 'twoj_slideshow_post', '', 0),
(87, 1, '2016-10-12 12:55:45', '2016-10-12 04:55:45', '', 'img-1', '', 'inherit', 'open', 'closed', '', 'img-1', '', '', '2016-10-12 12:55:45', '2016-10-12 04:55:45', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/img-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(88, 1, '2016-10-12 12:55:56', '2016-10-12 04:55:56', '', 'wechatimg14', '', 'inherit', 'open', 'closed', '', 'wechatimg14', '', '', '2016-10-12 12:55:56', '2016-10-12 04:55:56', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/WechatIMG14.jpeg', 0, 'attachment', 'image/jpeg', 0),
(89, 1, '2016-10-12 12:57:07', '2016-10-12 04:57:07', '', 'contemporary-kitchen-art-decor', '', 'inherit', 'open', 'closed', '', 'contemporary-kitchen-art-decor', '', '', '2016-10-12 12:57:07', '2016-10-12 04:57:07', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/contemporary-kitchen-art-decor.jpg', 0, 'attachment', 'image/jpeg', 0),
(90, 1, '2016-10-12 12:57:44', '2016-10-12 04:57:44', '', 'img-2', '', 'inherit', 'open', 'closed', '', 'img-2', '', '', '2016-10-12 12:57:44', '2016-10-12 04:57:44', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/img-2.jpg', 0, 'attachment', 'image/jpeg', 0),
(91, 1, '2016-10-12 12:58:18', '2016-10-12 04:58:18', '', 'brandlogo', '', 'inherit', 'open', 'closed', '', 'brandlogo', '', '', '2016-10-12 12:58:18', '2016-10-12 04:58:18', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/brandlogo.jpg', 0, 'attachment', 'image/jpeg', 0),
(92, 1, '2016-10-12 12:59:45', '2016-10-12 04:59:45', '<p style="text-align: center;">[twoj-slideshow id="86"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n\r\n<div class="items-group no-divider">\r\n<div class="content-block">\r\n<div class="content-block-inner">\r\n<div class="text-section">\r\n\r\n<span style="font-size: 15px;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</span>\r\n<a href="http://localhost:8080/wordpress/?page_id=22721"><img class="alignnone wp-image-23015" style="margin-left: 100px;" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us" width="160" height="171" /></a>                            <a href=" http://localhost:8080/conceptkitchen/?page_id=22698"><img class="alignnone wp-image-23011" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop" width="170" height="170" /></a>                   <a href=" http://localhost:8080/conceptkitchen/?page_id=22711"><img class="alignnone wp-image-23010" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images" width="170" height="170" /></a>\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 12:59:45', '2016-10-12 04:59:45', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(93, 1, '2016-10-12 13:04:14', '2016-10-12 05:04:14', '<p style="text-align: center;">[2jslideshow id="86"]</p>\r\n<p style="text-align: center;"><img class="aligncenter wp-image-77 size-full" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/service_img.jpg" alt="service_img" width="1139" height="86" /></p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-78" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-1.jpg" alt="images-1" width="259" height="194" /></p>\r\n\r\n<div class="items-group no-divider">\r\n<div class="content-block">\r\n<div class="content-block-inner">\r\n<div class="text-section">\r\n\r\n<span style="font-size: 15px;">Thank you for choosing a Concept home appliance. To make sure you get the best care if repair should be necessary, Concept offers comprehensive service for your appliance, in the high quality you have come to expect.</span>\r\n<a href="http://localhost:8080/wordpress/?page_id=22721"><img class="alignnone wp-image-23015" style="margin-left: 100px;" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/contact_us-1.jpg" alt="contact_us" width="160" height="171" /></a>                            <a href=" http://localhost:8080/conceptkitchen/?page_id=22698"><img class="alignnone wp-image-23011" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/shop-150x150.jpg" alt="shop" width="170" height="170" /></a>                   <a href=" http://localhost:8080/conceptkitchen/?page_id=22711"><img class="alignnone wp-image-23010" src="http://stoneappliance.co.nz/wp-content/uploads/2016/10/images-2-150x150.jpg" alt="images" width="170" height="170" /></a>\r\n\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'Home', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2016-10-12 13:04:14', '2016-10-12 05:04:14', '', 26, 'http://stoneappliance.co.nz/2016/10/12/26-revision-v1/', 0, 'revision', '', 0),
(94, 1, '2016-10-12 14:02:50', '2016-10-12 06:02:50', '<p style="text-align: left;">[Total_Soft_Gallery_Video id="1"]</p>\r\nThe kitchen is the heart of a home; it is where meals are cooked, meaning conversations happen, and everyone gets the bulk of their nutrition, both physical and emotional. There is something to be said for a sweet, quaint little space, and there is also something significant about a super-sleek, ultra-modern space with all the latest finishes. Kitchen is the hub of your home.\r\n\r\n[slideshow_deploy id=''23024'']', 'Furniture–one', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2016-10-12 14:02:50', '2016-10-12 06:02:50', '', 23, 'http://stoneappliance.co.nz/2016/10/12/23-revision-v1/', 0, 'revision', '', 0),
(95, 1, '2016-10-12 14:08:28', '2016-10-12 06:08:28', '', 'Furniture-one slideshow', '', 'publish', 'closed', 'closed', '', 'furniture-one-slideshow', '', '', '2016-10-12 14:11:01', '2016-10-12 06:11:01', '', 0, 'http://stoneappliance.co.nz/?post_type=slideshow&#038;p=95', 0, 'slideshow', '', 0),
(102, 1, '2016-10-12 14:10:55', '2016-10-12 06:10:55', '', '333', '', 'inherit', 'open', 'closed', '', '333', '', '', '2016-10-12 14:10:55', '2016-10-12 06:10:55', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/333.jpg', 0, 'attachment', 'image/jpeg', 0),
(101, 1, '2016-10-12 14:10:46', '2016-10-12 06:10:46', '', '222', '', 'inherit', 'open', 'closed', '', '222', '', '', '2016-10-12 14:10:46', '2016-10-12 06:10:46', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/222.jpg', 0, 'attachment', 'image/jpeg', 0),
(100, 1, '2016-10-12 14:10:39', '2016-10-12 06:10:39', '', '111', '', 'inherit', 'open', 'closed', '', '111', '', '', '2016-10-12 14:10:39', '2016-10-12 06:10:39', '', 0, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/111.jpg', 0, 'attachment', 'image/jpeg', 0),
(99, 1, '2016-10-12 14:09:02', '2016-10-12 06:09:02', '<p style="text-align: left;">[Total_Soft_Gallery_Video id="1"]</p>\r\nThe kitchen is the heart of a home; it is where meals are cooked, meaning conversations happen, and everyone gets the bulk of their nutrition, both physical and emotional. There is something to be said for a sweet, quaint little space, and there is also something significant about a super-sleek, ultra-modern space with all the latest finishes. Kitchen is the hub of your home.\r\n\r\n[slideshow_deploy id=''95'']', 'Furniture–one', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2016-10-12 14:09:02', '2016-10-12 06:09:02', '', 23, 'http://stoneappliance.co.nz/2016/10/12/23-revision-v1/', 0, 'revision', '', 0),
(103, 1, '2016-10-12 14:12:54', '2016-10-12 06:12:54', '', 'net-study-progress', '', 'inherit', 'open', 'closed', '', 'net-study-progress', '', '', '2016-10-12 14:12:54', '2016-10-12 06:12:54', '', 5, 'http://stoneappliance.co.nz/wp-content/uploads/2016/10/Net-study-progress.pdf', 0, 'attachment', 'application/pdf', 0),
(105, 1, '2016-10-12 14:14:59', '2016-10-12 06:14:59', 'It''s very difficult to say who did the scratches and who should responsible for that,so we suggest you''d better choose carefully before you buy.', 'What if there are some scratches on the new furniture?', '', 'publish', 'open', 'closed', '', 'what-if-there-are-some-scratches-on-the-new-furniture', '', '', '2016-10-12 14:19:47', '2016-10-12 06:19:47', '', 0, 'http://stoneappliance.co.nz/?post_type=ufaq&#038;p=105', 0, 'ufaq', '', 0),
(106, 1, '2016-10-12 14:15:31', '2016-10-12 06:15:31', 'Thank you for your consultation!We have an experienced and professional team to provide all kinds of solution to your kitchen.From design,decorate to the furniture,all we do is to give our customers a beautiful and well-designed cooking space!', 'What kind of services do you provide?', '', 'publish', 'open', 'closed', '', 'what-kind-of-services-do-you-provide', '', '', '2016-10-12 14:20:12', '2016-10-12 06:20:12', '', 0, 'http://stoneappliance.co.nz/?post_type=ufaq&#038;p=106', 0, 'ufaq', '', 0),
(107, 1, '2016-10-12 14:15:47', '0000-00-00 00:00:00', '', '自动草稿', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2016-10-12 14:15:47', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?post_type=ufaq&p=107', 0, 'ufaq', '', 0),
(108, 1, '2016-10-12 14:15:51', '0000-00-00 00:00:00', '', '自动草稿', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2016-10-12 14:15:51', '0000-00-00 00:00:00', '', 0, 'http://stoneappliance.co.nz/?post_type=ufaq&p=108', 0, 'ufaq', '', 0),
(109, 1, '2016-10-12 14:28:29', '2016-10-12 06:28:29', '[Total_Soft_Gallery_Video id="2"]', 'Gallery--one', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2016-10-12 14:28:29', '2016-10-12 06:28:29', '', 10, 'http://stoneappliance.co.nz/2016/10/12/10-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wp_revslider_css`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_css` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `handle` text NOT NULL,
  `settings` text,
  `hover` text,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- 转存表中的数据 `wp_revslider_css`
--

INSERT INTO `wp_revslider_css` (`id`, `handle`, `settings`, `hover`, `params`) VALUES
(1, '.tp-caption.medium_grey', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","font-weight":"700","font-size":"20px","line-height":"20px","font-family":"Arial","padding":"2px 4px","margin":"0px","border-width":"0px","border-style":"none","background-color":"#888","white-space":"nowrap"}'),
(2, '.tp-caption.small_text', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","font-weight":"700","font-size":"14px","line-height":"20px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(3, '.tp-caption.medium_text', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","font-weight":"700","font-size":"20px","line-height":"20px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(4, '.tp-caption.large_text', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","font-weight":"700","font-size":"40px","line-height":"40px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(5, '.tp-caption.very_large_text', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"0px 2px 5px rgba(0, 0, 0, 0.5)","font-weight":"700","font-size":"60px","line-height":"60px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap","letter-spacing":"-2px"}'),
(6, '.tp-caption.very_big_white', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"800","font-size":"60px","line-height":"60px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap","padding":"0px 4px","padding-top":"1px","background-color":"#000"}'),
(7, '.tp-caption.very_big_black', NULL, NULL, '{"position":"absolute","color":"#000","text-shadow":"none","font-weight":"700","font-size":"60px","line-height":"60px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap","padding":"0px 4px","padding-top":"1px","background-color":"#fff"}'),
(8, '.tp-caption.modern_medium_fat', NULL, NULL, '{"position":"absolute","color":"#000","text-shadow":"none","font-weight":"800","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(9, '.tp-caption.modern_medium_fat_white', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"800","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(10, '.tp-caption.modern_medium_light', NULL, NULL, '{"position":"absolute","color":"#000","text-shadow":"none","font-weight":"300","font-size":"24px","line-height":"20px","font-family":"\\"Open Sans\\", sans-serif","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(11, '.tp-caption.modern_big_bluebg', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"800","font-size":"30px","line-height":"36px","font-family":"\\"Open Sans\\", sans-serif","padding":"3px 10px","margin":"0px","border-width":"0px","border-style":"none","background-color":"#4e5b6c","letter-spacing":"0"}'),
(12, '.tp-caption.modern_big_redbg', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"300","font-size":"30px","line-height":"36px","font-family":"\\"Open Sans\\", sans-serif","padding":"3px 10px","padding-top":"1px","margin":"0px","border-width":"0px","border-style":"none","background-color":"#de543e","letter-spacing":"0"}'),
(13, '.tp-caption.modern_small_text_dark', NULL, NULL, '{"position":"absolute","color":"#555","text-shadow":"none","font-size":"14px","line-height":"22px","font-family":"Arial","margin":"0px","border-width":"0px","border-style":"none","white-space":"nowrap"}'),
(14, '.tp-caption.boxshadow', NULL, NULL, '{"-moz-box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)","-webkit-box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)","box-shadow":"0px 0px 20px rgba(0, 0, 0, 0.5)"}'),
(15, '.tp-caption.black', NULL, NULL, '{"color":"#000","text-shadow":"none"}'),
(16, '.tp-caption.noshadow', NULL, NULL, '{"text-shadow":"none"}'),
(17, '.tp-caption.thinheadline_dark', NULL, NULL, '{"position":"absolute","color":"rgba(0,0,0,0.85)","text-shadow":"none","font-weight":"300","font-size":"30px","line-height":"30px","font-family":"\\"Open Sans\\"","background-color":"transparent"}'),
(18, '.tp-caption.thintext_dark', NULL, NULL, '{"position":"absolute","color":"rgba(0,0,0,0.85)","text-shadow":"none","font-weight":"300","font-size":"16px","line-height":"26px","font-family":"\\"Open Sans\\"","background-color":"transparent"}'),
(19, '.tp-caption.largeblackbg', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#000","padding":"0px 20px","-webkit-border-radius":"0px","-moz-border-radius":"0px","border-radius":"0px"}'),
(20, '.tp-caption.largepinkbg', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#db4360","padding":"0px 20px","-webkit-border-radius":"0px","-moz-border-radius":"0px","border-radius":"0px"}'),
(21, '.tp-caption.largewhitebg', NULL, NULL, '{"position":"absolute","color":"#000","text-shadow":"none","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#fff","padding":"0px 20px","-webkit-border-radius":"0px","-moz-border-radius":"0px","border-radius":"0px"}'),
(22, '.tp-caption.largegreenbg', NULL, NULL, '{"position":"absolute","color":"#fff","text-shadow":"none","font-weight":"300","font-size":"50px","line-height":"70px","font-family":"\\"Open Sans\\"","background-color":"#67ae73","padding":"0px 20px","-webkit-border-radius":"0px","-moz-border-radius":"0px","border-radius":"0px"}'),
(23, '.tp-caption.excerpt', NULL, NULL, '{"font-size":"36px","line-height":"36px","font-weight":"700","font-family":"Arial","color":"#ffffff","text-decoration":"none","background-color":"rgba(0, 0, 0, 1)","text-shadow":"none","margin":"0px","letter-spacing":"-1.5px","padding":"1px 4px 0px 4px","width":"150px","white-space":"normal !important","height":"auto","border-width":"0px","border-color":"rgb(255, 255, 255)","border-style":"none"}'),
(24, '.tp-caption.large_bold_grey', NULL, NULL, '{"font-size":"60px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(102, 102, 102)","text-decoration":"none","background-color":"transparent","text-shadow":"none","margin":"0px","padding":"1px 4px 0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(25, '.tp-caption.medium_thin_grey', NULL, NULL, '{"font-size":"34px","line-height":"30px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(102, 102, 102)","text-decoration":"none","background-color":"transparent","padding":"1px 4px 0px","text-shadow":"none","margin":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(26, '.tp-caption.small_thin_grey', NULL, NULL, '{"font-size":"18px","line-height":"26px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(117, 117, 117)","text-decoration":"none","background-color":"transparent","padding":"1px 4px 0px","text-shadow":"none","margin":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(27, '.tp-caption.lightgrey_divider', NULL, NULL, '{"text-decoration":"none","background-color":"rgba(235, 235, 235, 1)","width":"370px","height":"3px","background-position":"initial initial","background-repeat":"initial initial","border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}'),
(28, '.tp-caption.large_bold_darkblue', NULL, NULL, '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(52, 73, 94)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(29, '.tp-caption.medium_bg_darkblue', NULL, NULL, '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(52, 73, 94)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(30, '.tp-caption.medium_bold_red', NULL, NULL, '{"font-size":"24px","line-height":"30px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(227, 58, 12)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(31, '.tp-caption.medium_light_red', NULL, NULL, '{"font-size":"21px","line-height":"26px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(227, 58, 12)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(32, '.tp-caption.medium_bg_red', NULL, NULL, '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(227, 58, 12)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(33, '.tp-caption.medium_bold_orange', NULL, NULL, '{"font-size":"24px","line-height":"30px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(243, 156, 18)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(34, '.tp-caption.medium_bg_orange', NULL, NULL, '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(243, 156, 18)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(35, '.tp-caption.grassfloor', NULL, NULL, '{"text-decoration":"none","background-color":"rgba(160, 179, 151, 1)","width":"4000px","height":"150px","border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}'),
(36, '.tp-caption.large_bold_white', NULL, NULL, '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(37, '.tp-caption.medium_light_white', NULL, NULL, '{"font-size":"30px","line-height":"36px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(38, '.tp-caption.mediumlarge_light_white', NULL, NULL, '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(39, '.tp-caption.mediumlarge_light_white_center', NULL, NULL, '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"#ffffff","text-decoration":"none","background-color":"transparent","padding":"0px 0px 0px 0px","text-align":"center","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(40, '.tp-caption.medium_bg_asbestos', NULL, NULL, '{"font-size":"20px","line-height":"20px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(127, 140, 141)","padding":"10px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(41, '.tp-caption.medium_light_black', NULL, NULL, '{"font-size":"30px","line-height":"36px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(42, '.tp-caption.large_bold_black', NULL, NULL, '{"font-size":"58px","line-height":"60px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"transparent","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(43, '.tp-caption.mediumlarge_light_darkblue', NULL, NULL, '{"font-size":"34px","line-height":"40px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(52, 73, 94)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(44, '.tp-caption.small_light_white', NULL, NULL, '{"font-size":"17px","line-height":"28px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"transparent","padding":"0px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(45, '.tp-caption.roundedimage', NULL, NULL, '{"border-width":"0px","border-color":"rgb(34, 34, 34)","border-style":"none"}'),
(46, '.tp-caption.large_bg_black', NULL, NULL, '{"font-size":"40px","line-height":"40px","font-weight":"800","font-family":"\\"Open Sans\\"","color":"rgb(255, 255, 255)","text-decoration":"none","background-color":"rgb(0, 0, 0)","padding":"10px 20px 15px","border-width":"0px","border-color":"rgb(255, 214, 88)","border-style":"none"}'),
(47, '.tp-caption.mediumwhitebg', NULL, NULL, '{"font-size":"30px","line-height":"30px","font-weight":"300","font-family":"\\"Open Sans\\"","color":"rgb(0, 0, 0)","text-decoration":"none","background-color":"rgb(255, 255, 255)","padding":"5px 15px 10px","text-shadow":"none","border-width":"0px","border-color":"rgb(0, 0, 0)","border-style":"none"}');

-- --------------------------------------------------------

--
-- 表的结构 `wp_revslider_layer_animations`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_layer_animations` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `handle` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_revslider_settings`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_settings` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `general` text NOT NULL,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_revslider_sliders`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_sliders` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` tinytext NOT NULL,
  `alias` tinytext,
  `params` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_revslider_slides`
--

CREATE TABLE IF NOT EXISTS `wp_revslider_slides` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `slider_id` int(9) NOT NULL,
  `slide_order` int(11) NOT NULL,
  `params` text NOT NULL,
  `layers` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_termmeta`
--

CREATE TABLE IF NOT EXISTS `wp_termmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, '未分类', 'uncategorized', 0),
(2, 'Shop', 'shop', 0),
(3, 'Furniture', 'furniture', 0),
(4, 'Home Appliances', 'home-appliances', 0),
(5, 'Home Entertainment', 'home-entertainment', 0),
(6, 'Hot Deal', 'hot-deal', 0),
(7, 'Kitchen Whiteware', 'kitchen-whiteware', 0),
(8, 'Support', 'support', 0),
(9, 'Download-PDF', 'download-pdf', 0),
(10, 'FAQ', 'faq', 0),
(11, 'Video Gallery', 'video-gallery', 0),
(12, 'Menu 1', 'menu-1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(5, 9, 0),
(15, 7, 0),
(8, 10, 0),
(10, 11, 0),
(13, 5, 0),
(17, 4, 0),
(19, 6, 0),
(21, 3, 0),
(55, 12, 0),
(57, 12, 0),
(64, 12, 0),
(67, 12, 0),
(66, 12, 0),
(65, 12, 0),
(68, 12, 0),
(72, 12, 0),
(69, 12, 0),
(71, 12, 0),
(70, 12, 0),
(74, 12, 0),
(73, 12, 0),
(23, 3, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'category', '', 0, 0),
(3, 3, 'category', '', 2, 2),
(4, 4, 'category', '', 2, 1),
(5, 5, 'category', '', 2, 1),
(6, 6, 'category', '', 2, 1),
(7, 7, 'category', '', 2, 1),
(8, 8, 'category', '', 0, 0),
(9, 9, 'category', '', 8, 1),
(10, 10, 'category', '', 8, 1),
(11, 11, 'category', '', 8, 1),
(12, 12, 'nav_menu', '', 0, 13);

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_fonts`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_fonts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Font` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=126 ;

--
-- 转存表中的数据 `wp_totalsoft_fonts`
--

INSERT INTO `wp_totalsoft_fonts` (`id`, `Font`) VALUES
(1, 'Abadi MT Condensed Light'),
(2, 'Aharoni'),
(3, 'Aldhabi'),
(4, 'Andalus'),
(5, 'Angsana New'),
(6, 'AngsanaUPC'),
(7, 'Aparajita'),
(8, 'Arabic Typesetting'),
(9, 'Arial'),
(10, 'Arial Black'),
(11, 'Batang'),
(12, 'BatangChe'),
(13, 'Browallia New'),
(14, 'BrowalliaUPC'),
(15, 'Calibri'),
(16, 'Calibri Light'),
(17, 'Calisto MT'),
(18, 'Cambria'),
(19, 'Candara'),
(20, 'Century Gothic'),
(21, 'Comic Sans MS'),
(22, 'Consolas'),
(23, 'Constantia'),
(24, 'Copperplate Gothic'),
(25, 'Copperplate Gothic Light'),
(26, 'Corbel'),
(27, 'Cordia New'),
(28, 'CordiaUPC'),
(29, 'Courier New'),
(30, 'DaunPenh'),
(31, 'David'),
(32, 'DFKai-SB'),
(33, 'DilleniaUPC'),
(34, 'DokChampa'),
(35, 'Dotum'),
(36, 'DotumChe'),
(37, 'Ebrima'),
(38, 'Estrangelo Edessa'),
(39, 'EucrosiaUPC'),
(40, 'Euphemia'),
(41, 'FangSong'),
(42, 'Franklin Gothic Medium'),
(43, 'FrankRuehl'),
(44, 'FreesiaUPC'),
(45, 'Gabriola'),
(46, 'Gadugi'),
(47, 'Gautami'),
(48, 'Georgia'),
(49, 'Gisha'),
(50, 'Gulim'),
(51, 'GulimChe'),
(52, 'Gungsuh'),
(53, 'GungsuhChe'),
(54, 'Impact'),
(55, 'IrisUPC'),
(56, 'Iskoola Pota'),
(57, 'JasmineUPC'),
(58, 'KaiTi'),
(59, 'Kalinga'),
(60, 'Kartika'),
(61, 'Khmer UI'),
(62, 'KodchiangUPC'),
(63, 'Kokila'),
(64, 'Lao UI'),
(65, 'Latha'),
(66, 'Leelawadee'),
(67, 'Levenim MT'),
(68, 'LilyUPC'),
(69, 'Lucida Console'),
(70, 'Lucida Handwriting Italic'),
(71, 'Lucida Sans Unicode'),
(72, 'Malgun Gothic'),
(73, 'Mangal'),
(74, 'Manny ITC'),
(75, 'Marlett'),
(76, 'Meiryo'),
(77, 'Meiryo UI'),
(78, 'Microsoft Himalaya'),
(79, 'Microsoft JhengHei'),
(80, 'Microsoft JhengHei UI'),
(81, 'Microsoft New Tai Lue'),
(82, 'Microsoft PhagsPa'),
(83, 'Microsoft Sans Serif'),
(84, 'Microsoft Tai Le'),
(85, 'Microsoft Uighur'),
(86, 'Microsoft YaHei'),
(87, 'Microsoft YaHei UI'),
(88, 'Microsoft Yi Baiti'),
(89, 'MingLiU_HKSCS'),
(90, 'MingLiU_HKSCS-ExtB'),
(91, 'Miriam'),
(92, 'Mongolian Baiti'),
(93, 'MoolBoran'),
(94, 'MS UI Gothic'),
(95, 'MV Boli'),
(96, 'Myanmar Text'),
(97, 'Narkisim'),
(98, 'Nirmala UI'),
(99, 'News Gothic MT'),
(100, 'NSimSun'),
(101, 'Nyala'),
(102, 'Palatino Linotype'),
(103, 'Plantagenet Cherokee'),
(104, 'Raavi'),
(105, 'Rod'),
(106, 'Sakkal Majalla'),
(107, 'Segoe Print'),
(108, 'Segoe Script'),
(109, 'Segoe UI Symbol'),
(110, 'Shonar Bangla'),
(111, 'Shruti'),
(112, 'SimHei'),
(113, 'SimKai'),
(114, 'Simplified Arabic'),
(115, 'SimSun'),
(116, 'SimSun-ExtB'),
(117, 'Sylfaen'),
(118, 'Tahoma'),
(119, 'Times New Roman'),
(120, 'Traditional Arabic'),
(121, 'Trebuchet MS'),
(122, 'Tunga'),
(123, 'Utsaah'),
(124, 'Vani'),
(125, 'Vijaya');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_ctpg`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_ctpg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetID` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_W` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_H` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_BW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_PB` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_BSShow` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_BSW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_BSC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_HEff` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_HOC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_HOO` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_TShow` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_TBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_DShow` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_DC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_DFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_DFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LATW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LATC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LText` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LBW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LBC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LBR` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LHBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LHC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_NBT` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_PBT` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_C` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_FS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_FF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_HBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_HC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_P_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_BW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_TBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_TTA` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_DFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_DFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_DC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_DBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LText` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LBW` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LBS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LBC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LBR` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LFS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LFF` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LHBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_LHC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_IBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_CIS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_CIC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_CIT` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_CIcon` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_AS` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_AC` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_AT` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_ALeft` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_Pop_ARight` varchar(255) NOT NULL,
  `TotalSoft_VG_CP_LShow` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_ctpg`
--

INSERT INTO `wp_totalsoft_galleryv_ctpg` (`id`, `TotalSoftGalleryV_SetID`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`, `TotalSoft_VG_CP_W`, `TotalSoft_VG_CP_H`, `TotalSoft_VG_CP_BW`, `TotalSoft_VG_CP_BC`, `TotalSoft_VG_CP_PB`, `TotalSoft_VG_CP_BSShow`, `TotalSoft_VG_CP_BSW`, `TotalSoft_VG_CP_BSC`, `TotalSoft_VG_CP_HEff`, `TotalSoft_VG_CP_HOC`, `TotalSoft_VG_CP_HOO`, `TotalSoft_VG_CP_TShow`, `TotalSoft_VG_CP_TC`, `TotalSoft_VG_CP_TFS`, `TotalSoft_VG_CP_TFF`, `TotalSoft_VG_CP_TBgC`, `TotalSoft_VG_CP_DShow`, `TotalSoft_VG_CP_DC`, `TotalSoft_VG_CP_DFS`, `TotalSoft_VG_CP_DFF`, `TotalSoft_VG_CP_LATW`, `TotalSoft_VG_CP_LATC`, `TotalSoft_VG_CP_LText`, `TotalSoft_VG_CP_LBW`, `TotalSoft_VG_CP_LBC`, `TotalSoft_VG_CP_LBR`, `TotalSoft_VG_CP_LBgC`, `TotalSoft_VG_CP_LC`, `TotalSoft_VG_CP_LFS`, `TotalSoft_VG_CP_LFF`, `TotalSoft_VG_CP_LHBgC`, `TotalSoft_VG_CP_LHC`, `TotalSoft_VG_CP_P_NBT`, `TotalSoft_VG_CP_P_PBT`, `TotalSoft_VG_CP_P_BgC`, `TotalSoft_VG_CP_P_C`, `TotalSoft_VG_CP_P_FS`, `TotalSoft_VG_CP_P_FF`, `TotalSoft_VG_CP_P_CBgC`, `TotalSoft_VG_CP_P_CC`, `TotalSoft_VG_CP_P_HBgC`, `TotalSoft_VG_CP_P_HC`, `TotalSoft_VG_CP_P_BS`, `TotalSoft_VG_CP_P_BC`, `TotalSoft_VG_CP_Pop_BgC`, `TotalSoft_VG_CP_Pop_BW`, `TotalSoft_VG_CP_Pop_BS`, `TotalSoft_VG_CP_Pop_BC`, `TotalSoft_VG_CP_Pop_TFS`, `TotalSoft_VG_CP_Pop_TFF`, `TotalSoft_VG_CP_Pop_TC`, `TotalSoft_VG_CP_Pop_TBgC`, `TotalSoft_VG_CP_Pop_TTA`, `TotalSoft_VG_CP_Pop_DFS`, `TotalSoft_VG_CP_Pop_DFF`, `TotalSoft_VG_CP_Pop_DC`, `TotalSoft_VG_CP_Pop_DBgC`, `TotalSoft_VG_CP_Pop_LText`, `TotalSoft_VG_CP_Pop_LBW`, `TotalSoft_VG_CP_Pop_LBS`, `TotalSoft_VG_CP_Pop_LBC`, `TotalSoft_VG_CP_Pop_LBR`, `TotalSoft_VG_CP_Pop_LBgC`, `TotalSoft_VG_CP_Pop_LC`, `TotalSoft_VG_CP_Pop_LFS`, `TotalSoft_VG_CP_Pop_LFF`, `TotalSoft_VG_CP_Pop_LHBgC`, `TotalSoft_VG_CP_Pop_LHC`, `TotalSoft_VG_CP_Pop_IBgC`, `TotalSoft_VG_CP_Pop_CIS`, `TotalSoft_VG_CP_Pop_CIC`, `TotalSoft_VG_CP_Pop_CIT`, `TotalSoft_VG_CP_Pop_CIcon`, `TotalSoft_VG_CP_Pop_AS`, `TotalSoft_VG_CP_Pop_AC`, `TotalSoft_VG_CP_Pop_AT`, `TotalSoft_VG_CP_Pop_ALeft`, `TotalSoft_VG_CP_Pop_ARight`, `TotalSoft_VG_CP_LShow`) VALUES
(1, '7', 'Content Popup', 'Content Popup', '250', '150', '5', '#ffffff', '10', 'true', '15', '#009491', '1', '#009491', '60', 'true', '#009491', '16', 'Gabriola', '#ffffff', 'true', '#ffffff', '15', 'Gabriola', '2', '#000000', 'View More ....', '2', '#ffffff', '20', '#ffffff', '#000000', '23', 'Gabriola', '#000000', '#ffffff', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '#009491', '#ffffff', '#009491', '#000000', 'solid', '#ffffff', '#ffffff', '0', 'solid', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', 'center', '19', 'Gabriola', '#009491', '#ffffff', 'View More ....', '2', 'solid', '#ffffff', '16', '#009491', '#ffffff', '16', 'Gabriola', '#ffffff', '#009491', '#009491', '25', '#ffffff', '1', 'totalsoft totalsoft-times', '25', '#ffffff', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', 'false'),
(2, '8', 'Content Popup 2', 'Content Popup', '250', '150', '5', '#ffffff', '10', 'true', '15', '#ffffff', '8', '#009491', '60', 'true', '#009491', '16', 'Gabriola', '#ffffff', 'false', '#ffffff', '15', 'Gabriola', '2', '#000000', 'View More ....', '2', '#ffffff', '20', '#ffffff', '#000000', '23', 'Gabriola', '#000000', '#ffffff', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '#009491', '#ffffff', '#009491', '#000000', 'solid', '#ffffff', '#ffffff', '0', 'solid', '#ffffff', '23', 'Gabriola', '#ffffff', '#009491', 'center', '19', 'Gabriola', '#009491', '#ffffff', 'View More ....', '2', 'solid', '#ffffff', '16', '#009491', '#ffffff', '16', 'Gabriola', '#ffffff', '#009491', '#009491', '25', '#ffffff', '1', 'totalsoft totalsoft-times', '25', '#ffffff', '1', 'totalsoft totalsoft-angle-double-left', 'totalsoft totalsoft-angle-double-right', 'false');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_dbt`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_dbt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_dbt`
--

INSERT INTO `wp_totalsoft_galleryv_dbt` (`id`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`) VALUES
(1, 'Grid Video Gallery', 'Grid Video Gallery'),
(2, 'Grid VideoGallery', 'Grid Video Gallery'),
(3, 'LightBox VideoGallery', 'LightBox Video Gallery'),
(4, 'LightBox Video Gallery', 'LightBox Video Gallery'),
(5, 'Thumbnails Video', 'Thumbnails Video'),
(6, 'Thumbnails Video 2', 'Thumbnails Video'),
(7, 'Content Popup', 'Content Popup'),
(8, 'Content Popup 2', 'Content Popup'),
(9, 'Elastic Gallery', 'Elastic Gallery'),
(10, 'Elastic Gallery 2', 'Elastic Gallery');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_gvg`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_gvg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetID` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TShow` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DShow` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_PB` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_VR` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_HE` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_HO` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DSC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TDA_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TDA_MT` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_TTA` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DFF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_DTA` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_LAT_W` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_LAT_S` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_LAT_C` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_BW` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_BR` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_Pad` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_TTA` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_DFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_DFF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_DC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_DTA` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LAT_W` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LAT_S` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LAT_C` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_AType` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_ALeft` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_ARight` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_AC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_AFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_CType` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_CIcon` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_CFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LBW` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LBS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LBC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LBR` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LText` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LFS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LFF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LHBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_LHC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_NBT` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_PBT` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_C` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_FS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_FF` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_H` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_HBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_HC` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_TShow` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_Pop_DShow` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_GVG_P_BC` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_gvg`
--

INSERT INTO `wp_totalsoft_galleryv_gvg` (`id`, `TotalSoftGalleryV_SetID`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`, `TotalSoft_VG_GVG_TShow`, `TotalSoft_VG_GVG_DShow`, `TotalSoft_VG_GVG_CC`, `TotalSoft_VG_GVG_PB`, `TotalSoft_VG_GVG_VR`, `TotalSoft_VG_GVG_HE`, `TotalSoft_VG_GVG_HO`, `TotalSoft_VG_GVG_DSC`, `TotalSoft_VG_GVG_TDA_BgC`, `TotalSoft_VG_GVG_TDA_MT`, `TotalSoft_VG_GVG_TFS`, `TotalSoft_VG_GVG_TFF`, `TotalSoft_VG_GVG_TC`, `TotalSoft_VG_GVG_TTA`, `TotalSoft_VG_GVG_DFS`, `TotalSoft_VG_GVG_DFF`, `TotalSoft_VG_GVG_DC`, `TotalSoft_VG_GVG_DTA`, `TotalSoft_VG_GVG_LAT_W`, `TotalSoft_VG_GVG_LAT_S`, `TotalSoft_VG_GVG_LAT_C`, `TotalSoft_VG_GVG_Pop_BgC`, `TotalSoft_VG_GVG_Pop_BW`, `TotalSoft_VG_GVG_Pop_BS`, `TotalSoft_VG_GVG_Pop_BC`, `TotalSoft_VG_GVG_Pop_BR`, `TotalSoft_VG_GVG_Pop_Pad`, `TotalSoft_VG_GVG_Pop_TFS`, `TotalSoft_VG_GVG_Pop_TFF`, `TotalSoft_VG_GVG_Pop_TC`, `TotalSoft_VG_GVG_Pop_TTA`, `TotalSoft_VG_GVG_Pop_DFS`, `TotalSoft_VG_GVG_Pop_DFF`, `TotalSoft_VG_GVG_Pop_DC`, `TotalSoft_VG_GVG_Pop_DTA`, `TotalSoft_VG_GVG_Pop_LAT_W`, `TotalSoft_VG_GVG_Pop_LAT_S`, `TotalSoft_VG_GVG_Pop_LAT_C`, `TotalSoft_VG_GVG_Pop_AType`, `TotalSoft_VG_GVG_Pop_ALeft`, `TotalSoft_VG_GVG_Pop_ARight`, `TotalSoft_VG_GVG_Pop_AC`, `TotalSoft_VG_GVG_Pop_AFS`, `TotalSoft_VG_GVG_Pop_CType`, `TotalSoft_VG_GVG_Pop_CIcon`, `TotalSoft_VG_GVG_Pop_CC`, `TotalSoft_VG_GVG_Pop_CFS`, `TotalSoft_VG_GVG_Pop_LBW`, `TotalSoft_VG_GVG_Pop_LBS`, `TotalSoft_VG_GVG_Pop_LBC`, `TotalSoft_VG_GVG_Pop_LBR`, `TotalSoft_VG_GVG_Pop_LText`, `TotalSoft_VG_GVG_Pop_LBgC`, `TotalSoft_VG_GVG_Pop_LC`, `TotalSoft_VG_GVG_Pop_LFS`, `TotalSoft_VG_GVG_Pop_LFF`, `TotalSoft_VG_GVG_Pop_LHBgC`, `TotalSoft_VG_GVG_Pop_LHC`, `TotalSoft_VG_GVG_P_NBT`, `TotalSoft_VG_GVG_P_PBT`, `TotalSoft_VG_GVG_P_BgC`, `TotalSoft_VG_GVG_P_C`, `TotalSoft_VG_GVG_P_FS`, `TotalSoft_VG_GVG_P_FF`, `TotalSoft_VG_GVG_P_H`, `TotalSoft_VG_GVG_P_CBgC`, `TotalSoft_VG_GVG_P_CC`, `TotalSoft_VG_GVG_P_HBgC`, `TotalSoft_VG_GVG_P_HC`, `TotalSoft_VG_GVG_Pop_TShow`, `TotalSoft_VG_GVG_Pop_DShow`, `TotalSoft_VG_GVG_P_BS`, `TotalSoft_VG_GVG_P_BC`) VALUES
(1, '1', 'Grid Video Gallery', 'Grid Video Gallery', 'true', 'false', '294', '5', '0', 'sepia', '0.5', '#000000', '#009491', '0', '19', 'Gabriola', '#ffffff', 'center', '23', 'Gabriola', '#ffffff', 'justify', '0', 'dotted', '#ffffff', '#ffffff', '0', 'solid', '#009491', '0', '30', '30', 'Gabriola', '#009491', 'center', '18', 'Gabriola', '#009491', 'justify', '1', 'solid', '#cccccc', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '#009491', '28', '3', 'totalsoft totalsoft-times-circle', '#009491', '25', '1', 'solid', '#009491', '0', 'View More', '#009491', '#ffffff', '18', 'Gabriola', '#ffffff', '#009491', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '30', '#009491', '#ffffff', '#009491', '#f9f9f9', 'true', 'true', 'solid', '#009491'),
(2, '2', 'Grid VideoGallery', 'Grid Video Gallery', 'true', 'true', '294', '5', '0', 'drop-shadow', '0.01', '#727272', '#ededed', '2', '19', 'Gabriola', '#009491', 'center', '16', 'Gabriola', '#009491', 'justify', '1', 'solid', '#d8d8d8', '#ffffff', '0', 'solid', '#009491', '0', '30', '30', 'Gabriola', '#009491', 'center', '18', 'Gabriola', '#009491', 'justify', '1', 'solid', '#cccccc', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '#009491', '28', '3', 'totalsoft totalsoft-times-circle', '#009491', '25', '1', 'solid', '#009491', '0', 'View More', '#009491', '#ffffff', '18', 'Gabriola', '#ffffff', '#009491', 'Next', 'Prev', '#ffffff', '#009491', '23', 'Gabriola', '30', '#009491', '#ffffff', '#009491', '#f9f9f9', 'true', 'true', 'solid', '#009491');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_hlg`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_hlg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetID` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_W` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_H` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_BW` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_BSh` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_BShC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_IHovT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_IHovTr` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_TBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_THovT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_THovTr` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_ShowT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_TOp` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcBW` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcBC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcBS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PIcBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_LC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_LBC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_LBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_LIcT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_POvBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_POvBgCOp` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSShChDur` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlOpC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlOpFS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PDelIcT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlIcFS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlIcC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlIcBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlIcT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlAutPl` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlLoop` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlBW` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlBS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlBC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlBSh` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_PSlBShC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_NBT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_PBT` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_C` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_FS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_FF` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_H` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_HBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_HC` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_HLG_P_BC` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_hlg`
--

INSERT INTO `wp_totalsoft_galleryv_hlg` (`id`, `TotalSoftGalleryV_SetID`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`, `TotalSoft_VG_HLG_W`, `TotalSoft_VG_HLG_H`, `TotalSoft_VG_HLG_BW`, `TotalSoft_VG_HLG_BS`, `TotalSoft_VG_HLG_BC`, `TotalSoft_VG_HLG_BSh`, `TotalSoft_VG_HLG_BShC`, `TotalSoft_VG_HLG_IHovT`, `TotalSoft_VG_HLG_IHovTr`, `TotalSoft_VG_HLG_TFS`, `TotalSoft_VG_HLG_TC`, `TotalSoft_VG_HLG_TFF`, `TotalSoft_VG_HLG_TBgC`, `TotalSoft_VG_HLG_THovT`, `TotalSoft_VG_HLG_THovTr`, `TotalSoft_VG_HLG_ShowT`, `TotalSoft_VG_HLG_TOp`, `TotalSoft_VG_HLG_PIcS`, `TotalSoft_VG_HLG_PIcC`, `TotalSoft_VG_HLG_PIcT`, `TotalSoft_VG_HLG_PIcBW`, `TotalSoft_VG_HLG_PIcBC`, `TotalSoft_VG_HLG_PIcBS`, `TotalSoft_VG_HLG_PIcBgC`, `TotalSoft_VG_HLG_LC`, `TotalSoft_VG_HLG_LBC`, `TotalSoft_VG_HLG_LBgC`, `TotalSoft_VG_HLG_LIcT`, `TotalSoft_VG_HLG_POvBgC`, `TotalSoft_VG_HLG_POvBgCOp`, `TotalSoft_VG_HLG_PSShChDur`, `TotalSoft_VG_HLG_PSlOpC`, `TotalSoft_VG_HLG_PSlOpFS`, `TotalSoft_VG_HLG_PDelIcT`, `TotalSoft_VG_HLG_PSlIcFS`, `TotalSoft_VG_HLG_PSlIcC`, `TotalSoft_VG_HLG_PSlIcBgC`, `TotalSoft_VG_HLG_PSlIcT`, `TotalSoft_VG_HLG_PSlAutPl`, `TotalSoft_VG_HLG_PSlLoop`, `TotalSoft_VG_HLG_PSlBW`, `TotalSoft_VG_HLG_PSlBS`, `TotalSoft_VG_HLG_PSlBC`, `TotalSoft_VG_HLG_PSlBSh`, `TotalSoft_VG_HLG_PSlBShC`, `TotalSoft_VG_HLG_P_NBT`, `TotalSoft_VG_HLG_P_PBT`, `TotalSoft_VG_HLG_P_BgC`, `TotalSoft_VG_HLG_P_C`, `TotalSoft_VG_HLG_P_FS`, `TotalSoft_VG_HLG_P_FF`, `TotalSoft_VG_HLG_P_H`, `TotalSoft_VG_HLG_P_CBgC`, `TotalSoft_VG_HLG_P_CC`, `TotalSoft_VG_HLG_P_HBgC`, `TotalSoft_VG_HLG_P_HC`, `TotalSoft_VG_HLG_P_BS`, `TotalSoft_VG_HLG_P_BC`) VALUES
(1, '9', 'Elastic Gallery', 'Elastic Gallery', '240', '140', '3', 'solid', '#ffffff', '15', '#009491', 'zEff1', '4', '19', '#ffffff', 'Aldhabi', '#009491', 'zTitfHov1', '4', 'true', '70', '14', '#009491', 'totalsoft totalsoft-file-video-o', '1', '#ffffff', 'solid', '#ffffff', '#009491', '#ffffff', '#ffffff', 'totalsoft totalsoft-link', '#ffffff', '0', '6', '#ffffff', '30', 'totalsoft totalsoft-times-circle', '30', '#ffffff', '#009491', '1', 'false', 'true', '10', 'solid', '#ffffff', '30', '#009491', 'Prev', 'Next', '#ffffff', '#009491', '14', 'Aldhabi', '19', '#009491', '#ffffff', '#009491', '#ffffff', 'solid', '#009491'),
(2, '10', 'Elastic Gallery 2', 'Elastic Gallery', '240', '140', '3', 'solid', '#ffffff', '15', '#009491', 'zEff3', '3', '19', '#ffffff', 'Aldhabi', '#009491', 'zTitfHov2', '3', 'true', '90', '14', '#009491', 'totalsoft totalsoft-file-video-o', '1', '#ffffff', 'solid', '#ffffff', '#009491', '#ffffff', '#ffffff', 'totalsoft totalsoft-link', '#ffffff', '100', '6', '#ffffff', '30', 'totalsoft totalsoft-times-circle', '30', '#ffffff', '#009491', '1', 'false', 'true', '10', 'solid', '#ffffff', '30', '#009491', 'Prev', 'Next', '#ffffff', '#009491', '14', 'Aldhabi', '19', '#009491', '#ffffff', '#009491', '#ffffff', 'solid', '#009491');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_id`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_id` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `GalleryV_ID` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_id`
--

INSERT INTO `wp_totalsoft_galleryv_id` (`id`, `GalleryV_ID`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_lvg`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_lvg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetID` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_PB` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pad` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_VBW` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_VBS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_VBC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_VBR` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_BW` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_BR` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_TShow` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_TTA` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_PType` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_PIcon` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_Pause` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_PIS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_PIC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CType` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CIcon` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CIS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CIC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CIT` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_CTF` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_AType` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_ALeft` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_ARight` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_ArrS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_ArrC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_NFS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Pop_NC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_NBT` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_PBT` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_C` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_FS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_FF` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_H` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_HBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_HC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_P_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Img_Zoom_Type` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Img_Zoom_Effect_Time` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Hov_Ov_Bg_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Hov_Ov_Transparency` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Hov_Ov_Effect_Type` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Hov_Ov_Effect_Time` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Bg_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Transparency` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Font_Size` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Text_Shadow` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Shadow_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Effect_Type` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Title_Effect_Time` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Line_Width` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Line_Style` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Line_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Line_Hov_Type` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Line_Hov_Time` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Font_Size` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Border_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Border_Width` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Border_Style` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Bg_Color` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Hov_Type` varchar(255) NOT NULL,
  `TotalSoft_VG_LVG_Link_Hov_Time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_lvg`
--

INSERT INTO `wp_totalsoft_galleryv_lvg` (`id`, `TotalSoftGalleryV_SetID`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`, `TotalSoft_VG_LVG_CC`, `TotalSoft_VG_LVG_PB`, `TotalSoft_VG_LVG_Pad`, `TotalSoft_VG_LVG_BgC`, `TotalSoft_VG_LVG_VBW`, `TotalSoft_VG_LVG_VBS`, `TotalSoft_VG_LVG_VBC`, `TotalSoft_VG_LVG_VBR`, `TotalSoft_VG_LVG_Pop_BgC`, `TotalSoft_VG_LVG_Pop_BW`, `TotalSoft_VG_LVG_Pop_BS`, `TotalSoft_VG_LVG_Pop_BC`, `TotalSoft_VG_LVG_Pop_BR`, `TotalSoft_VG_LVG_Pop_TShow`, `TotalSoft_VG_LVG_Pop_TTA`, `TotalSoft_VG_LVG_Pop_TFS`, `TotalSoft_VG_LVG_Pop_TFF`, `TotalSoft_VG_LVG_Pop_TC`, `TotalSoft_VG_LVG_Pop_PType`, `TotalSoft_VG_LVG_Pop_PIcon`, `TotalSoft_VG_LVG_Pop_Pause`, `TotalSoft_VG_LVG_Pop_PIS`, `TotalSoft_VG_LVG_Pop_PIC`, `TotalSoft_VG_LVG_Pop_CType`, `TotalSoft_VG_LVG_Pop_CIcon`, `TotalSoft_VG_LVG_Pop_CIS`, `TotalSoft_VG_LVG_Pop_CIC`, `TotalSoft_VG_LVG_Pop_CIT`, `TotalSoft_VG_LVG_Pop_CTF`, `TotalSoft_VG_LVG_Pop_AType`, `TotalSoft_VG_LVG_Pop_ALeft`, `TotalSoft_VG_LVG_Pop_ARight`, `TotalSoft_VG_LVG_Pop_ArrS`, `TotalSoft_VG_LVG_Pop_ArrC`, `TotalSoft_VG_LVG_Pop_NFS`, `TotalSoft_VG_LVG_Pop_NC`, `TotalSoft_VG_LVG_P_NBT`, `TotalSoft_VG_LVG_P_PBT`, `TotalSoft_VG_LVG_P_BgC`, `TotalSoft_VG_LVG_P_C`, `TotalSoft_VG_LVG_P_FS`, `TotalSoft_VG_LVG_P_FF`, `TotalSoft_VG_LVG_P_H`, `TotalSoft_VG_LVG_P_CBgC`, `TotalSoft_VG_LVG_P_CC`, `TotalSoft_VG_LVG_P_HBgC`, `TotalSoft_VG_LVG_P_HC`, `TotalSoft_VG_LVG_P_BS`, `TotalSoft_VG_LVG_P_BC`, `TotalSoft_VG_LVG_Img_Zoom_Type`, `TotalSoft_VG_LVG_Img_Zoom_Effect_Time`, `TotalSoft_VG_LVG_Hov_Ov_Bg_Color`, `TotalSoft_VG_LVG_Hov_Ov_Transparency`, `TotalSoft_VG_LVG_Hov_Ov_Effect_Type`, `TotalSoft_VG_LVG_Hov_Ov_Effect_Time`, `TotalSoft_VG_LVG_Title_Bg_Color`, `TotalSoft_VG_LVG_Title_Transparency`, `TotalSoft_VG_LVG_Title_Font_Size`, `TotalSoft_VG_LVG_Title_Color`, `TotalSoft_VG_LVG_Title_Text_Shadow`, `TotalSoft_VG_LVG_Title_Shadow_Color`, `TotalSoft_VG_LVG_Title_Effect_Type`, `TotalSoft_VG_LVG_Title_Effect_Time`, `TotalSoft_VG_LVG_Line_Width`, `TotalSoft_VG_LVG_Line_Style`, `TotalSoft_VG_LVG_Line_Color`, `TotalSoft_VG_LVG_Line_Hov_Type`, `TotalSoft_VG_LVG_Line_Hov_Time`, `TotalSoft_VG_LVG_Link_Font_Size`, `TotalSoft_VG_LVG_Link_Color`, `TotalSoft_VG_LVG_Link_Border_Color`, `TotalSoft_VG_LVG_Link_Border_Width`, `TotalSoft_VG_LVG_Link_Border_Style`, `TotalSoft_VG_LVG_Link_Bg_Color`, `TotalSoft_VG_LVG_Link_Hov_Type`, `TotalSoft_VG_LVG_Link_Hov_Time`) VALUES
(1, '3', 'LightBox VideoGallery', 'LightBox Video Gallery', '294', '5', '10', '#ffffff', '1', 'solid', '#009491', '0', '#ffffff', '2', 'solid', '#009491', '5', 'true', 'center', '20', 'Arial', '#009491', '2', 'totalsoft totalsoft-play-circle-o', 'totalsoft totalsoft-pause-circle-o', '20', '#009491', '2', 'totalsoft totalsoft-times-circle-o', '16', '#009491', 'Close', 'Gabriola', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '20', '#009491', '16', '#009491', 'Next', 'Prev', '#009491', '#ffffff', '21', 'Gabriola', '28', '#ffffff', '#000000', '#ffffff', '#009491', 'solid', '#ffffff', 'lImgZoom7', '4', '#009491', '40', 'hovLayTVG1', '4', '#009491', '70', '23', '#ffffff', 'Gabriola', 'Gabriola', 'hovTit4', '5', '0', 'solid', '#dd3333', 'hovLine6', '6', '13', '#ffffff', '#ffffff', '1', 'solid', 'View More', 'hovLink7', '5'),
(2, '4', 'LightBox Video Gallery', 'LightBox Video Gallery', '294', '5', '10', '#009491', '7', 'solid', '#ffffff', '0', '#009491', '4', 'none', '#ffffff', '10', 'true', 'center', '20', 'Arial', '#ffffff', '2', 'totalsoft totalsoft-play-circle-o', 'totalsoft totalsoft-pause-circle-o', '20', '#dbdbdb', '2', 'totalsoft totalsoft-times-circle-o', '16', '#dbdbdb', 'Close', 'Gabriola', '3', 'totalsoft totalsoft-arrow-circle-left', 'totalsoft totalsoft-arrow-circle-right', '20', '#dbdbdb', '18', '#dbdbdb', 'Next', 'Prev', '#009491', '#ffffff', '21', 'Gabriola', '28', '#ffffff', '#000000', '#ffffff', '#009491', 'solid', '#ffffff', 'lImgZoom1', '5', '#009491', '17', 'hovLayTVG1', '5', '#ffffff', '60', '23', '#009491', 'Gabriola', 'Gabriola', 'hovTit1', '5', '1', 'solid', '#ffffff', 'hovLine5', '4', '13', '#ffffff', '#ffffff', '3', 'solid', 'View More', 'hovLink5', '4');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_manager`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_manager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGallery_Video_Gallery_Title` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_Option` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_ShowType` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_PerPage` varchar(255) NOT NULL,
  `TotalSoftGallery_LoadMore` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_manager`
--

INSERT INTO `wp_totalsoft_galleryv_manager` (`id`, `TotalSoftGallery_Video_Gallery_Title`, `TotalSoftGallery_Video_Option`, `TotalSoftGallery_Video_ShowType`, `TotalSoftGallery_Video_PerPage`, `TotalSoftGallery_LoadMore`) VALUES
(1, 'Furniture--one', 'Elastic Gallery 2', 'All', '1', 'Load More ...'),
(2, 'Gallery--one', 'LightBox VideoGallery', 'All', '1', 'Load More ...');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_ttvg`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_ttvg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGalleryV_SetID` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetName` varchar(255) NOT NULL,
  `TotalSoftGalleryV_SetType` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_SE` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_HE` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_O` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_AS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_FC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Sl` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_BR` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_POM` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_POS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_ShC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_VW` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_VH` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TShow` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_TPos` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_OC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_OO` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_Bg` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_BR` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_BSC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TBg` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TFS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TFF` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_TTA` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_NC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_NS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_ABgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_AC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_AR` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_AO` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Pop_CR` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_NBT` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_PBT` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_BgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_C` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_FS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_FF` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_H` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_CBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_CC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_HBgC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_HC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_BS` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_P_BC` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_V_PBImgs` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Ic_S` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Ic_C` varchar(255) NOT NULL,
  `TotalSoft_VG_TV_Ic_T` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_ttvg`
--

INSERT INTO `wp_totalsoft_galleryv_ttvg` (`id`, `TotalSoftGalleryV_SetID`, `TotalSoftGalleryV_SetName`, `TotalSoftGalleryV_SetType`, `TotalSoft_VG_TV_SE`, `TotalSoft_VG_TV_HE`, `TotalSoft_VG_TV_O`, `TotalSoft_VG_TV_AS`, `TotalSoft_VG_TV_FC`, `TotalSoft_VG_TV_Sl`, `TotalSoft_VG_TV_BC`, `TotalSoft_VG_TV_BR`, `TotalSoft_VG_TV_POM`, `TotalSoft_VG_TV_POS`, `TotalSoft_VG_TV_ShC`, `TotalSoft_VG_TV_VW`, `TotalSoft_VG_TV_VH`, `TotalSoft_VG_TV_TShow`, `TotalSoft_VG_TV_TBgC`, `TotalSoft_VG_TV_TC`, `TotalSoft_VG_TV_TFS`, `TotalSoft_VG_TV_TFF`, `TotalSoft_VG_TV_TPos`, `TotalSoft_VG_TV_Pop_OC`, `TotalSoft_VG_TV_Pop_OO`, `TotalSoft_VG_TV_Pop_Bg`, `TotalSoft_VG_TV_Pop_BgC`, `TotalSoft_VG_TV_Pop_BR`, `TotalSoft_VG_TV_Pop_BSC`, `TotalSoft_VG_TV_Pop_TBg`, `TotalSoft_VG_TV_Pop_TBgC`, `TotalSoft_VG_TV_Pop_TFS`, `TotalSoft_VG_TV_Pop_TFF`, `TotalSoft_VG_TV_Pop_TC`, `TotalSoft_VG_TV_Pop_TTA`, `TotalSoft_VG_TV_Pop_NC`, `TotalSoft_VG_TV_Pop_NS`, `TotalSoft_VG_TV_Pop_ABgC`, `TotalSoft_VG_TV_Pop_AC`, `TotalSoft_VG_TV_Pop_AR`, `TotalSoft_VG_TV_Pop_AO`, `TotalSoft_VG_TV_Pop_CBgC`, `TotalSoft_VG_TV_Pop_CC`, `TotalSoft_VG_TV_Pop_CR`, `TotalSoft_VG_TV_P_NBT`, `TotalSoft_VG_TV_P_PBT`, `TotalSoft_VG_TV_P_BgC`, `TotalSoft_VG_TV_P_C`, `TotalSoft_VG_TV_P_FS`, `TotalSoft_VG_TV_P_FF`, `TotalSoft_VG_TV_P_H`, `TotalSoft_VG_TV_P_CBgC`, `TotalSoft_VG_TV_P_CC`, `TotalSoft_VG_TV_P_HBgC`, `TotalSoft_VG_TV_P_HC`, `TotalSoft_VG_TV_P_BS`, `TotalSoft_VG_TV_P_BC`, `TotalSoft_VG_TV_V_PBImgs`, `TotalSoft_VG_TV_Ic_S`, `TotalSoft_VG_TV_Ic_C`, `TotalSoft_VG_TV_Ic_T`) VALUES
(1, '5', 'Thumbnails Video', 'Thumbnails Video', 'overlay', 'boxRainGrow', '0.3', '300', '#009491', '30', '12', '10', '0', '20', '#009491', '320', '180', 'true', '#ffffff', '#009491', '14', 'Arabic Typesetting', 'bottom', '#009491', '0.4', 'false', '#009491', '0', '#ffffff', 'false', '#009491', '25', 'Gabriola', '#ffffff', 'center', '#ffffff', '16', '#009491', '#ffffff', '100', '0.1', '#009491', '#ffffff', '100', 'Next', 'Prev', '#ffffff', '#009491', '21', 'Gabriola', '29', '#009491', '#ffffff', '#009491', '#e0e0e0', 'none', '#009491', '5', '45', '#ffffff', 'totalsoft totalsoft-play-circle'),
(2, '6', 'Thumbnails Video 2', 'Thumbnails Video', 'normal', 'popout', '0.1', '400', '#009491', '30', '8', '8', '1', '20', '#009491', '320', '180', 'true', '#ffffff', '#009491', '14', 'Arabic Typesetting', 'bottom', '#000000', '0.15', 'true', '#009491', '0', '#ffffff', 'true', '#009491', '25', 'Gabriola', '#ffffff', 'center', '#ffffff', '16', '#009491', '#ffffff', '0', '0.1', '#009491', '#ffffff', '100', 'Next', 'Prev', '#ffffff', '#009491', '21', 'Gabriola', '29', '#009491', '#ffffff', '#009491', '#e0e0e0', 'none', '#009491', '5', '45', '#ffffff', 'totalsoft totalsoft-play-circle');

-- --------------------------------------------------------

--
-- 表的结构 `wp_totalsoft_galleryv_videos`
--

CREATE TABLE IF NOT EXISTS `wp_totalsoft_galleryv_videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TotalSoftGallery_Video_VT` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_VDesc` longtext NOT NULL,
  `TotalSoftGallery_Video_VLink` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_VONT` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_VURL` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_IURL` varchar(255) NOT NULL,
  `TotalSoftGallery_Video_Video` varchar(255) NOT NULL,
  `GalleryV_ID` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wp_totalsoft_galleryv_videos`
--

INSERT INTO `wp_totalsoft_galleryv_videos` (`id`, `TotalSoftGallery_Video_VT`, `TotalSoftGallery_Video_VDesc`, `TotalSoftGallery_Video_VLink`, `TotalSoftGallery_Video_VONT`, `TotalSoftGallery_Video_VURL`, `TotalSoftGallery_Video_IURL`, `TotalSoftGallery_Video_Video`, `GalleryV_ID`) VALUES
(1, 'Furniture--one', 'The kitchen is the heart of a home; it is where meals are cooked, meaning conversations happen, and everyone gets the bulk of their nutrition, both physical and emotional. There is something to be said for a sweet, quaint little space, and there is also something significant about a super-sleek, ultra-modern space with all the latest finishes. Kitchen is the hub of your home. A perfect view of home begins with well configured kitchen.', 'https://www.youtube.com/watch?v=zXO6bZshVPc', 'true', 'https://www.youtube.com/embed/zXO6bZshVPc', 'http://img.youtube.com/vi/zXO6bZshVPc/mqdefault.jpg', 'https://www.youtube.com/watch?v=zXO6bZshVPc', '1'),
(2, 'Fresh Design Ideas for Kitchen', '', 'https://www.youtube.com/watch?v=XqU5-_lMBeA', 'true', 'https://www.youtube.com/embed/XqU5-_lMBeA', 'http://img.youtube.com/vi/XqU5-_lMBeA/mqdefault.jpg', 'https://www.youtube.com/watch?v=XqU5-_lMBeA', '2'),
(3, 'Special Features for Kitchen Cabinets', '', 'https://www.youtube.com/watch?v=KUkmY5BtpVo', 'true', 'https://www.youtube.com/embed/KUkmY5BtpVo', 'http://img.youtube.com/vi/KUkmY5BtpVo/mqdefault.jpg', 'https://www.youtube.com/watch?v=KUkmY5BtpVo', '2'),
(4, 'Quality Contemporary Kitchens', '', 'https://www.youtube.com/watch?v=-HVe-eeEkF8', 'true', 'https://www.youtube.com/embed/-HVe-eeEkF8', 'http://img.youtube.com/vi/-HVe-eeEkF8/mqdefault.jpg', 'https://www.youtube.com/watch?v=-HVe-eeEkF8', '2');

-- --------------------------------------------------------

--
-- 表的结构 `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', 'ufaq_admin_pointers_tutorial-one,ufaq_admin_pointers_tutorial-two,ufaq_admin_pointers_tutorial-three,ufaq_admin_pointers_tutorial-four,ufaq_admin_pointers_tutorial-five,ufaq_admin_pointers_tutorial-six'),
(13, 1, 'show_welcome_panel', '1'),
(14, 1, 'session_tokens', 'a:1:{s:64:"16a1f0a95590582bd18d334d674f33ad9d199062125e6c06f427a3f462a91b1b";a:4:{s:10:"expiration";i:1476416633;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.89 Safari/537.36";s:5:"login";i:1476243833;}}'),
(15, 1, 'wp_dashboard_quick_press_last_post_id', '3'),
(16, 1, 'wp_user-settings', 'libraryContent=browse&editor=tinymce'),
(17, 1, 'wp_user-settings-time', '1476244900'),
(18, 1, 'closedpostboxes_page', 'a:0:{}'),
(19, 1, 'metaboxhidden_page', 'a:0:{}'),
(20, 1, 'wp_r_tru_u_x', 'a:2:{s:2:"id";i:0;s:7:"expires";i:1476248676;}'),
(21, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}'),
(22, 1, 'metaboxhidden_nav-menus', 'a:5:{i:0;s:33:"add-post-type-twoj_slideshow_post";i:1;s:18:"add-post-type-ufaq";i:2;s:12:"add-post_tag";i:3;s:17:"add-ufaq-category";i:4;s:12:"add-ufaq-tag";}'),
(23, 1, 'nav_menu_recently_edited', '12');

-- --------------------------------------------------------

--
-- 表的结构 `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BNM7Fqa9bt2v33RIcxWdje.w5fdSbk.', 'admin', '478996650@qq.com', '', '2016-10-12 03:43:42', '', 0, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
