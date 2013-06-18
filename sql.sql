-- Adminer 3.6.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `browsers`;
CREATE TABLE `browsers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `browsers` (`id`, `name`) VALUES
(1, 'Latest Safari'),
(2, 'Latest Google Chrome'),
(3, 'Firefox 4+'),
(4, 'Internet Explorer 7+'),
(5, 'Internet Explorer 6'),
(6, 'Opera 11');

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) unsigned NOT NULL,
  `viewer` int(11) unsigned NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `owner` (`owner`),
  KEY `viewer` (`viewer`),
  CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `users` (`id`),
  CONSTRAINT `feedbacks_ibfk_2` FOREIGN KEY (`viewer`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `layouts`;
CREATE TABLE `layouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `layouts` (`id`, `type`) VALUES
(1, 'Fixed'),
(2, 'Fluid'),
(3, 'Responsive');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) unsigned NOT NULL,
  `buyer_id` int(11) unsigned NOT NULL,
  `template_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `template_id` (`template_id`),
  KEY `author_id` (`author_id`),
  KEY `buyer_id` (`buyer_id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`),
  CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `organizations` (`id`, `name`) VALUES
(1, 'Foreign Corporation'),
(2, 'Foreign Goverment Agency');

DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `tax_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `organization_id` (`organization_id`),
  CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login',  'Login privileges, granted after account confirmation'),
(2, 'admin',  'Administrative user, has access to everything.');

DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE `roles_users` (
  `user_id` int(11) unsigned NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `screenshots`;
CREATE TABLE `screenshots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `large` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `templates`;
CREATE TABLE `templates` (
  `id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `screenshot_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `exclusivity` tinyint(4) NOT NULL,
  `license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deploy` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `screenshot_id` (`screenshot_id`),
  CONSTRAINT `templates_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `templates_ibfk_3` FOREIGN KEY (`screenshot_id`) REFERENCES `screenshots` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `templates_browsers`;
CREATE TABLE `templates_browsers` (
  `template_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `browser_id` int(11) NOT NULL,
  PRIMARY KEY (`template_id`,`browser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `templates_layouts`;
CREATE TABLE `templates_layouts` (
  `template_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `layout_id` int(11) NOT NULL,
  PRIMARY KEY (`template_id`,`layout_id`),
  KEY `layout_id` (`layout_id`),
  CONSTRAINT `templates_layouts_ibfk_1` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`),
  CONSTRAINT `templates_layouts_ibfk_2` FOREIGN KEY (`layout_id`) REFERENCES `layouts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `templates_tags`;
CREATE TABLE `templates_tags` (
  `template_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`template_id`,`tag_id`),
  KEY `tag_id` (`tag_id`),
  CONSTRAINT `templates_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `templates_tags_ibfk_3` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `templates_versions`;
CREATE TABLE `templates_versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `template_id` (`template_id`),
  CONSTRAINT `templates_versions_ibfk_1` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(64) NOT NULL,
  `balance` double NOT NULL,
  `logins` int(11) unsigned DEFAULT '0',
  `last_login` int(11) unsigned DEFAULT NULL,
  `created` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2012-12-02 21:32:52
