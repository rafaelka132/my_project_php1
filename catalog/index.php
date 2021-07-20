<?php 
error_reporting(E_ALL);
ini_set('display_errors', true);
?>

<!doctype html>
<html class="antialiased" lang="ru">
<?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/header.php'?>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">

    <?php head()?>
    <?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/menu.php'; ?>
    </header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Каталог</h1>

            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/cars_catalog.php';?>
                <!--Каталог-->
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/footer.php'?>
</div>

</body>
</html>