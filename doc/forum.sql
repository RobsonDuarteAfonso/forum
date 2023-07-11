-- -----------------------------------------------------
-- Schema Forum
-- -----------------------------------------------------
CREATE DATABASE Forum;
USE Forum;

-- -----------------------------------------------------
-- Table User
-- -----------------------------------------------------
CREATE TABLE user (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(25) NOT NULL,
  email VARCHAR(45) NOT NULL,
  password VARCHAR(255) NOT NULL,
  birthday DATE NULL,
  PRIMARY KEY (id),
  UNIQUE (email)
);


-- -----------------------------------------------------
-- Table Article
-- -----------------------------------------------------
CREATE TABLE article (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(100) NOT NULL,
  text TEXT(1000) NOT NULL,
  date DATE NOT NULL,
  user_id INT NOT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_article_user
    FOREIGN KEY (user_id)
    REFERENCES user (id)
);
