<?php include '../includes/header.php'; ?>
<div class="container add-card">
    <?php include '../includes/main-nav.php'; ?>
    
    <h1>Add a new property</h1>
    <p>Please enter the tenants infomration below.</p>
    <form action="../controller/index.php" method="post" id="add_card">
        <div class="form-group">
            <input type="hidden" name="action" value="add_card">
        </div>
        <div class="form-group">
            <label>First Name</label><br />
            <input type="text" name="tenantFirstName" placeholder="First Name">
        </div>
        <div class="form-group">
            <label>Last Name</label><br />
            <input type="text" name="tenantLastName" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label>Email</label><br />
            <input type="text" name="tenantEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Phone</label><br />
            <input type="text" name="tenantPhone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label>Address</label><br />
            <input type="text" name="tenantAddress" placeholder="Address">
        </div>
        <div class="form-group">
            <label>Lease Start Date</label><br />
            <input type="text" name="startDate" placeholder="">
        </div>
        <div class="form-group">
            <label>Lease End Date</label><br />
            <input type="text" name="endDate" placeholder="">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Card">
        </div>
    </form>
</div><!-- add-card -->
<?php include '../includes/footer.php'; ?>