CREATE TABLE users (
  id tinyint(4) NOT NULL AUTO_INCREMENT,
  nickname VARCHAR(25) NOT NULL,
  first_name VARCHAR(25) NOT NULL,
  last_name VARCHAR(25) NOT NULL,
  address VARCHAR(80) NOT NULL,
  city VARCHAR(30) NOT NULL,
  postcode CHAR(7) NOT NULL,
  bio TEXT NULL,
  password varchar(100) NOT NULL,
  PRIMARY KEY (user_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

insert into users(nickname, first_name , last_name , address , city , postcode , bio , password) values
('peti193','Peter', 'Kis-Nemet' , 'Felszabadulas ut' , 'Ujszasz' , '5052' , 'Hello My name is peter from Hungary' , MD5('lonsdale'));