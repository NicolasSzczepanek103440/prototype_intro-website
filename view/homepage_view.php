<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="js/general.js" defer></script>

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/animation.css">

    <!-- CDN Tailwind --> <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style>
        body {
            background: url("https://img.magnific.com/free-vector/lowpoly-geometric-polygonal-colorful-abstract-background_2100-957.jpg");
        }
    </style>
</head>
<body>
    <div class="navbar w-full h-[100px] text-5xl bg-gray-400 font-bold flex items-center">
        <div class="hamburger w-fit min-h-14 absolute l-0 ml-50 cursor-pointer" onclick="hamburger_animation('open')">
            <div class="hamburger_container min-h-14 flex flex-col justify-evenly">
            <div id="ham_1" class="ham"></div>
            <div id="ham_2" class="ham"></div>
            <div id="ham_3" class="ham"></div>
            </div>
        </div>
        <div class="ml-auto mr-auto">Titel website</div>
    </div>

    <div class="dropdown_container">
        <div id="burger_container" class="flex flex-col bg-orange-400 h-0 w-[200px] text-center text-[22.5px] rounded-b-xl absolute left-[130px] overflow-hidden">
            <a href="homepage.php"><b>Hoofdpagina</b></a>
            <a href="dagpagina.php?dag=1">Maandag</a>
            <a href="dagpagina.php?dag=2">Dinsdag</a>
            <a href="dagpagina.php?dag=3">Woensdag</a>
            <a href="dagpagina.php?dag=4">Donderdag</a>
            <a href="dagpagina.php?dag=5">Vrijdag</a>
            <a href="extra.php">Extra info</a> <!-- HYPERLINK NOG BEWERKEN!! - Nicolas -->
        </div>
    </div>

    <div class="w-[94%] xl:w-300 text-2xl text-center flex p-7 justify-center items-center ml-auto mr-auto mt-8 bg-red-800">
        <span>Welkom naar onze blog-website! Hierin kunt u vinden hoe wij de introweek van de tweede jaar van het Grafisch Lyceum Rotterdam ervaarden!</span>

    </div>

    <div class="w-[95%] sm:w-[87%] lg:w-[80%] py-5 bg-gray-800 ml-auto mr-auto mt-8 flex flex-wrap justify-center items-center pl-20 pr-20 gap-7">

        <?php foreach ($fetch_data as $items) {?>

        <?=
            '<a href="dagpagina.php?dag=' . $items["id"] . '"><div class="selection_day flex flex-col gap-3">
                <div class="w-85 h-45 md:w-95 md:h-55 2xl:w-120 2xl:h-80 bg-gray-300">
                    <img src="data/images/thumbnails/' . $items["thumbnail"]  . '" class="w-[100%] h-[100%]">
                </div>
                <div class="w-85 h-12 md:w-95 md:h-14 2xl:w-120 2xl:h-18 bg-gray-300 flex justify-center items-center text-3xl md:text-4xl">'
                    . $items['dag'] .
                '</div>
            </div></a>'

        ?> <?php } ?>





    </div>
</body>
</html>