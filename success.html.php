<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/reset.css">
        <link rel="stylesheet" href="../styles/helper.css">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../scripts/newscript.js"></script>
        <title>Ace in the Hole | About</title>
    </head>
    <body>
        <?php include '../includes/nav.inc.html.php'; ?>
        <?php include '../includes/header.inc.html.php'; ?>
        <main>
            <div class="contact-box">
            <h2>Success!</h2>
                <p>Thanks for contacting us! Here's what you sent:<br>
                    Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
                    Question: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </div>
        </main>
        <?php include 'includes/footer.inc.html.php' ?>
    </body>
</html>