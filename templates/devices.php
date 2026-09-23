<?php
require_once __DIR__ . "/../backend/auth_guard.php";
$page_title = "Devices";
$active_page = "devices";
require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/sidebar.php";
?>
<section class="page-content">
  <div class="page-heading"><div><p class="eyebrow">Hardware</p><h1>Devices</h1></div><span class="demo-badge">Placeholder page</span></div>
  <section class="card panel">
    <!-- Future: show real ESP32 and Raspberry Pi connection details here. -->
    <div class="panel-heading"><div><h2>Project devices</h2><p>This page will eventually describe registered hardware and connection state.</p></div><img src="../assets/icons/device.svg" alt="" /></div>
    <div class="simple-list"><div><strong>Raspberry Pi</strong><span>Online (placeholder)</span></div><div><strong>ESP32 Node</strong><span>Not connected</span></div></div>
  </section>
</section>
<?php require __DIR__ . "/partials/footer.php"; ?>
