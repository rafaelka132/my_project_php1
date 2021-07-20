<?php
include $_SERVER['DOCUMENT_ROOT'] . '/getMenu.php';
?>

<div class="border-b">
    <div class="container mx-auto overflow-hidden px-4 sm:px-6">
        <section class="bg-white py-4">
            <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">

                <?php
                /*if(isset( $_SESSION['Autorisation']) && $_SESSION['Autorisation'] == true){
                    
                }*/
                
                foreach ($MainMenu as $key => $item) : ?>

                    <li class="px-5 py-2"><a class="<?=changeColor($MainMenu, $key);?> hover:text-orange" 
                    href="<?= $MainMenu[$key]['path'];?>"><?= $MainMenu[$key]['title'];?></a></li>

                <?php endforeach ?>
                
            </ul>
        </section>
    </div>
</div>