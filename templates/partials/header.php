<?php
/* Shared top section for signed-in pages. Set $page_title before including it. */
$page_title = $page_title ?? "Dashboard";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoT Monitor | <?php echo htmlspecialchars($page_title, ENT_QUOTES, "UTF-8"); ?></title>
    <link rel="icon" type="image/svg+xml" href="../assets/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/style.css" />
    <link rel="stylesheet" href="../styles/dashboard.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="wrap header-inner">
        <a class="brand" href="dashboard.php"><img src="../assets/logo.svg" alt="" /><span>IoT Monitor</span></a>
        <div class="header-actions">
          <button class="button button-ghost" type="button" data-theme-toggle>Dark mode</button>
          <a class="button button-ghost" href="../backend/logout.php">Log out</a>
        </div>
      </div>
    </header>
    <main class="app-main">
      <div class="wrap app-layout">
