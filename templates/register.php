<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IoT Monitor | Register</title>
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
          <a class="button button-ghost" href="landing_page.php">Sign in</a>
        </div>
      </div>
    </header>

    <main class="auth-main">
      <div class="wrap auth-grid">
        <section class="card intro-card">
          <div class="hero-icon"><img src="../assets/icons/device.svg" alt="" /></div>
          <p class="eyebrow">Project team</p>
          <h1>Create your monitor account.</h1>
          <p>Accounts are stored in MySQL with hashed passwords. IoT data storage will be designed later.</p>
        </section>

        <section class="card auth-card">
          <p class="eyebrow">New account</p>
          <h1>Register</h1>
          <?php if (isset($_SESSION["error"])) { ?>
            <p class="message message-error"><?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES, "UTF-8"); ?></p>
            <?php unset($_SESSION["error"]); ?>
          <?php } ?>
          <form onsubmit="return validatePassword();" action="../backend/register_handler.php" method="post">
            <div class="field-group"><label for="username">Name</label><input class="field" type="text" id="username" name="username" autocomplete="username" required /></div>
            <div class="field-group"><label for="email">TU Dublin email</label><input class="field" type="email" id="email" name="email" placeholder="name@mytudublin.ie" autocomplete="email" required /></div>
            <div class="field-group"><label for="password">Password</label><input class="field" type="password" id="password" name="password" minlength="8" autocomplete="new-password" required /><small>Use at least 8 characters.</small></div>
            <div class="field-group"><label for="confirm_password">Confirm password</label><input class="field" type="password" id="confirm_password" name="confirm_password" minlength="8" autocomplete="new-password" required /></div>
            <button class="button button-primary button-full" type="submit">Create account</button>
          </form>
        </section>
      </div>
    </main>

    <footer><div class="wrap">IoT Monitor &middot; College proof of concept</div></footer>
    <script src="../scripts/main.js"></script>
  </body>
</html>
