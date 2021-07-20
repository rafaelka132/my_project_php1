<!doctype html>
<html class="antialiased" lang="ru">

<?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/header.php'?>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <header class="bg-white">
    <?php head()?>
    <?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/menu.php'; ?>
    </header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Заголовок данной страницы123</h1>
            
            <div class="space-y-4">
                <p>Ниже представлен пример отображения контента</p>

                <img src="/assets/pictures/car_cerato.png" alt="" title="" class="w-96">
                <p>Горная тундра, как бы это ни казалось парадоксальным, отражает льежский оружейник, в начале века джентльмены могли ехать в них, не снимая цилиндра. Здесь работали Карл Маркс и Владимир Ленин, но шенгенская виза многопланово поднимает уличный кустарничек, потому что именно здесь можно попасть из франкоязычной, валлонской части города во фламандскую. Королевство погранично. Эфемероид поднимает кит, но особой популярностью пользуются заведения подобного рода, сосредоточенные в районе Центральной площади и железнодорожного вокзала.</p>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';?>
</div>

</body>
</html>