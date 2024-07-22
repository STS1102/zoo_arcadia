<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo d'Arcadie</title>
  <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>

  <?php include 'header.php'; ?>

  <main>
    <section class="hero">
      <video autoplay muted loop class="hero-video">
        <source src="/public/images/ARCADIA.mp4" type="video/mp4">
      </video>
    </section>

    <section class="info-sections" id="info-sections">
      <div class="info-item" onclick="showMoreInfo('habitats')">
        <img src="/public/images/habitats.jpg" alt="Habitats">
        <div class="info-text">
          <h3>Habitats</h3>
          <p>Explorez une variété d'habitats, des savanes arides aux jungles luxuriantes et aux marais mystérieux, chacun abritant une faune unique et fascinante. Chaque habitat est conçu pour reproduire les conditions naturelles et offrir un foyer accueillant à nos animaux.</p>
        </div>
      </div>
      <div class="info-item" onclick="showMoreInfo('services')">
        <img src="/public/images/conservation.jpg" alt="Efforts de conservation">
        <div class="info-text">
          <h3>Efforts de conservation</h3>
          <p>Découvrez nos initiatives de conservation visant à protéger et préserver les espèces menacées. Nous travaillons en étroite collaboration avec des organisations internationales pour garantir un avenir durable pour la faune et les habitats naturels.</p>
        </div>
      </div>
      <div class="info-item" onclick="showMoreInfo('services')">
        <img src="/public/images/prestation.jpg" alt="Prestations de service">
        <div class="info-text">
          <h3>Prestations de service</h3>
          <p>Profitez d'une gamme complète de services, incluant des visites guidées éducatives, des aires de jeux pour enfants et des ateliers interactifs. Nos services sont conçus pour offrir une expérience enrichissante et mémorable pour toute la famille.</p>
        </div>
      </div>
    </section>
    
    <section class="testimonials">
      <h2>Avis des visiteurs</h2>
      <div class="testimonials-container">
        <div class="testimonial">
          <p><strong>John Doe</strong></p>
          <p class="avis">Une expérience merveilleuse, très instructive et les enfants ont adoré voir les animaux !</p>
        </div>
        <div class="testimonial">
          <p><strong>Emilie Smith</strong></p>
          <p class="avis">Zoo magnifiquement entretenu avec un personnel sympathique. Je recommande vivement de visiter !</p>
        </div>
        <div class="testimonial">
          <p><strong>Robert Brun</strong></p>
          <p class="avis">Super journée! Les habitats des animaux sont impressionnants et bien conçus.</p>
        </div>
      </div>
    </section>

    <section class="dynamic-content">
      <h2>Nos Animaux</h2>
      <div class="dynamic-videos">
        <video autoplay muted loop width="100%" height="340">
          <source src="/public/images/arriere plan.mp4" type="video/mp4">
        </video>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script src="/public/js/scripts.js"></script>
</body>
</html>
