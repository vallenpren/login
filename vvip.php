<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'vvip') {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVIP Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        .dashboard { background: linear-gradient(135deg, #1e3c72, #2a5298); color: white; width: 600px; padding: 50px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); text-align: center; position: relative; overflow: hidden; }
        .dashboard::before { content: ''; position: absolute; top: -50%; right: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%); animation: rotate 20s linear infinite; }
        @keyframes rotate { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        h1 { font-size: 2.5em; margin-bottom: 10px; text-shadow: 0 2px 4px rgba(0,0,0,0.3); position: relative; z-index: 1; }
        .role-badge { background: linear-gradient(45deg, #ffd700, #ffed4e); color: #1a1a1a; padding: 12px 30px; border-radius: 30px; display: inline-block; margin-bottom: 20px; font-weight: bold; font-size: 1.1em; box-shadow: 0 5px 15px rgba(255,215,0,0.4); position: relative; z-index: 1; }
        .stats { display: flex; justify-content: space-around; margin: 40px 0; position: relative; z-index: 1; }
        .stat-card { background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); padding: 25px; border-radius: 15px; flex: 1; margin: 0 15px; border: 1px solid rgba(255,255,255,0.3); }
        .stat-card h3 { font-size: 2em; margin-bottom: 5px; }
        .features { text-align: left; margin: 40px 0; position: relative; z-index: 1; }
        .feature { background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding: 20px; margin-bottom: 15px; border-radius: 12px; border-left: 5px solid #ffd700; border: 1px solid rgba(255,255,255,0.2); }
        .logout-btn { background: linear-gradient(45deg, #ff416c, #ff4b2b); color: white; padding: 15px 40px; border: none; border-radius: 30px; cursor: pointer; font-size: 18px; font-weight: bold; text-decoration: none; display: inline-block; transition: 0.3s; box-shadow: 0 5px 15px rgba(255,65,108,0.4); position: relative; z-index: 1; }
        .logout-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(255,65,108,0.6); }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>👑 VVIP Dashboard</h1>
        <div class="role-badge">VVIP Elite Member</div>
        <p>Selamat datang <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>
        
        <div class="stats">
            <div class="stat-card">
                <h3>1</h3>
                <p>VVIP Aktif</p>
            </div>
            <div class="stat-card">
                <h3>∞</h3>
                <p>Keistimewaan</p>
            </div>
            <div class="stat-card">
                <h3>24/7</h3>
                <p>Butler Service</p>
            </div>
        </div>
        
        <div class="features">
            <h3>🎩 Hak Istimewa VVIP:</h3>
            <div class="feature">👑 Akses Tak Terbatas Selamanya</div>
            <div class="feature">✈️ Layanan Butler Pribadi</div>
            <div class="feature">💎 Event Eksklusif Privat</div>
            <div class="feature">🎁 Hadiah Ultra Premium</div>
            <div class="feature">🔮 Prediksi Masa Depan</div>
        </div>
        
        <a href="logout.php" class="logout-btn">Keluar Kerajaan</a>
    </div>
</body>
</html>

