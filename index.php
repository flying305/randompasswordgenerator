<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator 🎰</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;700&family=Montserrat:wght@200;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $lowercase = "abcdefghijklmnopqrstuvwxyz"; // All avaliable lowercase letters that script may choose from.
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // All avaliable uppercase letters that script may choose from.
    $numerical = "0123456789"; // All avaliable numbers that script may choose from.
    $specialCharacters = "!@#$%^&*()_"; // All avaliable special characters that script may choose from.
    ?>
    <div class="container">
        <img src="https://i.pinimg.com/originals/53/be/79/53be793b1b645addc180e58606f70617.png" alt="Person working on Computer" class="image">
        <h1>Random Password Generator</h1>
        <input value="<?php echo substr(str_shuffle($lowercase . $uppercase . $numerical . $specialCharacters), 0, 12);?>" id="password" readonly>
        <br><br>
        <button onclick="copyText()" class="button">Copy 📋</button>
        <button onclick="reload()" class="button">Regenerate 🔄</button>
    </div>
    <script>
        function copyText() {
            /* Get the text field */
            var copyText = document.getElementById("password");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field to user's clipboard*/
            navigator.clipboard.writeText(copyText.value);
        }

        function reload() {
            location.reload();
        }
    </script>
</body>

</html>