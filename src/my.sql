CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE todo (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(255) DEFAULT NULL,
  status enum('pending','in_progress','completed') DEFAULT NULL,
  due_date datetime DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL
);