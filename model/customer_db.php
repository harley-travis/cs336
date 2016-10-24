<?php

function is_valid_address($email) {
    global $db;
    
    if(strlen($email) < 1)
        return false;
    
    $query = 'SELECT * FROM customers
              WHERE email="'.$email.'"';    
    $statement = $db->prepare($query);
    $statement->execute();    
    $email = $statement->fetch();
        
    if($statement->rowCount() < 1)
        return false; 
    
    return true;
} 

function get_customer() {
    global $db;    
    $query = 'SELECT * FROM customers';
    $statement = $db->prepare($query);
    $statement->execute();    
    $customer = $statement->fetchAll();       
    $statement->closeCursor();
    return $customer;     
} 

function add_user($customerFirstName, $customerLastName, $userEmail, $userVerifyPassword) {
    global $db;
    $query = 'INSERT INTO customers
                (firstName, lastName, email, password)
                VALUES
                (:firstName, :lastName, :email, :password)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':firstName', $customerFirstName);
    $statement->bindValue(':lastName', $customerLastName);
    $statement->bindValue(':email', $userEmail);
    $statement->bindValue(':password', $userVerifyPassword);
    $statement->execute();
    $statement->closeCursor();
} 

