<?php
require_once __DIR__ . "/../backend/auth_guard.php";
$page_title = "System";
$active_page = "system";
require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/sidebar.php";
?>
<section class="page-content">
  <div class="page-heading"><div><p class="eyebrow">Project status</p><h1>System</h1></div><span class="demo-badge">Placeholder page</span></div>
  <section class="card panel">
    <!-- Future: show Pi service, network and database health here. -->
    <div class="panel-heading"><div><h2>System summary</h2><p>Use this area for basic health information when the backend exists.</p></div><img src="../assets/icons/network.svg" alt="" /></div>
    <div class="simple-list"><div><strong>Web interface</strong><span>Available</span></div><div><strong>Sensor service</strong><span>Not implemented</span></div><div><strong>IoT database</strong><span>Not implemented</span></div></div>
  </section>
</section>
<?php require __DIR__ . "/partials/footer.php"; ?>
