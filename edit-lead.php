<?php
// IMPORTING functions.php FILE IN INDEX.PHP
include_once "model.php";
include_once "controller.php";

$id = $_GET['id'];


$details = get_lead_by_id($id);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDIT Information for <?= $details['name'] ?></title>
</head>

<body>

  <form method="POST">
    <input type="hidden" name="lead_id" value="<?= $details['id'] ?>">
    <div>
      <label for="">Leads Name</label>
      <input type="text" name="lead_name" value="<?= $details['name'] ?>">
    </div>
    <div>
      <label for="">Leads Email</label>
      <input type="email" name="lead_email" value="<?= $details['email'] ?>">
    </div>

    <div>
      <label for="">Leads Phone</label>
      <input type="tel" name="lead_phone" value="<?= $details['phone'] ?>">
    </div>

    <button type="submit" name="update-lead">Update Record</button>
  </form>
</body>

</html>