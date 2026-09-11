<!DOCTYPE html>
<html lang="en">
<head>

    <?php foreach($data_dag as $day_item) { ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $day_item["dag"] ?></title>



    <script src="js/general.js" defer></script>

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/animation.css">

    <!-- CDN Tailwind --> <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body {
            background: url("https://img.magnific.com/free-vector/lowpoly-geometric-polygonal-colorful-abstract-background_2100-957.jpg");
        }
        #<?= $day_item['dag'] ?> {
            font-weight: bold;
        }

    </style>
</head>
<body>


<div class="navbar w-full h-[160px] text-5xl bg-gray-400 font-bold flex items-center">
    <div class="hamburger w-fit min-h-14 absolute l-0 ml-50 cursor-pointer" onclick="hamburger_animation('open')">
        <div class="hamburger_container min-h-14 flex flex-col justify-evenly">
            <div id="ham_1" class="ham"></div>
            <div id="ham_2" class="ham"></div>
            <div id="ham_3" class="ham"></div>
        </div>
    </div>
    <div class="ml-auto mr-auto flex flex-col items-center justify-center"><b>Titel website</b> <u class="text-4xl"> <?= $day_item['dag'] ?> </u> </div>
</div>

<div class="dropdown_container">
    <div id="burger_container" class="flex flex-col bg-orange-400 h-0 w-[200px] text-center text-[22.5px] rounded-b-xl absolute left-[130px] overflow-hidden">
        <a href="homepage.php">Hoofdpagina</a>
        <a href="dagpagina.php?dag=1" id="Maandag">Maandag</a>
        <a href="dagpagina.php?dag=2" id="Dinsdag">Dinsdag</a>
        <a href="dagpagina.php?dag=3" id="Woensdag">Woensdag</a>
        <a href="dagpagina.php?dag=4" id="Donderdag">Donderdag</a>
        <a href="dagpagina.php?dag=5" id="Vrijdag">Vrijdag</a>
        <a href="extra.php">Extra info</a>
    </div>
</div>

    <div class="common_page min-h-[calc(100vh-160px)] flex py-10">

        <div class="flex flex-col text-center 2xl:text-left 2xl:items-start items-center 2xl:flex-row md:w-[80%] 2xl:w-[63%] h-fit bg-blue-800 ml-auto mr-auto gap-x-10 py-4 2xl:px-4 2xl:py-10 justify-around">
            <div class="flex flex-col gap-10 text-side text-2xl w-[90%] 2xl:w-180 bg-red-800">
                <span><b><?= $day_item["inleiding"] ?></b></span

                <span><?= $day_item["kern"] ?></span
            </div>
        </div>

        <div class="h-fit px-4 lg:px-0 max-w-[700px] min-w-[300px] xl:max-w-[600px] flex flex-col gap-10">

                <?php
                    for ($i = 1; $i < 5; $i++) {
                        if ($day_item["afb$i"] != '') { ?>
                            <?= '<div class="bg-green-800 w-full mt-5 2xl:ml-0"> <img class="w-full h-full" src="data/images/dag_images/' . $day_item['dag'] . '/' . $day_item['afb' . $i] . '"></div>' ?>
                        <?php }
                    }

                ?>
            </div>

        </div>
    </div>


<?php } ?>

</body>
</html>