# IoT Monitor

IoT Monitor is a stripped-back college project starter based on the visual style and authentication flow of Loop. It is intended for a future Raspberry Pi and ESP32 monitoring proof of concept.

At this stage, the project contains a PHP/MySQL login system and static interface placeholders only. It does **not** contain sensor processing, MQTT, ESP32 communication, APIs, charts, alerts, or an IoT database implementation.

## What works now

- registration with a TU Dublin email address
- password hashing with PHP `password_hash()`
- login with `password_verify()`
- PHP session protection for all monitor pages
- logout and session destruction
- remembered login email cookie
- light/dark mode
- responsive Dashboard, Sensors, Devices, History, and System pages
- static placeholder status cards

## Local setup with XAMPP

1. Put the `IoT-Monitor` folder inside your XAMPP `htdocs` folder.
2. Start Apache and MySQL.
3. In phpMyAdmin, create a database named `iot_monitor`.
4. Select that database and import `database/auth_schema.sql`.
5. Copy `backend/config.example.php` to `backend/config.php`.
6. Open `backend/config.php` and enter your own local MySQL username and password.
7. Visit `http://localhost/IoT-Monitor/`.

`backend/config.php` is listed in `.gitignore`, so local credentials will not be committed. Environment variables named `IOT_DB_HOST`, `IOT_DB_USERNAME`, `IOT_DB_PASSWORD`, `IOT_DB_NAME`, and `IOT_DB_PORT` may be used instead.

## Project structure

```text
assets/                 Local logo and simple device/sensor SVG icons
backend/                Authentication handlers, session guard, and DB connection
database/               Working auth schema plus comments for future IoT tables
scripts/                Dark-mode and registration form JavaScript
styles/                 Shared design system and dashboard layout
templates/              Login, register, and five protected project pages
templates/partials/     Shared header, sidebar navigation, and footer
index.php               Short branded entry screen
```

## Where future student code goes

Each placeholder page contains an HTML comment showing the intended extension point. For example:

```html
<!-- Future: display ESP32 sensor readings here. -->
```

Before implementing the backend, agree what data the ESP32 will send. `database/future_iot_tables.sql` contains comments about possible `devices`, `sensors`, and `sensor_readings` tables but intentionally creates nothing.

## Working title

"IoT Monitor" is a temporary name. The visible name appears in the template headers, page titles, footer text, README, and logo title, so it can be replaced with a straightforward project-wide search later.
