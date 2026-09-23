<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="1.2; url=templates/landing_page.php" />
    <title>IoT Monitor</title>
    <link rel="icon" type="image/svg+xml" href="assets/logo.svg" />
    <link rel="stylesheet" href="styles/style.css" />
  </head>
  <body class="splash-page">
    <main class="splash" aria-label="Opening IoT Monitor">
      <img src="assets/logo.svg" alt="IoT Monitor" />
      <h1>IoT Monitor</h1>
      <p>Opening dashboard...</p>
    </main>
    <script>
      window.setTimeout(function () {
        window.location.href = "templates/landing_page.php";
      }, 1200);
    </script>
  </body>
</html>
