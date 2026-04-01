<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .dashboard { background: white; width: 500px; padding: 40px; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #333; margin-bottom: 10px; }
        .role-badge { background: #28a745; color: white; padding: 8px 20px; border-radius: 25px; display: inline-block; margin-bottom: 20px; font-weight: bold; }
        .features { text-align: left; margin: 30px 0; }
        .feature { background: #f8f9fa; padding: 15px; margin-bottom: 10px; border-radius: 8px; border-left: 4px solid #007bff; }
        .logout-btn { background: #dc3545; color: white; padding: 12px 30px; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; font-weight: bold; text-decoration: none; display: inline-block; transition: 0.3s; }
        .logout-btn:hover { background: #c82333; }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Selamat Datang!</h1>
        <div class="role-badge">Role: User</div>
        <p>Halo <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>
        
        <div class="features">
            <h3>Fitur User:</h3>
            <div class="feature">✅ Akses Dashboard Pribadi</div>
            <div class="feature">✅ Lihat Profil</div>
            <div class="feature">✅ Riwayat Aktivitas</div>
        </div>
        
        <a href="logout.php" class="logout-btn">Keluar</a>
    </div>
</body>
</html>

