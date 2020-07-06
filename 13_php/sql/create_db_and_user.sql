-- Create Database
CREATE DATABASE learnDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


-- CREATE USER
CREATE USER 'puri'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'puri.varo+555'


-- SET PRIVILEGE
GRANT ALL PRIVILEGES ON learnDB.* TO 'puri'@'localhost';