<?php

function getMenu() 
{
    $Menu = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => 0,
        ],
        [
            'title' => 'Раздел1',
            'path' => '/inner1/',
            'sort' => 1,
        ],
        [
            'title' => 'Раздел2',
            'path' => '/inner2/',
            'sort' => 2,
        ],
        [
            'title' => 'Раздел3',
            'path' => '/inner3/',
            'sort' => 3,
        ],
        [
            'title' => 'Каталог',
            'path' => '/catalog/',
            'sort' => 4,
        ],
    ];
  
    return arraySort($Menu,'sort',SORT_ASC);
}
$MainMenu = getMenu();

foreach ($MainMenu as $key => $value) {
    $newTitle = cutString($MainMenu[$key]['title'], 12, '...');
    $MainMenu[$key]['title'] = $newTitle;
}

if(!isset( $_SESSION['Autorisation']) || $_SESSION['Autorisation'] == false){
    array_pop($MainMenu);
    array_push(
        $MainMenu, 
        [
            'title' => '',
            'path' => '/',
            'sort' => 4,
        ]
    );
}