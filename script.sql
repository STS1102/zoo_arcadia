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





-- Insertion des comptes utilisateurs
INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$K4m8UQhxkA8Jl0GBBB0SjeDLM1BzZYXKZ57.b2hXy2eD/eRoAa82G', 'admin'), -- mot de passe : admin123
('veterinaire1', '$2y$10$Ks8ZLR6H1a0F6IO1lyX3ZO/YIKXzw7QOL/cytYQ4YgjiXwhXbD/MC', 'veterinarian'), -- mot de passe : vet123
('employe1', '$2y$10$KcX4ivx/Jas8RaD9W/hEBeCwrDA0Y9HhR8zax/pJLjiOTibfP6Nzm', 'employee'); -- mot de passe : emp123


-- Insertion d'un rapport vétérinaire
INSERT INTO veterinarian_reports (animal_id, report_date, health_status, food_given, food_quantity, additional_notes) VALUES
(1, '2024-07-21', 'Bonne santé', 'Viande', '5 kg', 'Aucun problème noté'),
(2, '2024-07-21', 'Blessure légère à la patte', 'Poulet', '3 kg', 'Surveillance recommandée'),
(3, '2024-07-21', 'Bonne santé', 'Algues', '500 g', 'Très actif');

-- Insertion des animaux
INSERT INTO animals (name, species, habitat_id) VALUES
('Simba', 'Lion', 1),
('Croc', 'Crocodile', 2),
('Dory', 'Poisson-clown', 3);

-- Insertion d'un avis de visiteur
INSERT INTO reviews (animal_id, user_name, comment, approved) VALUES
(1, 'JohnDoe', 'Un magnifique lion, très majestueux !', FALSE),
(2, 'JaneSmith', 'Le crocodile est impressionnant mais un peu effrayant.', FALSE),
(3, 'Visitor123', 'Dory est très mignonne et active !', FALSE);

-- Insertion des habitats
INSERT INTO habitats (name, description, image_url) VALUES
('Savane', 'Une vaste étendue de prairie avec des arbres épars.', 'savane.jpg'),
('Marais', 'Un habitat humide avec une grande diversité d espèces aquatiques.', 'marais.jpg'),
('Océan', 'Un habitat marin avec une grande diversité de poissons et autres animaux marins.', 'ocean.jpg');
