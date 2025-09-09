-- Gebruik jouw bestaande database
USE omarkahouach;

-- Users tabel aanmaken
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Voorbeeld gebruiker toevoegen (wachtwoord = test123)
INSERT INTO users (username, email, password) VALUES
('demo', 'demo@example.com', '$2y$10$h9i6lP0eD0ErPS1Fqj2/LOo3aUOvhP.LIzDxKw3wKsc5TOfI9og9a');
