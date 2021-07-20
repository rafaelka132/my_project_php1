 <?php
error_reporting(E_ALL);
ini_set('display_errors', true);
?>

<!doctype html>
<html class="antialiased" lang="ru">
<?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/header.php'?>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/autorisation.php'; ?>
    <?php head()?>
    <?php include $_SERVER['DOCUMENT_ROOT'] .'/templates/menu.php'; ?>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Авторизация</h1>

            <?php
            if (isset($isAutorisation)) {
                if ($isAutorisation == true) {
                    includeTemplate('messages/success_message.php', ['message' => 'Все прошло успешно']);
                }
                else {
                    includeTemplate('messages/error_message.php', ['message' => 'Неверный логин или пароль']);
                }
            }
            ?>
            <!--message-->
            <form action="/login/" method="post">
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" value="<?=$valueEmail ?? ''?>" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" value="<?=$valuePass ?? ''?>" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******">
                        </div>
                        <div class="block">
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Войти
                            </button>

                            <a href="/register.php" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня нет аккаунта
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';?>
</div>

</body>
</html>