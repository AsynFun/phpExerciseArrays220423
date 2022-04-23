<?php

$catalog = [ //1 lygis, kuriame yra 2 elementai, kurių reikšmė - masyvas
    'IT'=>[  //2 lygis, kuris yra asociatyvus masyvas, turintis reikšmes
        'KOMP1'=>[ //3 lygis, kuris yra asociatyvus masyvas, turintis reikšmes
            'pavadinimas'=>'Kompiuteris',  //kaip matau, čia visur - key=>value
            'kaina'=>1000,
            'kiekis'=>10
        ],
        'TEL1'=>[
            'pavadinimas'=>'Telefonas',
            'kaina'=>200,
            'kiekis'=>3
        ],
        'SP1'=>[
            'pavadinimas'=>'Spausdintuvas',
            'kaina'=>150,
            'kiekis'=>1
        ]
    ],
    'Other'=>[
        'P1'=>[
            'pavadinimas'=>'Plaktukas',
            'kaina'=>50,
            'kiekis'=>1
        ],
        'SK1'=>[
            'pavadinimas'=>'Skriestuvas',
            'kaina'=>50,
            'kiekis'=>111
        ],
        'L1'=>[
            'pavadinimas'=>'Lazda',
            'kaina'=>1,
            'kiekis'=>1
        ]
    ]
];
/* Turi būti išvestas sekantis rezultatas
 * Kategorija:
 *   Prekės kodas:
 *      Kompiuteris
 *      Kaina: 200
 *      Kiekis: 12
 *      Suma: 2400
 */