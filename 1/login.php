<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <body>
        <?php require_once "view/header.php"; ?>

        <h1>Anmeldung</h1>
        <p>Bitte füllen Sie die nachfolgenden Eingabefelder aus:</p>
        <form action="formular_auswertung.php" method='POST'></form>

            <p>Vorname: <input type="text" name=vorname></p>
            <p>Nachname: <input type="text" name=nachname></p>
            <p>Wohnort: <input type="text" name=ort></p>
            <p><input type="submit" value="Abschicken"><input type="reset" value="Zurücksetzen"></p>
        </form> 
    </body>
</html>