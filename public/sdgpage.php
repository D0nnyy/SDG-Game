<?php

include_once("../source/database.php");

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG's</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon-16x16.png">
    <link rel="stylesheet" href="css/sdgpage.css">
    <script defer src="script.js"></script>
</head>

<body>
    <header>
        <div class="header">
            <a href="../../index.php">
                <img class="logo" src="img/NVVNLogo.png" alt="NVVN Logo">
            </a>
            <a class="tab" href="https://www.nvvn.org/over-de-nvvn/">Over NVVN</a>
            </a>
        </div>
    </header>
    <h1 class="h1sdg" >
        3 Random SDG's!
    </h1>

    <?php
        $rows = SQL->query("SELECT * FROM sdgs ORDER BY id");
        while ($row = $rows->fetch_assoc()) {
            include("../source/views/sdg.php");
        }
    ?>
</body>

</html>