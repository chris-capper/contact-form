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
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                        mollit anim id est laborum.</p>
            <div class="contact-box">
                <h3>Contact Ace in the Hole</h3>
                <p>Questions? Comments? We'd love to hear from you!</p><br>
                <form method="post" action=" ">
                    <label for="myName">Name: </label>
                    <input type="text" id="myName" name="myName" required="required"><br>
                    <label for="myEmail">E-mail: </label>
                    <input type="email" id="myEmail" name="myEmail" required="required"><br>
                    <label for="myQuestion">Comments: </label>
                    <textarea name="myQuestion" id="myQuestion" rows="5" cols="50" required="required"></textarea><br>
                    <input id="contactsubmit" type="submit" value="Send">
                </form>
            </div>
        </main>
        <?php include '../includes/footer.inc.html.php' ?>
    </body>
</html>