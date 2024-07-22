CREATE DATABASE zoo_arcadia;

USE zoo_arcadia;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'veterinarian', 'employee') NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE Habitats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE Animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    species VARCHAR(50) NOT NULL,
    image VARCHAR(255),
    habitat_id INT,
    FOREIGN KEY (habitat_id) REFERENCES Habitats(id)
);

CREATE TABLE VeterinarianReports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    status TEXT NOT NULL,
    food TEXT NOT NULL,
    food_quantity FLOAT NOT NULL,
    report_date DATETIME NOT NULL,
    details TEXT,
    FOREIGN KEY (animal_id) REFERENCES Animals(id)
);

CREATE TABLE Services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE Reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    review TEXT NOT NULL,
    approved BOOLEAN DEFAULT FALSE
);

CREATE TABLE ContactRequests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    email VARCHAR(100) NOT NULL,
    request_date DATETIME NOT NULL
);

CREATE TABLE AnimalViews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    animal_id INT,
    view_count INT DEFAULT 0,
    FOREIGN KEY (animal_id) REFERENCES Animals(id)
);
