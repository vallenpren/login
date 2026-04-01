<?php
session_start();

// Hardcoded users: username => role
$users = [
    'admin_mimin' => 'admin',
    'user_budi' => 'user',
    'vip_sultan' => 'vip',
    'vvip_raja' => 'vvip'
];

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    if (isset($users[$username]) && $password === '12345') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $users[$username];
        
        // Redirect based on role
        switch ($_SESSION['role']) {
            case 'admin':
                header('Location: admin.php');
                break;
            case 'user':
                header('Location: user.php');
                break;
            case 'vip':
                header('Location: vip.php');
                break;
            case 'vvip':
                header('Location: vvip.php');
                break;
            default:
                header('Location: index.html?error=Role tidak dikenal');
        }
        exit();
    } else {
        header('Location: index.html?error=Username atau password salah!');
        exit();
    }
} else {
    header('Location: index.html');
    exit();
}
?>

