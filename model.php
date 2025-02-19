<?php
// IMPORTING DATABASE CONNECTION FILE IN FUNCTIONS.PHP FILE
include_once 'connection.php';


function get_all_leads(){
  global $pdo;
  $sql = "SELECT * FROM leads";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  return $statement->fetchAll();
}

function add_lead_record($lead_name, $lead_email, $lead_phone) {
  global $pdo;
  $sql = "INSERT INTO leads(name, email, phone, created_at) VALUES(:lead_name, :lead_email, :lead_phone, NOW())";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':lead_name', $lead_name);
  $statement->bindParam(':lead_email', $lead_email);
  $statement->bindParam(':lead_phone', $lead_phone);
  if ($statement->execute()) {
    return true;
  }
  return false;
}

function delete_lead($lead_id) {
  global $pdo;
  $sql = "DELETE FROM leads WHERE id = :id ";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':id', $lead_id);
  if ($statement->execute()) {
    return true;
  }
  return false;
}

function get_lead_by_id($lead_id){
  global $pdo;
  $sql = "SELECT * FROM leads WHERE id = :id";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':id', $lead_id);
  $statement->execute();
  return $statement->fetch();
}

function update_lead_information($id, $lead_name, $lead_email, $lead_phone){
  global $pdo;
  $sql = "UPDATE leads SET name = :lead_name, email = :lead_email, phone = :lead_phone, updated_at = NOW() WHERE id = :id";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':id', $id);
  $statement->bindParam(':lead_name', $lead_name);
  $statement->bindParam(':lead_email', $lead_email);
  $statement->bindParam(':lead_phone', $lead_phone);
  if ($statement->execute()) {
    return true;
  }
  return false;
}






