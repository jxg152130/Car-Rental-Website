CREATE TABLE IF NOT EXISTS users_table (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL,
  `role` varchar(1) NOT Null Default "U",
  PRIMARY KEY (`user_id`)
);
alter table users_table add column licence_no varchar(20) not null;

alter table users_table add column address varchar(100) not null;
alter table users_table modify column joining_date TIMESTAMP DEFAULT NOW();

create table cart (user_id int, date_out date, date_in date, due_date date, no_of_days int,
 number_plate varchar(20), AMOUNT_pay decimal(6,2), penality decimal(6,2), FOREIGN KEY (user_id) REFERENCES users_table (user_id)
       ON DELETE CASCADe, FOREIGN KEY (number_plate) REFERENCES inventory (number_plate)
       ON DELETE CASCADe);
	   
	    onclick="return confirm('Are you sure?');