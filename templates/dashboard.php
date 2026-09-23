<?php
session_start();

if (!isset($_SESSION["login"]) || $_SESSION["login"] != 1) {
    header("Location: landing_page.php");
    exit();
}

$username = isset($_SESSION["registered_username"])
    ? htmlspecialchars($_SESSION["registered_username"], ENT_QUOTES, "UTF-8")
    : "Student";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoT Loop | Dashboard</title>
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Roboto:wght@400;500;700&family=Poppins:wght@500;600;700&family=Playfair+Display:wght@500;600;700&family=Sora:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/create.css" />
  </head>
  <body>
    <header>
      <div class="wrap">
        <a class="brand" href="dashboard.php">
          <img src="../assets/favicon.svg" alt="IoT Loop logo" />
          <span class="brand-name">IoT Loop</span>
        </a>
        <div class="header-actions">
          <button class="home-variant home-variant-outline" onclick="myFunction()">
            Toggle dark mode
          </button>
          <a class="home-variant home-variant-outline" href="../backend/logout.php">Log Out</a>
        </div>
      </div>
    </header>

    <main>
      <div class="wrap">
        <div class="main-row-nav">
          <section class="card sidebar">
            <h2>Menu</h2>
            <nav>
              <h3><a class="active" href="dashboard.php">Dashboard</a></h3>
            </nav>
          </section>

          <section class="card main-content">
            <div class="dashboard-welcome">
              <h1>Welcome back, <?php echo $username; ?></h1>
              <p>This dashboard is ready for us to build.</p>
            </div>

            <!-- Future: add project dashboard content here when the team decides what is needed. -->
          </section>
        </div>
      </div>
    </main>

    <script src="../scripts/main.js"></script>
  </body>
</html>
