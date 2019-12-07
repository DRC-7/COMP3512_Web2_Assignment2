<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <form class="form-signup" action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="username">
                <input type="text" name="mail" placeholder="email">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwd-repeat" placeholder="repeat password">
                <button type="submit" name="signup-submit">Signup</button>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>