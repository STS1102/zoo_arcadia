<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation - Zoo d'Arcadie</title>
  <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>

  <?php include 'partials/header.php'; ?>

  <main>
    <section class="reservation-hero">
      <div class="reservation-hero-text">
        <h1>Réservez votre visite</h1>
        <p>Planifiez votre visite au Zoo d'Arcadie et vivez une expérience inoubliable avec nos animaux.</p>
      </div>
      <img src="/public/images/reservation.jpg" alt="Réservation" class="reservation-hero-image">
    </section>

    <section class="reservation-form-section">
      <h2>Formulaire de Réservation</h2>
      <form class="reservation-form" action="mailto:reservations@arcadiazoo.com" method="post" enctype="text/plain">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="date">Date de visite :</label>
        <input type="date" id="date" name="date" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Réserver</button>
      </form>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>

  <script src="/public/js/scripts.js"></script>
</body>
</html>
