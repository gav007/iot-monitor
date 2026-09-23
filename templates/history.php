<?php
require_once __DIR__ . "/../backend/auth_guard.php";
$page_title = "History";
$active_page = "history";
require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/sidebar.php";
?>
<section class="page-content">
  <div class="page-heading"><div><p class="eyebrow">Past readings</p><h1>History</h1></div><span class="demo-badge">Placeholder page</span></div>
  <section class="card panel">
    <!-- Future: list stored sensor readings here after the database design is agreed. -->
    <div class="panel-heading"><div><h2>Reading history</h2><p>A simple table of dated sensor readings can be added here later.</p></div><img src="../assets/icons/database.svg" alt="" /></div>
    <div class="empty-state"><strong>No readings stored</strong><p>The IoT database schema has deliberately not been implemented.</p></div>
  </section>
</section>
<?php require __DIR__ . "/partials/footer.php"; ?>
