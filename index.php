<?php
// IMPORTING functions.php FILE IN INDEX.PHP
include_once "model.php";
include_once "controller.php";


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
  <?php foreach ($leads as $lead) : ?>
    <div class="information-container">
      <ul>
        <li>ID: <?= $lead['id'] ?></li>
        <li>Name: <?= $lead['name'] ?></li>
        <li>Email: <?= $lead['email'] ?></li>
        <li>Date of Creation: <?= $lead['created_at'] ?></li>
      </ul>
      <form method="POST">
        <input type="hidden" name="lead_id" value="<?= $lead['id'] ?>">
        <button type="submit" name="delete-record">Delete Record</button>
      </form>
      <a href="edit-lead.php?id=<?= $lead['id'] ?>">Edit Record</a>
    </div>
  <?php endforeach;  ?>


</body>

</html>