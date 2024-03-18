CREATE TABLE `localisation` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `EN` varchar(255) COLLATE utf8mb4_general_ci,
    `FR` varchar(255) COLLATE utf8mb4_general_ci,
    `RU` varchar(255) COLLATE utf8mb4_general_ci,
    `LU` varchar(255) COLLATE utf8mb4_general_ci,
    PRIMARY KEY (id)
);