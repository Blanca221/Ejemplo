<html lang="ca">

<head>
    <title>Inicio de sesion - TDIW</title>
</head>

<body>

    <div class="container">
        <form action="?action=inicio-session" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" maxlength="20" minlength="4" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Submit">
        </form>

</body>

</html>