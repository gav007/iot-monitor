<?php
require_once __DIR__ . "/../backend/auth_guard.php";
$page_title = "Dashboard";
$active_page = "dashboard";
require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/sidebar.php";
?>
<section class="page-content">
  <div class="page-heading">
    <div><p class="eyebrow">System overview</p><h1>Welcome, <?php echo $username; ?></h1></div>
    <span class="demo-badge">Placeholder data</span>
  </div>

  <!-- Future: replace these hard-coded cards with real device and sensor status. -->
  <div class="status-grid">
    <article class="status-card card">
      <img src="../assets/icons/device.svg" alt="" />
      <div><span>ESP32 Node</span><strong>Offline / Not Connected</strong></div>
      <span class="status-dot status-offline" aria-label="Offline"></span>
    </article>
    <article class="status-card card">
      <img src="../assets/icons/server.svg" alt="" />
      <div><span>Raspberry Pi</span><strong>Online</strong></div>
      <span class="status-dot status-online" aria-label="Online"></span>
    </article>
    <article class="status-card card">
      <img src="../assets/icons/sensor.svg" alt="" />
      <div><span>Gas Sensor</span><strong>No Data</strong></div>
      <span class="status-dot status-idle" aria-label="No data"></span>
    </article>
    <article class="status-card card">
      <img src="../assets/icons/sensor.svg" alt="" />
      <div><span>Water Sensor</span><strong>No Data</strong></div>
      <span class="status-dot status-idle" aria-label="No data"></span>
    </article>
  </div>

  <section class="card panel">
    <div class="panel-heading"><div><p class="eyebrow">Latest activity</p><h2>Last Reading</h2></div><img src="../assets/icons/database.svg" alt="" /></div>
    <!-- Future: display the most recent stored sensor reading here. -->
    <div class="empty-state"><strong>No Data</strong><p>Sensor readings will appear here once the ESP32 connection is built.</p></div>
  </section>
</section>
<?php require __DIR__ . "/partials/footer.php"; ?>
