CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(100) NOT NULL,
`url` varchar(100) NOT NULL,
`content` text(3000) NOT NULL,
`image` varchar(500) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1 ;