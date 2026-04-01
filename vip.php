<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'vip') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .dashboard { background: white; width: 500px; padding: 40px; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #333; margin-bottom: 10px; }
        .role-badge { background: #ffc107; color: #212529; padding: 8px 20px; border-radius: 25px; display: inline-block; margin-bottom: 20px; font-weight: bold; }
        .features { text-align: left; margin: 30px 0; }
        .feature { background: #fff3cd; padding: 15px; margin-bottom: 10px; border-radius: 8px; border-left: 4px solid #ffc107; }
        .vip-perks { background: linear-gradient(45deg, #ffd700, #ffed4e); padding: 20px; border-radius: 10px; margin: 20px 0; color: #333; }
        .logout-btn { background: #17a2b8; color: white; padding: 12px 30px; border: none; border-radius: 25px; cursor: pointer; font-size: 16px; font-weight: bold; text-decoration: none; display: inline-block; transition: 0.3s; }
        .logout-btn:hover { background: #138496; }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>VIP Dashboard</h1>
        <div class="role-badge">Role: VIP</div>
        <p>Halo <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>
        
        <div class="vip-perks">
            <h3>🎖️ Keistimewaan VIP:</h3>
            <p>Status Premium • Dukungan Prioritas • Fitur Eksklusif</p>
        </div>
        
        <div class="features">
            <h3>Fitur VIP:</h3>
            <div class="feature">⭐ Akses VIP Lounge</div>
            <div class="feature">💎 Hadiah Khusus</div>
            <div class="feature">📞 Support 24/7</div>
            <div class="feature">🚀 Fitur Premium</div>
        </div>
        
        <a href="logout.php" class="logout-btn">Keluar</a>
    </div>
</body>
</html>

