<?php

/* This block of code is checking if a form with the name 'submit-lead' has been submitted via POST
method. If the form has been submitted, it retrieves the values of 'lead_name', 'lead_email', and
'lead_phone' from the POST data. It then calls a function `add_lead_record()` with these values as
parameters. */
if (isset($_POST['submit-lead'])) {
  $lead_name = $_POST['lead_name'];
  $lead_email = $_POST['lead_email'];
  $lead_phone = $_POST['lead_phone'];

  if (add_lead_record($lead_name, $lead_email, $lead_phone)) {
    echo "Record saved successfully";
  } else {
    echo "Record not saved successfully";
  }
}

/* This block of code is checking if a form with the name 'delete-record' has been submitted via POST
method. If the form has been submitted, it retrieves the value of 'lead_id' from the POST data. It
then calls a function `delete_lead()` with the 'lead_id' value as a parameter. If the deletion
operation is successful, it will echo "Record deleted successfully"; otherwise, it will echo "Record
not deleted successfully". */
if (isset($_POST['delete-record'])) {
  $id = $_POST['lead_id'];

  if (delete_lead($id)) {
    echo "Record deleted successfully";
  } else {
    echo "Record not deleted successfully";
  }
}


/* The code block you provided is checking if a form with the name 'update-lead' has been submitted via
POST method. If the form has been submitted, it retrieves the values of 'lead_id', 'lead_name',
'lead_email', and 'lead_phone' from the POST data. */
if (isset($_POST['update-lead'])) {
  $id = (int) $_POST['lead_id'];
  $lead_name = $_POST['lead_name'];
  $lead_email = $_POST['lead_email'];
  $lead_phone = $_POST['lead_phone'];


  if (update_lead_information($id, $lead_name, $lead_email, $lead_phone)) {
    echo "Record updated successfully";
  } else {
    echo "Record not updated successfully";
  }

}