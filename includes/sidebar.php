<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside class="main-sidebar">
  <h5 class="text-center mb-3">MENU</h5>
  <nav>
    <?php if ($current_page != 'index.php'): ?>
      <a href="index.php"><i class="fa-solid fa-house"></i> Home</a>
    <?php endif; ?>

    <?php if ($current_page != 'data.php'): ?>
      <a href="data.php"><i class="fa-solid fa-database"></i> Data</a>
    <?php endif; ?>

    <?php if ($current_page != 'pengaturan.php'): ?>
      <a href="pengaturan.php"><i class="fa-solid fa-gear"></i> Pengaturan</a>
    <?php endif; ?>
  </nav>
</aside>
