<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 6 TD 2</title>
</head>

<body>
    <?php
    $couleurs = array(
        "Ahmed" => "AntiqueWhite",
        "Mohamed" => "CadetBlue",
        "Aymen" => "DarkOrange",
        "Bilel" => "Fuchsia",
        "Hatem" => "Lime"
    );
    foreach ($couleurs as $key => $value) {
        echo '<h3 class="colors text-center" id="' . $value . '">' . $key . '</h3>';
    }
    ?>
    <script>
        const h3 = document.querySelectorAll('.colors');
        h3.forEach(elem => {
            elem.style.backgroundColor = elem.id
        })
    </script>
</body>

</html>