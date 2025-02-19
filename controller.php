<?php

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

if (isset($_POST['delete-record'])) {
  $id = $_POST['lead_id'];

  if (delete_lead($id)) {
    echo "Record deleted successfully";
  } else {
    echo "Record not deleted successfully";
  }
}


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