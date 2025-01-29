<?php 
    $zelda_characters = [
        [
            'name' => 'Zelda',
            'first_appearance' => 'Legend of Zelda',
            'people' => 'Hylian'
        ],
        [
            'name' => 'Saria',
            'first_appearance' => 'Ocarina of Time',
            'people' => 'Kokiri'
        ],
        [
            'name' => 'Sidon',
            'first_appearance' => 'Breath of the Wild',
            'people' => 'Zora'
        ]
    ];

    var_dump(json_encode($zelda_characters));
?>