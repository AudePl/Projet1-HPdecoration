<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations de Contact</title>
</head>
<body>

<!------------------- Header -------------------->

    <?php include 'header.html';?>

<!------------------- Formulaire de contact -------------------->
<section class="contact-form">
    <h2>Formulaire de contact</h2>
    <form method = "" action = "">
        <label for="userFirstname">Votre prénom :</label>
        <input type="text" name="userFirstname" id="userFirstname"><br />
        <label for="userLastname">Votre nom :</label>
        <input type ="text" name="userLastname" id="userLastname"><br />
        <label for="userPhoneNumber">Numéro de téléphone :</label>
        <input type="tel" name="userPhoneNumber" id="userPhoneNumber"><br />
        <label for="userEmail">Adresse mail :</label>
        <input type="email" name="userEmail" id="userEmail"><br />
        <label for="subject">Raison de la prise de contact :</label><br />
        <select name="subject" id="subject">
            <option value="userChoice">-- Faites un choix --</option>
            <option value="firstContact">Premier contact</option>
            <option value="devis">Demande de devis personnalisé</option>
            <option value="scheduleAppointment">Prise de rendez-vous</option>
        </select><br />
        <label for="userMessage"></label><br />
        <textarea name="userMessage" placeholder="Votre message :" id="userMessage" rows="10" cols="50"></textarea><br />
        <input type="submit" value="Envoyer"><br />
    </form>
</section>

<!------------------- Coordonnées du showroom -------------------->
<section class="showroom-contact-information">
    <h2>Les coordonées du Showroom</h2>
    <p>14 & 16 rue Honoré Picon - 33100 Bordeaux <br />
        05. 56. 86. 17. 13 <br />
        contact@hpdecoration.com<br />
    </p>
</section>

<!--l'équipe-->
<section class="team-description">
    <h2>Présentation de notre équipe</h2>
    <p class="team-introduction">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p
    <img class="team-picture-1" src="" alt="team-picture-1">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <img class="team-picture-2" src="" alt="team-picture-2">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</section>
<!------------------- footer -------------------->
<?php include 'footer.html';?>
</body>
</html>