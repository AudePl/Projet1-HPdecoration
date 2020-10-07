<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations de Contact</title>
    <link rel="icon" type="image/png" href="images/Logohp-32.jpg"/>
    <link href="style.css" rel="stylesheet">

</head>
<body>

<!------------------- Header -------------------------->

<?php include 'header.html'; ?>

<!------------------- Formulaire de contact -------------------->
<section class="contact-form">
    <h1 class="title-part">Formulaire de contact</h1>
    <form class="form" method = "" action = "">
        <div class="contact-form">
            <div>
                <label class="form-label" for="userFirstname">Votre prénom :</label><br>
                <input class="form-input" type="text" name="userFirstname" id="userFirstname">
            </div>
            <div>
                <label class="form-label" for="userLastname">Votre nom :</label><br>
                <input class="form-input" type ="text" name="userLastname" id="userLastname">
            </div>
            <div>
                <label class="form-label" for="userPhoneNumber">Numéro de téléphone :</label><br>
                <input class="form-input" type="tel" name="userPhoneNumber" id="userPhoneNumber">
            </div>
            <div>
                <label class="form-label" for="userEmail">Adresse mail :</label><br>
                <input class="form-input" type="email" name="userEmail" id="userEmail">
            </div>
            <div>
                <label class="form-label" for="subject">Raison de la prise de contact :</label><br>
                <select class="form-input" name="subject" id="subject">
                    <option value="userChoice">-- Faites un choix --</option>
                    <option value="firstContact">Premier contact</option>
                    <option value="devis">Demande de devis personnalisé</option>
                    <option value="scheduleAppointment">Prise de rendez-vous</option>
                </select>
            </div>
            <div>
                <label class="form-label" for="userMessage"></label><br>
                <textarea class="form-input" name="userMessage" placeholder="Votre message :" id="userMessage" rows="10" cols="50"></textarea>
            </div>
        <input type="submit" value="Envoyer">
        </div>
    </form>
</section>
<!------------------- Coordonnées du showroom -------------------->
<section class="contact-coordonnees">
    <h2 class="title-part">Les coordonées du Showroom</h2>
    <p class="presentation-paragraph">14 & 16 rue Honoré Picon - 33100 Bordeaux <br/>
        05. 56. 86. 17. 13 <br/>
        contact@hpdecoration.com<br/>
    </p>
</section>

<!----------------------l'équipe------------------------>
<section class="team-description">
    <h2 class="title-part">Présentation de notre équipe</h2>
    <div class="index-vignette">
        <div class="vignette">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <img class="picture-collaborateur" src="images/man1-150.jpg" alt="photo collaborateur 1">
        </div>
        <div class="vignette">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <img class="picture-collaborateur" src="images/woman2-150.jpg" alt="photo collaboratrice 2">
        </div>
        <div class="vignette">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <img class="picture-collaborateur" src="images/man2-150.jpg" alt="photo collaborateur 2">
        </div>
    </div>
</section>
<!------------------- footer -------------------->
<?php include 'footer.html'; ?>
<script src="script.js"></script>
</body>
</html>