CREATE TABLE videos (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  video_name varchar(255) NOT NULL,
  embed_url varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
