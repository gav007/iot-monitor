<?php
require_once __DIR__ . "/../backend/auth_guard.php";
$page_title = "Sensors";
$active_page = "sensors";
require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/sidebar.php";
?>
<section class="page-content">
  <div class="page-heading"><div><p class="eyebrow">Inputs</p><h1>Sensors</h1></div><span class="demo-badge">Placeholder page</span></div>
  <section class="card panel">
    <!-- Future: display ESP32 sensor readings here. -->
    <div class="panel-heading"><div><h2>Connected sensors</h2><p>Sensor cards and current readings can be added here later.</p></div><img src="../assets/icons/sensor.svg" alt="" /></div>
    <div class="empty-state"><strong>No sensor data yet</strong><p>The gas and water sensor integration has not been implemented.</p></div>
  </section>
</section>
<?php require __DIR__ . "/partials/footer.php"; ?>
