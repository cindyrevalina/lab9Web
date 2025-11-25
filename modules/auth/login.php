<?php
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Simple authentication (bisa diganti dengan database)
    if ($username === 'cindy' && $password === 'cindy123') {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] ='Cindy';
        $_SESSION['role'] = 'Administrator';
        header('Location: index.php?page=dashboard');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<div class="login-page">
    <div class="login-container">
        <div class="login-header">
            <h2>Sistem Data Barang</h2>
            <p>silahkan login ke akun anda</p>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" class="login-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Masukkan username">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required 
                       placeholder="Masukkan password">
            </div>
            
            <button type="submit" name="login" class="login-btn">Login</button>
        </form>
    </div>
</div>