<?php include 'includes/head.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="content-wrapper">
  <div class="page-header">
    <h2>Profil Pengguna</h2>
    <p>Halaman ini menampilkan informasi profil pengguna yang sedang login.</p>
  </div>

  <div class="profile-container">
    <div class="profile-card">
      <div class="profile-image">
        <img src="assets/images/user-default.png" alt="Foto Profil" width="120" height="120">
      </div>

      <div class="profile-info">
        <h3><?php echo $user['nama'] ?? 'Nama Pengguna'; ?></h3>
        <p><strong>Email:</strong> <?php echo $user['email'] ?? 'user@example.com'; ?></p>
        <p><strong>Username:</strong> <?php echo $user['username'] ?? 'username123'; ?></p>
        <p><strong>Tanggal Bergabung:</strong> <?php echo $user['created_at'] ?? '01 Januari 2023'; ?></p>

        <a href="edit_profil.php" class="btn btn-primary">Edit Profil</a>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
