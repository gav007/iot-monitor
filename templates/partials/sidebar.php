<?php
/* Shared navigation. Set $active_page to highlight the current page. */
$active_page = $active_page ?? "";
$navigation = [
    "dashboard" => ["Dashboard", "dashboard.php"],
    "sensors" => ["Sensors", "sensors.php"],
    "devices" => ["Devices", "devices.php"],
    "history" => ["History", "history.php"],
    "system" => ["System", "system.php"],
];
?>
<aside class="sidebar card">
  <p class="sidebar-label">Monitor</p>
  <nav aria-label="Main navigation">
    <?php foreach ($navigation as $key => [$label, $url]) { ?>
      <a class="<?php echo $active_page === $key ? "active" : ""; ?>" href="<?php echo $url; ?>"><?php echo $label; ?></a>
    <?php } ?>
  </nav>
  <div class="sidebar-note">
    <span class="status-dot status-offline"></span>
    ESP32 not connected
  </div>
</aside>
