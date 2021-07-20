<div class="border-b">
    <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
        <div class="flex justify-center">
            <a href="/" class="inline-block sm:inline hover:opacity-75">
                <img src="/assets/images/logo.png" width="222" height="30" alt="">
            </a>
        </div>
        <div>
            <ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                <li>
                    <a class="text-gray-500 hover:text-orange" href="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <?=$_SESSION['Name'] ?? '';?>
                    </a>
                </li>
                <li>
                    <a class="text-gray-500 hover:text-orange" href="/templates/logout.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        Выход
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>