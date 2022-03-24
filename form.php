<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Page</title>
  <meta name="description" content="description" />
  <meta name="author" content="author" />
  <meta name="keywords" content="keywords" />
  <!-- <link rel="stylesheet" href="./stylesheet.css" type="text/css" /> -->
  <meta charset="UTF-8" />
</head>

<body>
  <form action="thanks.php" method="post">

    <div>
      <label for="firstname">Prénom :</label>
      <input type="text" id="firstname" name="user_firstname">
    </div>

    <div>
      <label for="lastname">Nom :</label>
      <input type="text" id="lastname" name="user_lastname">
    </div>

    <div>
      <label for="mail">e-mail&nbsp;:</label>
      <input type="email" id="mail" name="user_mail">
    </div>

    <div>
      <label for="phone">Phone&nbsp;:</label>
      <input type="phone" id="phone" name="user_phone">
    </div>

    <div>
      <label for="message-topic">Choose a topic:</label>
      <select id="message-topic" name="message-topic">
        <option value="Topic 1">Topic 1</option>
        <option value="Topic 2">Topic 2</option>
        <option value="Topic 3">Topic 3</option>
        <option value="Topic 4">Topic 4</option>
      </select>
    </div>

    <div>
      <label for="msg">Message :</label>
      <textarea id="msg" name="user_message"></textarea>
    </div>

    <div class="button">
      <button type="submit">Envoyer le message</button>
    </div>

  </form>


</body>

</html>
