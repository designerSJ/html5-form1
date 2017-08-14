<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Boilerplate Code for Web Development</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form method="post" action="mailsuccess.php">
      <fieldset>
          <legend>Contact Us</legend>
          <input type="text" placeholder="Name" required id="name" name="name">
          <input type="email" placeholder="Email" id="email" required name="email">
          <select name="dropdown" id="dropdown">
              <option value="Question">Question</option>
              <option value="Suggestion">Suggestion</option>
              <option value="Other">Other</option>
          </select>
          <textarea name="message" rows="5" id="message" required placeholder="Type Your Message"></textarea>
      </fieldset>
      <span id="button">
          <input type="submit" value="Send" id="submit">
          <input type="reset" value="Reset" id="clear">
      </span>
  </form>
  <script src="js/app.js"></script>
</body>
</html>
