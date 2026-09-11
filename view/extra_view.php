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
            background: url("https://img.magnific.com/free-vector/matrix-style-binary-code-digital-background-with-falling-numbers_1017-25336.jpg");
        }
    </style>
</head>
<body>
<div class="navbar w-full h-[100px] text-5xl bg-gray-400 font-bold flex items-center">
    <div class="hamburger hover:bg-gray-500 rounded-md w-fit min-h-14 absolute l-0 ml-50 cursor-pointer" onclick="hamburger_animation('open')">
        <div class="hamburger_container min-h-14 flex flex-col justify-evenly">
            <div id="ham_1" class="ham"></div>
            <div id="ham_2" class="ham"></div>
            <div id="ham_3" class="ham"></div>
        </div>
    </div>
    <div class="ml-auto mr-auto">Titel website (BEWERKEN. CHECK FIGMA)</div>
</div>
<div class="dropdown_container">
    <div id="burger_container" class="flex flex-col bg-orange-400 h-0 w-[200px] text-center text-[22.5px] rounded-b-xl absolute left-[130px] overflow-hidden">
        <a class="hover:bg-orange-500"  href="homepage.php"><b>Hoofdpagina</b></a>
        <a class="hover:bg-orange-500"  href="dagpagina.php?dag=1">Maandag</a>
        <a class="hover:bg-orange-500"  href="dagpagina.php?dag=2">Dinsdag</a>
        <a class="hover:bg-orange-500"  href="dagpagina.php?dag=3">Woensdag</a>
        <a class="hover:bg-orange-500"  href="dagpagina.php?dag=4">Donderdag</a>
        <a class="hover:bg-orange-500"  href="dagpagina.php?dag=5">Vrijdag</a>
        <a class="hover:bg-orange-500"  href="extra.php">Extra info</a> <!-- HYPERLINK NOG BEWERKEN!! - Nicolas -->
    </div>
</div>

<div class="common_page min-h-[calc(100vh-160px)] flex items-start py-10">

<div class="2xl:w-350 w-[91%] h-fit bg-gray-800 ml-auto mr-auto flex flex-col md:px-0 lg:px-10 py-5">
    <div class="2xl:w-280 w-[85%] bg-red-800 min-h-40 ml-auto mr-auto mt-5 flex jusitfy-center items-center text-center font-bold px-10 py-3 text-3xl font-normal">
        <span>Op deze pagina vindt u wie van onze teamleden wat heeft gedaan tijdens het bouwen van de website.</span>
    </div>

    <div class="bg-gray-300 py-3 h-fit 2xl:w-300 w-[91%] flex flex-wrap items-start justify-evenly ml-auto mr-auto mt-8 gap-y-5">
        <div id="thomas" class="w-fit p-2 bg-pink-400">
            <div class="w-70 h-70 bg-gray-600">
                <img class="w-[100%] h-[100%]" src="data/images/fotos_personen/placeholder_thomas.jpg">
            </div>
            <div class="mt-3 w-70 py-5 px-5 text-center bg-gray-600 flex justify-center items-center font-bold text-4xl">
                Thomas Rijsdijk
            </div>

            <div class="w-70 h-fit bg-gray-200 mt-4 py-1 rounded-lg pb-3">
                <div class="w-50 h-10 ml-auto mr-auto bg-yellow-600 flex justify-center items-center text-xl rounded-lg"><b>GEMAAKT:</b></div>

                <div class="w-full text-center ml-auto mr-auto mt-1 px-6">
                    INVULLEN
                </div>
            </div>
        </div>

        <div id="sem" class="w-fit p-2 bg-green-400">
            <div class="w-70 h-70 bg-gray-600">
                <img class="w-[100%] h-[100%]" src="data/images/fotos_personen/placeholder_sem.jpeg">
            </div>
            <div class="mt-3 w-70 py-5 px-5 text-center bg-gray-600 flex justify-center items-center font-bold text-4xl">
                Sem van Doorn
            </div>

            <div class="w-70 h-fit bg-gray-200 mt-4 py-1 rounded-lg pb-3 border-box shadow-2xl">
                <div class="w-50 h-10 ml-auto mr-auto bg-yellow-600 flex justify-center items-center text-xl rounded-lg"><b>GEMAAKT:</b></div>

                <div class="w-full text-center ml-auto mr-auto mt-1 px-6">
                    INVULLEN
                </div>
            </div>
        </div>

        <div id="nicolas" class="w-fit p-2 bg-green-700">
            <div class="w-70 h-70 bg-gray-600">
                <img class="w-[100%] h-[100%]" src="data/images/fotos_personen/placeholder_nicolas.jpeg">
            </div>
            <div class="mt-3 w-70 py-5 px-5 text-center bg-gray-600 flex justify-center items-center font-bold text-4xl">
                Nicolas Szczepanek
            </div>

            <div class="w-70 h-fit bg-gray-200 mt-4 py-1 rounded-lg pb-3 border-box">
                <div class="w-50 h-10 ml-auto mr-auto bg-yellow-600 flex justify-center items-center text-xl rounded-lg"><b>GEMAAKT:</b></div>

                <div class="w-full text-center ml-auto mr-auto mt-1 px-6">
                    Wireframes gemaakt, foto's gemaakt museum, prototype gebouwd, database gebouwd, eindresultaat gebouwd
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>