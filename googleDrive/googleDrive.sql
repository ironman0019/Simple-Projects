CREATE DATABASE `googleDrive`;


CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(150) NOT NULL, 
    PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

CREATE TABLE `files` (
    `files_id` INT NOT NULL AUTO_INCREMENT,
    `files` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `users_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`users_id`) REFERENCES users(`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;