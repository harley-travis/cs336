<?php include '../includes/header.php'; ?>
    <div class="container ll-wrapper">
        <?php include '../includes/main-nav.php'; ?>
        <div class="row view-heading-bar">
            <div class="col-md-6 col-xs-12 view-title">
                <h3>Properties</h3> 
            </div><!-- view title -->
            <div class="col-md-6 col-xs-12 add-new">
                <h4><b>Welcome</b>, <em><?php print_r($welcomeUser); ?></em></h4>
            </div><!-- add-new -->
        </div><!-- row -->
        <div class="card-container">
            <div class="col-md-5 col-xs-12 cards">
                <div class="cards-wrapper">
                   <div class="add-new-card">
                        <a href="../view/add-card.php" class="new-card">Add Card <span class="glyphicon glyp-plus glyphicon-plus-sign"></span></a>
                    </div>
                </div><!-- cards-wrapper -->
            </div><!-- cards -->
            <?php foreach ($tenants as $tenant) : ?>
                    <div class="col-md-5 col-xs-12 cards">
                        <div class="cards-wrapper">
                            <div class="row">
                                <div class="col-md-6 tenant-name">
                                    <h2><?php echo $tenant['tenantFirstName'] . " " . $tenant['tenantLastName']; ?></h2>
                                </div><!-- tenant-name -->
                                <div class="col-md-6 rentDue">
                                    <span class="rentDay">Rent Due: <?php echo $tenant['rentDue']; ?></span>
                                </div><!-- rentDue -->
                            </div><!-- row -->
                            <div class="row">
                                <div class="col-md-7 tenant-contactInfo">
                                    <span class="tenant-email"><span class="glyphicon glyp glyphicon-envelope"></span> <?php echo $tenant['tenantEmail']; ?></span><br />
                                    <span class="tenant-email"><span class="glyphicon glyp glyphicon-home"></span> <?php echo $tenant['tenantAddress']; ?></span><br />
                                    <span class="tenant-phone"><span class="glyphicon glyp glyphicon-phone"></span> <?php echo $tenant['tenantPhone']; ?></span>
                                </div><!-- tenant-contactInfo -->
                                <div class="col-md-5 tenant-options">
                                    <ul class="options">
                                        <li class="card-options">
                                            <form action="../controller/index.php" method="post">
                                                <input type="hidden" name="action" value="edit_card_form">
                                                <input type="hidden" name="tenantID" value="<?php echo $tenant['tenantID']; ?>">
                                                <input type="submit" class="btn btn-primary" value="Edit">
                                                <!-- SEND THE ID TO INDEX.PHP EDIT_CARD_FORM -->
                                            </form>
                                        </li>
                                        <li class="card-options">
                                            <form action="../controller/index.php" method="post">
                                                <input type="hidden" name="action" value="delete_card">
                                                <input type="hidden" name="tenantID" value="<?php echo $tenant['tenantID']; ?>">
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </form>
                                        </li>
                                    </ul>
                                </div><!-- tenant-options -->
                            </div><!-- row -->
                        </div><!-- cards-wrapper -->
                    </div><!-- cards -->
            <?php endforeach; ?>
        </div><!-- container -->
    </div><!-- container -->
<?php include '../includes/footer.php'; ?>
