<?php include '../includes/header.php'; ?>
    <div class="container content-wrapper">
        <img src="<?php echo ROOT; ?>/img/logo.png" alt="Renter Cafe" class="img-logo">
        <h1>Customer Login</h1> 
        <p>Please fill out the form below to login</p>
        <p>Login with test@test.com and test as the password</p>
        <form action="../controller/index.php" method="post" id="customer_login">
            <div class="form-group">
                <input type="hidden" name="action" value="customer_login_form">
            </div>
            <div class="form-group">
                <label>Email</label><br />
                <input type="text" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <label>Password</label><br />
                <input type="text" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div><!-- container -->
<?php include '../includes/footer.php'; ?>