<?php

/* The line `include_once 'connection.php';` in the PHP script is including the contents of the
`connection.php` file into the current script. This allows the PHP script to access any functions,
variables, or database connections defined in the `connection.php` file. It is a way to reuse code
and maintain a separation of concerns by keeping database connection logic in a separate file for
better organization and reusability. */
include_once 'connection.php';


/**
 * The function `get_all_leads` retrieves all leads from a database table named `leads`.
 * 
 * The function `get_all_leads()` is returning all the rows from the "leads" table in the
 * database as an array of associative arrays. Each associative array represents a row in the table
 * with column names as keys and corresponding values.
 */
function get_all_leads(){
  global $pdo;
  $sql = "SELECT * FROM leads";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  return $statement->fetchAll();
}

/**
 * The function `add_lead_record` inserts a new lead record into a database table with the provided
 * name, email, and phone number.
 * 
 * @param $lead_name The `add_lead_record` function you provided is used to insert a new lead record
 * into a database table named `leads`. It takes three parameters: ``, ``, and
 * ``. The function prepares an SQL query to insert these values into the table along with
 * the current
 * @param $lead_email Lead email is a parameter that represents the email address of a lead or potential
 * customer. It is used as a way to contact and communicate with the lead for marketing or sales
 * purposes.
 * @param $lead_phone The `lead_phone` parameter in the `add_lead_record` function represents the phone
 * number of the lead that you want to add to the database. This parameter is used to store the phone
 * number of the lead in the `leads` table along with the lead's name, email, and the timestamp
 * 
 * The function `add_lead_record` returns `true` if the lead record was successfully added to
 * the database, and `false` otherwise.
 */
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

/**
 * The function `delete_lead` deletes a lead from a database using the lead's ID.
 * 
 * @param $lead_id The `delete_lead` function is used to delete a lead from the database based on the
 * provided lead ID. The function takes the lead ID as a parameter to identify the lead that needs to
 * be deleted.
 * 
 * The function `delete_lead` returns `true` if the deletion of the lead with the specified ID
 * is successful, and `false` otherwise.
 */
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

/**
 * The function `get_lead_by_id` retrieves a lead from the database based on the provided lead ID.
 * 
 * @param $lead_id The `get_lead_by_id` function is used to retrieve a lead record from a database table
 * named `leads` based on the provided `lead_id`. The function takes the `lead_id` as a parameter and
 * uses it to query the database for the corresponding lead record.
 * 
 * The function `get_lead_by_id` is returning the result of the SQL query that selects a lead
 * from the `leads` table based on the provided ``. The function fetches and returns the first
 * row of the result set as an associative array.
 */
function get_lead_by_id($lead_id){
  global $pdo;
  $sql = "SELECT * FROM leads WHERE id = :id";
  $statement = $pdo->prepare($sql);
  $statement->bindParam(':id', $lead_id);
  $statement->execute();
  return $statement->fetch();
}

/**
 * The function `update_lead_information` updates lead information in a database table using prepared
 * statements in PHP.
 * 
 * @param $id The `id` parameter in the `update_lead_information` function represents the unique
 * identifier of the lead whose information you want to update in the database. It is used in the SQL
 * query to specify which lead's information should be updated.
 * @param $lead_name The `lead_name` parameter in the `update_lead_information` function refers to the
 * name of the lead that you want to update in the database. This parameter is used to specify the new
 * name that you want to set for the lead identified by the provided ``.
 * @param $lead_email The `update_lead_information` function is designed to update lead information in a
 * database table. The parameters it takes are:
 * @param $lead_phone The `update_lead_information` function you provided is used to update lead
 * information in a database table. It takes four parameters: `` which is the ID of the lead to be
 * updated, `` which is the new name for the lead, `` which is the new
 * 
 * The function `update_lead_information` returns `true` if the SQL update query is executed
 * successfully, and `false` otherwise.
 */
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






