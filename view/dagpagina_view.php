<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="../js/animation.js" defer></script>
    <link rel="stylesheet" href="../css/animation.css">
    <!-- CDN Tailwind --> <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <?php foreach ($data_dag as $dag_item) {?>
    <title><?= $dag_item["dag"] ?> pagina</title>

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

<?php } ?>
</body>
</html>