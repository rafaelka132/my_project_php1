<?php

function arraySort(array $array, $key = 'sort', $sort = SORT_DESC)
{

    usort ($array, function ($a, $b) use ($key, $sort) {

        return $sort == SORT_ASC ? $a[$key] <=> $b[$key] :
            $b[$key] <=> $a[$key];

   });

    return $array;
}

