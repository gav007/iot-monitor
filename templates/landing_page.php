<?php
session_start();
$remembered_email = isset($_COOKIE["user_email"])
    ? htmlspecialchars($_COOKIE["user_email"], ENT_QUOTES, "UTF-8")
    : "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoT Monitor | Sign In</title>
    <link rel="icon" type="image/svg+xml" href="../assets/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/style.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="wrap header-inner">
        <a class="brand" href="landing_page.php"><img src="../assets/logo.svg" alt="" /><span>IoT Monitor</span></a>
        <div class="header-actions">
          <button class="button button-ghost" type="button" data-theme-toggle>Dark mode</button>
          <a class="button button-ghost" href="register.php">Register</a>
        </div>
      </div>
    </header>

    <main class="auth-main">
      <div class="wrap auth-grid">
        <section class="card intro-card">
          <div class="hero-icon"><img src="../assets/icons/network.svg" alt="" /></div>
          <p class="eyebrow">Raspberry Pi + ESP32 project</p>
          <h1>A simple home for our IoT monitoring work.</h1>
          <p>This starter interface will eventually show readings sent from an ESP32 to a Raspberry Pi. For now, it contains authentication and visual placeholders only.</p>
        </section>

        <section class="card auth-card">
          <p class="eyebrow">Student access</p>
          <h1>Sign in</h1>
          <?php if (isset($_SESSION["error"])) { ?>
            <p class="message message-error"><?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES, "UTF-8"); ?></p>
            <?php unset($_SESSION["error"]); ?>
          <?php } ?>
          <?php if (isset($_SESSION["success"])) { ?>
            <p class="message message-success"><?php echo htmlspecialchars($_SESSION["success"], ENT_QUOTES, "UTF-8"); ?></p>
            <?php unset($_SESSION["success"]); ?>
          <?php } ?>
          <form action="../backend/login_handler.php" method="post">
            <div class="field-group">
              <label for="email">Email</label>
              <input class="field" type="email" id="email" name="email" value="<?php echo $remembered_email; ?>" autocomplete="email" required />
            </div>
            <div class="field-group">
              <label for="password">Password</label>
              <input class="field" type="password" id="password" name="password" autocomplete="current-password" required />
            </div>
            <button class="button button-primary button-full" type="submit">Sign in</button>
          </form>
          <p class="auth-help">No account yet? <a href="register.php">Create one</a>.</p>
        </section>
      </div>
    </main>

    <footer><div class="wrap">IoT Monitor &middot; College proof of concept</div></footer>
    <script src="../scripts/main.js"></script>
  </body>
</html>
