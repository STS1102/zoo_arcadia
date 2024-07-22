<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - Zoo d'Arcadie</title>
  <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>

  <?php include 'partials/header.php'; ?>

  <main>
    <section class="services-hero">
      <div class="services-hero-text">
        <p class="highlight">Améliorez votre visite avec nos offres exclusives</p>
        <h1>Découvrez nos services</h1>
       <a href="/views/reservation.php"><button >Réservez maintenant</button></a>
      </div>
      <img src="/public/images/habitat.webp" alt="Service Image" class="services-hero-image">
    </section>

    <section class="services-details">
      <div class="services-item">
        <img src="/public/images/visite.jpg" alt="Visite guidée des habitats">
        <div class="services-item-text">
          <h2>Visite guidée des habitats</h2>
          <p>Rejoignez nos guides experts pour une visite immersive de nos habitats. Découvrez les secrets de la savane, de la jungle et des marais, et apprenez-en plus sur nos animaux.</p>
        </div>
      </div>

      <div class="services-item">
        <div class="services-item-text">
          <h2>Restauration</h2>
          <p>Profitez de notre service de restauration avec une variété de plats et de boissons pour tous les goûts. Des repas sains et équilibrés sont disponibles pour toute la famille.</p>
        </div>
        <img src="/public/images/restaurant.jpg" alt="Restauration">
      </div>

      <div class="services-item">
        <img src="/public/images/train.jpg" alt="Visite en petit train">
        <div class="services-item-text">
          <h2>Visite en petit train</h2>
          <p>Faites un tour du zoo à bord de notre petit train. Une manière confortable et amusante de découvrir tous les habitats et de profiter d'une vue d'ensemble du parc.</p>
        </div>
      </div>

      <div class="services-item">
        <div class="services-item-text">
          <h2>Ateliers éducatifs</h2>
          <p>Participez à nos ateliers éducatifs conçus spécialement pour les enfants. Des activités interactives et ludiques pour en apprendre davantage sur la faune et la flore.</p>
        </div>
        <img src="/public/images/atelier.jpg" alt="Ateliers éducatifs">
      </div>

      <div class="services-item">
        <img src="/public/images/animalier.jpg" alt="Spectacles animaliers">
        <div class="services-item-text">
          <h2>Spectacles animaliers</h2>
          <p>Assistez à nos spectacles animaliers quotidiens. Voyez nos animaux en action et apprenez-en plus sur leurs comportements naturels et leurs habitats.</p>
        </div>
      </div>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>

  <script src="/public/js/scripts.js"></script>
</body>
</html>
