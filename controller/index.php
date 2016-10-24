<?php 
// session
$lifetime = 60 * 60 * 24 * 24; // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

// connect to db
require('../model/database.php');
require('../model/customer_db.php');
require('../model/card_db.php');

// variables
// action is your trigger of actions
$action = filter_input(INPUT_POST, 'action');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// if there is no action, set action of display list_products
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_cards';
    }
}

if($action == 'customer_login_form'){
    if(!is_valid_address($email)){
        $error = "Customer Login Form: Invalid entry, please try again.";
        include('../errors/error.php');  
    }
    else{  
        $_SESSION['username'] = $email;
        //if the session is set, then use this variable
        $userIn = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        $welcomeUser = $_SESSION['username'];
        $tenants = get_tenant();
        //print_r($_REQUEST);
        include('../view/view-card.php');
    }
}else if($action == 'register_customer'){
    $customerFirstName = filter_input(INPUT_POST, 'customerFirstName');
    $customerLastName = filter_input(INPUT_POST, 'customerLastName');
    $userEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $userPassword = filter_input(INPUT_POST, 'password');
    $userVerifyPassword = filter_input(INPUT_POST, 'verifyPassword');
    
    if(!$userPassword == $userVerifyPassword){
        $error = "There was an error creating your account. Please try again";
        include('../errors/error.php');  
    }else{
        add_user($customerFirstName, $customerLastName, $userEmail, $userVerifyPassword);
        include('../view/account-created.php');
    }
    
}else if($action == 'add_card'){
    //add card variables to database
    $tenantFirstName = filter_input(INPUT_POST, 'tenantFirstName');
    $tenantLastName = filter_input(INPUT_POST, 'tenantLastName');
    $tenantEmail = filter_input(INPUT_POST, 'tenantEmail', FILTER_VALIDATE_EMAIL);
    $tenantPhone = filter_input(INPUT_POST, 'tenantPhone');
    $tenantAddress = filter_input(INPUT_POST, 'tenantAddress');
    $startDate = filter_input(INPUT_POST, 'startDate');
    $endDate = filter_input(INPUT_POST, 'endDate');
        
    //verify information is correct
    if($tenantFirstName == NULL  || $tenantFirstName == FALSE  ||
       $tenantLastName == NULL   || $tenantLastName == FALSE   ||
       $tenantEmail == NULL      || $tenantEmail == FALSE      ||
       $tenantPhone == NULL      || $tenantPhone == FALSE      ||
       $tenantAddress == NULL    || $tenantAddress == FALSE    ||
       $startDate == NULL        || $startDate == FALSE        ||
       $endDate == NULL          || $endDate == FALSE){
        
        $error = "Add Card: Please fill out all fields in the form and try again. <a href='../view/add-card.php'>Go Back</a>";
        include('../errors/error.php');  
    }
    else{
        add_card($tenantFirstName, $tenantLastName, $tenantEmail, $tenantPhone, $tenantAddress, $startDate, $endDate);
        $tenants = get_tenant();
        include('../view/view-card.php');
    }
}else if($action == 'edit_card_form'){
    // gets data from edit form from view-card page
    // passes data to edit-card.php 
    // send in the tenantID
    $tenantID = $_POST['tenantID'];
    // get cards
    $card = get_card($tenantID);
    // include edit-card.php
    include('../view/edit-card.php');
    
}else if($action == 'edit_card'){
    // edit_card is pulling the data from edit-card.php
    //add card variables to database
    $tenantID = filter_input(INPUT_POST, 'tenantID');
    $tenantFirstName = filter_input(INPUT_POST, 'tenantFirstName');
    $tenantLastName = filter_input(INPUT_POST, 'tenantLastName');
    $tenantEmail = filter_input(INPUT_POST, 'tenantEmail', FILTER_VALIDATE_EMAIL);
    $tenantPhone = filter_input(INPUT_POST, 'tenantPhone');
    $tenantAddress = filter_input(INPUT_POST, 'tenantAddress');
    $startDate = filter_input(INPUT_POST, 'startDate');
    $endDate = filter_input(INPUT_POST, 'endDate');
        
    //verify information is correct
    if($tenantFirstName == NULL  || $tenantFirstName == FALSE  ||
       $tenantLastName == NULL   || $tenantLastName == FALSE   ||
       $tenantEmail == NULL      || $tenantEmail == FALSE      ||
       $tenantPhone == NULL      || $tenantPhone == FALSE      ||
       $tenantAddress == NULL    || $tenantAddress == FALSE    ||
       $startDate == NULL        || $startDate == FALSE        ||
       $endDate == NULL          || $endDate == FALSE          ||
       $tenantID == NULL         || $tenantID == FALSE){
        
        $error = "EDIT CARD: There was an error processing your reqeust. Please try again.";
        include('../errors/error.php');  
    }
    else{
        edit_card($tenantFirstName, $tenantLastName, $tenantEmail, $tenantPhone, $tenantAddress, $startDate, $endDate, $tenantID);
        $tenants = get_tenant();
        include('../view/view-card.php');
    }
}else if($action == 'delete_card'){
    // get the data from the from on the view-card.php page
    $tenantID = $_POST['tenantID'];
        
    if ($tenantID == NULL || $tenantID == FALSE) {
        $error = "Missing or incorrect tenantID.";
        include('../errors/error.php');
    } else { 
        delete_card($tenantID);
        $tenants = get_tenant();
        include('../view/view-card.php');
    }
}
?>