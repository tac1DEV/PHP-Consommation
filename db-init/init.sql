USE consommation;

CREATE TABLE IF NOT EXISTS vehicule (
    id INT AUTO_INCREMENT PRIMARY KEY,
    model VARCHAR(255) NOT NULL,
    distanceTot INT NOT NULL,
    distanceCumul INT NOT NULL,
    chargeBatterie INT NOT NULL,
    autonomie INT NOT NULL,
    reset INT NOT NULL
);

INSERT INTO vehicule (id, DistanceTot, DistanceCumul, ChargeBatterie, Autonomie, Reset, model) 
VALUES (1, 'zoe', 10, 11, 100, 180, 0);