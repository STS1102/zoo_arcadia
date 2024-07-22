<?php include 'header.php'; ?>

<main>
    <section class="connexion-hero">
        <div class="connexion-hero-text">
            <h1>Connexion</h1>
            <p>Veuillez vous connecter pour accéder à votre compte.</p>
        </div>
        <img src="../public/images/connexion.jpg" alt="Connexion" class="connexion-hero-image">
    </section>

    <section class="connexion-form-section">
        <h2>Formulaire de Connexion</h2>
        <form class="connexion-form" action="../controller/loginController.php" method="post">
            <label for="role">Vous êtes :</label>
            <select id="role" name="role" required>
                <option value="veterinaire">Vétérinaire</option>
                <option value="employe">Employé</option>
                <option value="administrateur">Administrateur</option>
            </select>

            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Connexion</button>
        </form>
    </section>
</main>

<?php include 'footer.php'; ?>
