<!DOCTYPE html>
<html lang="sv">
<head>
    <title>PHP - Struktur</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stilmall.css" type="text/css">
</head>
<body>
<div id="container">
    <header id="mainheader">
        <h1>PHP Struktur</h1>
        <body>
        <?php include 'includes/navbar.php'; ?>
    </header>

    <section id="leftcontent">
        <h2>Vänster kolumn</h2>
        <p>Här är sidornas huvudinnehåll.</p>
    </section><!-- /leftcontent -->

    <section id="answers">
        <ol>
            <li>Har du tidigare erfarenhet av utveckling med PHP?</li>
            <p>Nej!</p>
            <li>Hur har du valt att strukturera upp dina filer och kataloger?</li>
            <p>Jag har mina php inriktade filer i includes katalog och Kategorier är
                organiserade och strukturerade på ett sätt som gör att jag kan bearbeta effektivt.  </p>
            <li>Har du följt guiden, eller skapat på egen hand?</li>
            <p>Jag följde en guide.</p>
            <li>Har du gjort några förbättringar eller vidareutvecklingar av guiden (om du följt denna)?</li>
            <p>Jag la till css code för styling lite finare sida.</p>
            <li>Vilken utvecklingsmiljö har du använt för uppgiften (Editor, webbserver etcetera)?</li>
            <p>Jag valde först jobba med VS code och dess "extensions", Senare ändrade mig till PHPStorm JetBrains.</p>
            <li>Har något varit svårt med denna uppgift?</li>
            <p>Nej, inte alls. Allt va solklart. </p>

        </ol>
    </section>

    <section id="sidebar">
        <h2>Höger kolumn</h2>
        <p>Här är en "sidebar", som är lika för alla undersidor.</p>
    </section>

    <footer id="mainfooter">
        <p>Här är webbplatsens sidfot. Samma för alla undersidor.</p>
    </footer><!-- /mainfooter -->
</div><!-- /container -->
</body>
</html>