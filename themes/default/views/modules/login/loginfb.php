
    <h1>Login with Facebook</h1>

    <?php if ($data['user_profile']): ?>
        
		<?php echo $data['user_profile']['name'];?> 
        <a href="<?= $login_url ?>">Login</a>
        <a href="<?= $logout_url ?>">Logout</a>
    <?php else: ?>
        <h2>Welcome, please login below</h2>
        <a href="<?= $login_url ?>">Login</a>
    <?php endif; ?>
