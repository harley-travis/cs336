<?php include '../includes/header.php'; ?>
<div class="container add-card">
    <?php include '../includes/main-nav.php'; ?>
    <h1>Edit A Property</h1>
    <p>Edit the form below and click 'Save Changes' when you are finished.</p>
    <form action="../controller/index.php" method="post" id="edit_card_form">
        <div class="form-group">
            <input type="hidden" name="action" value="edit_card">
        </div>
        <div class="form-group">
            <label>First Name</label><br />
            <input type="text" name="tenantFirstName" value="<?php echo $card['tenantFirstName']; ?>">
        </div>
        <div class="form-group">
            <label>Last Name</label><br />
            <input type="text" name="tenantLastName" value="<?php echo $card['tenantLastName']; ?>">
        </div>
        <div class="form-group">
            <label>Email</label><br />
            <input type="text" name="tenantEmail" value="<?php echo $card['tenantEmail']; ?>">
        </div>
        <div class="form-group">
            <label>Phone</label><br />
            <input type="text" name="tenantPhone" value="<?php echo $card['tenantPhone']; ?>">
        </div>
        <div class="form-group">
            <label>Address</label><br />
            <input type="text" name="tenantAddress" value="<?php echo $card['tenantAddress']; ?>">
        </div>
        <div class="form-group">
            <label>Lease Start Date</label><br />
            <input type="text" name="startDate" value="<?php echo $card['startDate']; ?>">
        </div>
        <div class="form-group">
            <label>Lease End Date</label><br />
            <input type="text" name="endDate" value="<?php echo $card['endDate']; ?>">
        </div>
        <input type="hidden" name="tenantID" value="<?php echo $card['tenantID']; ?>">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>
    </form>
</div><!-- add-card -->
<?php include '../includes/footer.php'; ?>

            