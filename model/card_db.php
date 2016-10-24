<?php

function get_tenant() {
    global $db;
    $query = 'SELECT * FROM tenant';
    $statement = $db->prepare($query);
    $statement->execute();
    $tenants = $statement->fetchAll();
    $statement->closeCursor();
    
    return $tenants;    
}

function get_card($tenantID){
    global $db;
    $query = 'SELECT * FROM tenant
              WHERE tenantID = :tenantID';
    $statement = $db->prepare($query);
    $statement->bindValue(":tenantID", $tenantID);
    $statement->execute();
    $card = $statement->fetch();
    $statement->closeCursor();
    return $card;
}

function add_card($tenantFirstName, $tenantLastName, $tenantEmail, $tenantPhone, $tenantAddress, $startDate, $endDate) {
    global $db;
    $query = 'INSERT INTO tenant
                (tenantFirstName, tenantLastName, tenantEmail, tenantPhone, tenantAddress, startDate, endDate)
                VALUES
                (:tenantFirstName, :tenantLastName, :tenantEmail, :tenantPhone, :tenantAddress, :startDate, :endDate)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':tenantFirstName', $tenantFirstName);
    $statement->bindValue(':tenantLastName', $tenantLastName);
    $statement->bindValue(':tenantEmail', $tenantEmail);
    $statement->bindValue(':tenantPhone', $tenantPhone);
    $statement->bindValue(':tenantAddress', $tenantAddress);
    $statement->bindValue(':startDate', $startDate);
    $statement->bindValue(':endDate', $endDate);
    $statement->execute();
    $statement->closeCursor();
} 

function edit_card($tenantFirstName, $tenantLastName, $tenantEmail, $tenantPhone, $tenantAddress, $startDate, $endDate, $tenantID) {
    global $db;
    $query = 'UPDATE tenant
              SET tenantFirstName = :tenantFirstName,
                  tenantLastName = :tenantLastName,
                  tenantEmail = :tenantEmail,
                  tenantPhone = :tenantPhone,
                  tenantAddress = :tenantAddress,
                  startDate = :startDate,
                  endDate = :endDate,
                  tenantID = :tenantID
              WHERE tenantID = :tenantID';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':tenantFirstName', $tenantFirstName);
    $statement->bindValue(':tenantLastName', $tenantLastName);
    $statement->bindValue(':tenantEmail', $tenantEmail);
    $statement->bindValue(':tenantPhone', $tenantPhone);
    $statement->bindValue(':tenantAddress', $tenantAddress);
    $statement->bindValue(':startDate', $startDate);
    $statement->bindValue(':endDate', $endDate);
    $statement->bindValue(':tenantID', $tenantID);
    $statement->execute();
    $statement->closeCursor();
} 

function delete_card($tenantID){
    global $db;
        $query = 'DELETE FROM tenant
                  WHERE tenantID = :tenantID';
        $statement = $db->prepare($query);
        $statement->bindValue(':tenantID', $tenantID);
        $statement->execute();
        $statement->closeCursor();
}