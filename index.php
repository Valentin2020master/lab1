<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>RandomPassword</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="style.css">
</head>
<body>
<div class="container">
    <form method="POST" class="form-signin" action="rezultat.php">
        <h2>Generare passwords</h2>
        <p>
            <input type="number" name="lenght" placeholder="Lungimea parolei" required>
        </p>
        <p>
            <input type="number" name="count" placeholder="Numarul de parole generate" required>
        </p>
        <button class="btn-primary " type="submit">Trimite</button>
    </form>

</div>
</body>
</html>
