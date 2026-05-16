-- Aurelia Travel MySQL/MariaDB schema
-- Default local database: aurelia_travel

CREATE DATABASE IF NOT EXISTS `aurelia_travel`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `aurelia_travel`;

CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_email (email),
    KEY idx_users_role (role)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS packages (
    id VARCHAR(64) NOT NULL,
    title VARCHAR(190) NOT NULL,
    country VARCHAR(120) NOT NULL DEFAULT '',
    price VARCHAR(50) NOT NULL DEFAULT '',
    rating VARCHAR(20) NOT NULL DEFAULT '5.0',
    days VARCHAR(50) NOT NULL DEFAULT '',
    image TEXT NOT NULL,
    description TEXT NULL,
    category VARCHAR(60) NOT NULL DEFAULT 'city',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY idx_packages_category (category),
    KEY idx_packages_country (country)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS package_features (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    package_id VARCHAR(64) NOT NULL,
    feature VARCHAR(190) NOT NULL,
    sort_order INT UNSIGNED NOT NULL DEFAULT 0,
    PRIMARY KEY (id),
    KEY idx_package_features_package (package_id),
    CONSTRAINT fk_package_features_package
        FOREIGN KEY (package_id) REFERENCES packages(id)
        ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS bookings (
    id VARCHAR(64) NOT NULL,
    booking_ref VARCHAR(40) NOT NULL,
    booking_type VARCHAR(30) NOT NULL DEFAULT 'package',
    package_id VARCHAR(64) NULL,
    package_name VARCHAR(190) NOT NULL,
    country VARCHAR(120) NOT NULL DEFAULT '',
    departure_from VARCHAR(120) NOT NULL DEFAULT '',
    destination VARCHAR(120) NOT NULL DEFAULT '',
    travel_date DATE NULL,
    travel_time TIME NULL,
    leave_date DATE NULL,
    leave_time TIME NULL,
    guests INT UNSIGNED NOT NULL DEFAULT 1,
    customer_name VARCHAR(150) NOT NULL,
    customer_email VARCHAR(190) NOT NULL,
    customer_phone VARCHAR(60) NOT NULL,
    payment_method VARCHAR(40) NOT NULL DEFAULT 'cash',
    payment_reference VARCHAR(190) NOT NULL DEFAULT '',
    payment_status VARCHAR(40) NOT NULL DEFAULT 'pending',
    booking_status VARCHAR(40) NOT NULL DEFAULT 'pending',
    amount DECIMAL(12,2) NOT NULL DEFAULT 0.00,
    currency CHAR(3) NOT NULL DEFAULT 'USD',
    message TEXT NULL,
    booked_by VARCHAR(190) NOT NULL DEFAULT 'guest',
    booked_role VARCHAR(40) NOT NULL DEFAULT 'guest',
    booking_channel VARCHAR(40) NOT NULL DEFAULT 'website',
    ip_address VARCHAR(45) NOT NULL DEFAULT '',
    user_agent VARCHAR(255) NOT NULL DEFAULT '',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_bookings_ref (booking_ref),
    KEY idx_bookings_created_at (created_at),
    KEY idx_bookings_status (booking_status),
    KEY idx_bookings_payment (payment_status),
    KEY idx_bookings_type (booking_type),
    KEY idx_bookings_customer_email (customer_email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
