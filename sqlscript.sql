-- 1. Create the table with auto-incrementing product ID
CREATE TABLE `users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `city` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
);