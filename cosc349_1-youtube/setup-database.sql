CREATE TABLE videos (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  video_name varchar(255) NOT NULL,
  embed_url varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO videos VALUES ('1','Screen Recording Demo','<iframe width="560" height="315" src="https://www.youtube.com/embed/MAi2lfXbXg4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
INSERT INTO videos VALUES ('2','Symphony No. 9','<iframe width="560" height="315" src="https://www.youtube.com/embed/t3217H8JppI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
INSERT INTO videos VALUES ('3','Chasing AdVANture','<iframe width="560" height="315" src="https://www.youtube.com/embed/PNs68O5JSKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
INSERT INTO videos VALUES ('4','Crab Rave','<iframe width="560" height="315" src="https://www.youtube.com/embed/-50NdPawLVY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');