CREATE DATABASE ogui_db;

USE ogui_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    user_type VARCHAR(255) NOT NULL, -- This will store comma-separated values (Volunteer, Admin, etc.)
    cv_upload_path VARCHAR(255), -- This stores the path to the uploaded CV (nullable)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- This will store the time the user was added
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- This updates the time whenever a record is updated
);