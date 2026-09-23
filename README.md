# IoT Loop

IoT Loop is a deliberately simple starting point for a college Raspberry Pi and ESP32 project. It reuses the original Loop PHP structure, authentication, CSS, dark mode, responsive layout, cards, header, and sidebar.

The project direction has not been decided yet. The dashboard is intentionally almost empty so the team can build it step by step.

## What works now

- registration with a TU Dublin email address
- password hashing with PHP `password_hash()`
- login with `password_verify()`
- PHP session protection for the dashboard
- logout and session destruction
- remembered login email cookie
- original Loop light and dark styling
- original responsive page layout

There is no IoT functionality yet. No sensor handling, ESP32 communication, MQTT, charts, APIs, alerts, or IoT database tables have been implemented.

## Local setup with XAMPP

1. Put the project folder inside XAMPP's `htdocs` folder.
2. Start Apache and MySQL.
3. Create a MySQL database named `iot_monitor`.
4. Import `database/auth_schema.sql` into it.
5. Copy `backend/config.example.php` to `backend/config.php`.
6. Add your own local MySQL details to `backend/config.php`.
7. Open the project through localhost.

`backend/config.php` is ignored by Git, so local database credentials are not committed.

## Main folders

```text
assets/       Existing visual assets and SVGs
backend/      Registration, login, logout, and database connection
database/     Authentication schema and comments for possible future tables
scripts/      Dark-mode and registration form JavaScript
styles/       Original Loop CSS
templates/    Login, registration, and the blank dashboard
```

The empty dashboard contains one clear comment showing where the team can begin:

```html
<!-- Future: add project dashboard content here when the team decides what is needed. -->
```
