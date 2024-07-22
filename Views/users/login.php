<!-- src/views/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Zoo d'Arcadia</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php include 'partials/header.php'; ?>
    <section class="login-form">
        <h2>Connexion</h2>
        <form action="/login" method="post">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn">Se connecter</button>
        </form>
    </section>
    <?php include 'partials/footer.php'; ?>
</body>
</html>
