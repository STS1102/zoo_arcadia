<?php include 'header.php'; ?>

<main>
    <section class="contact-hero">
        <div class="contact-hero-text">
            <h1>Contactez-nous</h1>
            <p>Nous sommes là pour répondre à vos questions et écouter vos suggestions.</p>
        </div>
        <img src="../public/images/contact.jpg" alt="Contact" class="contact-hero-image">
    </section>

    <section class="contact-form-section">
        <h2>Formulaire de Contact</h2>
        <form class="contact-form" action="../controller/contactController.php" method="post">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Envoyer</button>
        </form>
    </section>

    <section class="contacts">
        <h2>Contacts :</h2>
        <div class="contacts-container">
            <div class="contact-item" id="phone-contact">
                <img src="../public/images/tel logo.jpg" alt="Téléphone" class="icon">
                <div class="contact-text">
                    <p><strong>Tel :</strong></p>
                    <p>123-456-7890</p>
                </div>
            </div>
            <div class="contact-item" id="address-contact">
                <img src="../public/images/adresse logo.jpg" alt="Adresse" class="icon">
                <div class="contact-text">
                    <p><strong>Adresse :</strong></p>
                    <p>123 chemin des Forêts, Brocéliande, France</p>
                </div>
            </div>
            <div class="contact-item" id="email-contact">
                <img src="../public/images/logo mail.jpg" alt="Email" class="icon">
                <div class="contact-text">
                    <p><strong>Email :</strong></p>
                    <p>info@arcadiazoo.com</p>
                </div>
            </div>
        </div>

        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.948104087263!2d-73.9934390845924!3d40.73082397932813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zTWFuaGF0dGFu!5e0!3m2!1sen!2sus!4v1603325076963!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
