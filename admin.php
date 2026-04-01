<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .dashboard { background: white; width: 600px; padding: 40px; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #333; margin-bottom: 10px; }
        .role-badge { background: #dc3545; color: white; padding: 8px 20px; border-radius: 25px; display: inline-block; margin-bottom: 20px; font-weight: bold; }
        .stats { display: flex; justify-content: space-around; margin: 30px 0; }
        .stat-card { background: #007bff; color: white; padding: 20px; border-radius: 10px; flex: 1; margin: 0 10px; }
        .features { text-align: left; margin: 30px 0; }
        .feature { background: #f8f9fa; padding: 15px; margin-bottom: 10px; border-radius: 8px; border-left: 4px solid #dc3545; }
        .logout-btn { background: #6c757d; color: white; padding: 12px 30px; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; font-weight: bold; text-decoration: none; display: inline-block; transition: 0.3s; margin-top: 20px; }
        .logout-btn:hover { background: #545b62; }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <div class="role-badge">Role: Administrator</div>
        <p>Halo <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>
        
        <div class="stats">
            <div class="stat-card">
                <h3>4</h3>
                <p>Total User</p>
            </div>
            <div class="stat-card">
                <h3>1</h3>
                <p>Active Admin</p>
            </div>
        </div>
        
        <div class="features">
            <h3>Fitur Admin:</h3>
            <div class="feature">🔧 Kelola Pengguna</div>
            <div class="feature">📊 Lihat Statistik</div>
            <div class="feature">⚙️ Pengaturan Sistem</div>
            <div class="feature">📈 Laporan Lengkap</div>
        </div>
        
        <a href="logout.php" class="logout-btn">Keluar</a>
    </div>
</body>
</html>

