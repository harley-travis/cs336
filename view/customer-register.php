<?php include '../includes/header.php'; ?>
    <div class="container content-wrapper">
        <img src="<?php echo ROOT; ?>/img/logo.png" alt="Renter Cafe" class="img-logo">
        <h1>Create Account</h1> 
        <p>Please fill out the form below to create an account</p>
        
        <form action="../controller/index.php" method="post" id="register_customer">
            <div class="form-group">
                <input type="hidden" name="action" value="register_customer">
            </div>
            <div class="form-group">
                <label>First Name</label><br />
                <input type="text" name="customerFirstName" placeholder="First Name">
            </div>
            <div class="form-group">
                <label>Last Name</label><br />
                <input type="text" name="customerLastName" placeholder="Last Name">
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
                <label>Verify Password</label><br />
                <input type="text" name="verifyPassword" placeholder="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div><!-- container -->
<?php include '../includes/footer.php'; ?>