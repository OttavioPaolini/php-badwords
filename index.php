<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action_page.php" method="POST">
    <!-- chiedo all'utente del testo -->
    <h1>Scrivi del testo</h1>
        <label for="text"></label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <!-- chiedo delle parole da censurare -->
    <h2>Scrivi le parole che vorresti censurare</h2>
        <label for="censored"></label>
        <textarea name="censored" id="censored" cols="30" rows="10"></textarea>
        <hr>
    <button type="submit">Calcola</button>
    </form>
</body>
</html>