<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thanks for your message!</title>
  <meta name="description" content="description" />
  <meta name="author" content="author" />
  <meta name="keywords" content="keywords" />
  <!-- <link rel="stylesheet" href="./stylesheet.css" type="text/css" /> -->
  <meta charset="UTF-8" />
</head>

<body>

  <?php
  // Form validation
  $firstname = $lastname = $email = $phone = $messageTopic = $message = '';
  $firstnameErr = $lastnameErr = $emailErr = $phoneErr = $messageTopicErr = $messageErr = '';

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  };

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user_firstname'])) {
      $firstnameErr = 'First name is required';
    } else {
      $firstname = test_input($_POST['user_firstname']);
    }

    if (empty($_POST['user_lastname'])) {
      $lastnameErr = 'Last name is required';
    } else {
      $lastname = test_input($_POST['user_lastname']);
    }

    if (empty($_POST['user_mail'])) {
      $emailErr = 'E-mail is required';
    } else {
      $email = test_input($_POST['user_mail']);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST['user_phone'])) {
      $phoneErr = 'Phone number is required';
    } else {
      $phone = test_input($_POST['user_phone']);
    }

    if (empty($_POST['message-topic'])) {
      $messageTopicErr = 'Choosing a topic is required';
    } else {
      $messageTopic = test_input($_POST['message-topic']);
    }

    if (empty($_POST['user_message'])) {
      $messageErr = 'Message is required';
    } else {
      $message = test_input($_POST['user_message']);
    }
  }

  ?>

  <!-- MESSAGES : thank you or error -->

  <?php

  if (isset($firstnameErr)) {
    echo '<br/>' . $firstnameErr;
  }

  if (isset($lastnameErr)) {
    echo '<br/>' . $lastnameErr;
  }

  if (isset($emailErr)) {
    echo '<br/>' . $emailErr;
  }

  if (isset($phoneErr)) {
    echo '<br/>' . $phoneErr;
  }

  if (isset($messageTopicErr)) {
    echo '<br/>' . $messageTopicErr;
  }

  if (isset($messageErr)) {
    echo '<br/>' . $messageErr;
  }

if ($firstnameErr == null && $lastnameErr == null && $emailErr == null && $phoneErr == null && $messageTopicErr == null && $messageErr == null) {
  echo '<div>' . '<p>' . 'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de "' . $_POST['message-topic'] . '".' . '</p>' . '</div>' . PHP_EOL . '<div>' . '<p>' . 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :' . '</p>' . '</div>' . PHP_EOL . '<div>' . '<p>' . $_POST['user_message'] . '</p>' . '</div>';
}

  ?>

</body>

</html>