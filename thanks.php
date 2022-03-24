<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tanks for your message!</title>
  <meta name="description" content="description" />
  <meta name="author" content="author" />
  <meta name="keywords" content="keywords" />
  <!-- <link rel="stylesheet" href="./stylesheet.css" type="text/css" /> -->
  <meta charset="UTF-8" />
</head>

<body>

  <div>
    <p><?php echo 'Merci ' . $_POST['user_firstname'] . $_POST['user_lastname'] . ' de nous avoir contacté à propos de "' . $_POST['message-topic'] . '".' ?></p>
  </div>

  <div>
    <p><?php echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_mail'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :'  ?></p>
  </div>

  <div>
    <p><?php echo $_POST['user_message']; ?></p>
  </div>

</body>

</html>
