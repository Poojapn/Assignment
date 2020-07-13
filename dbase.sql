SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:30";


--Database : 'dbase'


CREATE TABLE IF NOT EXISTS 'frindList' (
'id' int(11) NOT NULL,
    'name' varchar(1040) NOT NULL,
    'age' int(11) NOT NULL,
    'location' varchar(1040) NOT NULL,
    
)     ENGINE=InnoDB Auto_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO 'frindList'('id', 'name', 'age', 'location') values
(1, 'sam', '25', 'Bangalore' ),
(2, 'jazz', '30', 'Mysore'),
(3, 'mery', '22', 'Mumbai'),
(4, 'John', '18','Delhi' ),
(5, 'Robert', '24', 'Gurgaon' ),

ALTER TABLE 'friendList'
ADD PRIMARY KEY ('id');


ALTER TABLE 'friendList'
MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
