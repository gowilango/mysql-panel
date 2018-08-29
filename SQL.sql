use mysql-panel;
CREATE TABLE `news` (
  `id` int(100) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tdate` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);
