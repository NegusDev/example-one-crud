<?php
// IMPORTING functions.php FILE IN INDEX.PHP
include_once "model.php";
include_once "controller.php";

/* The line ` = ['id'];` is retrieving the value of the 'id' parameter from the URL query
string. In PHP, `` is a superglobal array that is used to collect form data after submitting an
HTML form with the method="get". */
$id = $_GET['id'];


/* The line ` = get_lead_by_id();` is calling a function named `get_lead_by_id` and passing
the `` variable as an argument to this function. This function is likely defined in the
`model.php` file that you have included at the beginning of your PHP script. */
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
    <!-- /* The `<input type="hidden" name="lead_id" value="<?= ['id'] ?>">` line in the HTML form
    creates a hidden input field named "lead_id" with the value set to the ID of the lead retrieved
    from the database. */ -->
    <input type="hidden" name="lead_id" value="<?= $details['id'] ?>">
    <div>
      <label for="">Leads Name</label>
     <!-- /* The line `<input type="text" name="lead_name" value="<?= ['name'] ?>">` in the HTML
     form is creating a text input field for the user to input or update the lead's name. */ -->
      <input type="text" name="lead_name" value="<?= $details['name'] ?>">
    </div>
    <div>
      <label for="">Leads Email</label>
     <!-- /* The line `<input type="email" name="lead_email" value="<?= ['email'] ?>">` in the HTML
     form is creating an input field for the user to input or update the lead's email address. */ -->
      <input type="email" name="lead_email" value="<?= $details['email'] ?>">
    </div>

    <div>
      <label for="">Leads Phone</label>
     <!-- /* The line `<input type="tel" name="lead_phone" value="<?= ['phone'] ?>">` in the HTML
     form is creating an input field for the user to input or update the lead's phone number. */
      <input type="tel" name="lead_phone" value="<?= $details['phone'] ?>"> -->
    </div>

    <!-- /* The `<button type="submit" name="update-lead">Update Record</button>` code in the HTML form is
    creating a button element that, when clicked by the user, will submit the form data to the
    server. */ -->
    <button type="submit" name="update-lead">Update Record</button>
  </form>
</body>

</html>