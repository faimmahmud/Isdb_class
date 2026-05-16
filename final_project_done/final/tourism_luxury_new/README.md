# Aurelia Travel

A premium tourism website built with PHP, Bootstrap 5, MySQL/MariaDB, CSS3, and JavaScript.

## Included
- Full-screen luxury hero sections
- Dynamic destination, world explorer, and package pages
- Booking form with AJAX submission
- Login and register flow
- Admin package CRUD
- Booking dashboard with customer, travel, payment, and status management
- Image upload support with MIME/type validation
- CSRF protection on write actions
- MySQL-backed users, packages, package features, and bookings

## MySQL setup
The app is configured for XAMPP defaults:

- Database: `aurelia_travel`
- User: `root`
- Password: empty
- Host: `127.0.0.1`

Open the site through localhost once, or visit:

`/database/install.php`

The installer is localhost-only. It creates the database and tables, then imports the current JSON files when the tables are empty.

You can change connection values with environment variables:

- `AURELIA_DB_HOST`
- `AURELIA_DB_PORT`
- `AURELIA_DB_NAME`
- `AURELIA_DB_USER`
- `AURELIA_DB_PASS`

## Booking system
The booking form captures:
- package / ticket name
- booking type
- customer name, email, phone
- departure and destination
- travel date and travel time
- leaving date and leaving time
- guests / tickets
- payment method and payment reference
- amount and currency
- booking status and payment status
- booked by, IP address, and user agent

## Admin panel
Open the admin dashboard after login to:
- view all bookings
- search and filter bookings
- inspect full booking details
- update booking and payment status
- delete bookings
- manage tour packages

## Demo admin
- Email: `admin@demo.com`
- Password: `admin123`

## Notes
- `data/*.json` files are kept as seed/backup data.
- Runtime data is stored in MySQL.
- `database/schema.sql` contains the full MySQL/MariaDB schema.
