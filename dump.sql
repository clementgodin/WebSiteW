CREATE DATABASE websitew;

CREATE TABLE `articles` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(160) NOT NULL,
  `content` text,
  `user_id` varchar(80),
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;