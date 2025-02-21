<?php
// IMPORTING functions.php FILE IN INDEX.PHP
include_once "model.php";
include_once "controller.php";


/* The line ` = get_all_leads();` is calling a function named `get_all_leads()` to retrieve all
the lead records from the database. This function is likely defined in the `model.php` file that has
been included at the beginning of the script. The function fetches the lead data and assigns it to
the variable ``, which is then used to iterate over each lead and display their information on
the webpage. */
$leads = get_all_leads();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<!-- /* The HTML form you provided is used for submitting lead records. -->
  <form method="POST">
    <div >
      <label for="">Leads Name</label>
      <input type="text" name="lead_name">
    </div>
    <div >
      <label for="">Leads Email</label>
      <input type="email" name="lead_email">
    </div>

    <div >
      <label for="">Leads Phone</label>
      <input type="tel" name="lead_phone">
    </div>

    <button type="submit" name="submit-lead">Submit Record</button>
  </form>



  <h1>This is the leads Records</h1>
<!-- /* This PHP code block is iterating over an array of leads and displaying information for each lead in
a structured format. Here's a breakdown of what each part of the code is doing: */ -->
  <?php foreach ($leads as $lead) : ?>
    <div class="information-container">
      <ul>
        <li>ID: <?= $lead['id'] ?></li>
        <li>Name: <?= $lead['name'] ?></li>
        <li>Email: <?= $lead['email'] ?></li>
        <li>Date of Creation: <?= $lead['created_at'] ?></li>
      </ul>
<!-- /* This HTML form is used to delete a lead record.  -->
      <form method="POST">
        <input type="hidden" name="lead_id" value="<?= $lead['id'] ?>">
        <button type="submit" name="delete-record">Delete Record</button>
      </form>
      <!-- /* The line `<a href="edit-lead.php?id=<?= ['id'] ?>">Edit Record</a>` is creating a
      hyperlink that directs the user to an "edit-lead.php" page with a query parameter "id" set to
      the specific lead's ID. This link allows the user to edit the details of a particular lead
      record by passing the ID of that lead as a parameter to the edit page. */ -->
      <a href="edit-lead.php?id=<?= $lead['id'] ?>">Edit Record</a>
    </div>
  <?php endforeach;  ?>


</body>

</html>