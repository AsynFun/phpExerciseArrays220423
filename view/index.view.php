<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prekės</title>
    <!--php paskaitos 1 dalies užduotis. 2022 04 14 d.-->
</head>
<body>
<section>
    <h1>Prekės</h1>
    <ul>
<!--$catalog duomenų faile yra o $category=>$items - pavadinome patys-->
<!--$category saugo index iš masyvo $catalog o $items -
saugo masyvą su prekėmis, kuris yra priskirtas $item   -->
        <?php foreach($catalog as $category=>$items):?>

            <li><h3>Kategorija: <?=$category; //shorthendas echo?></h3>
            <ul>
                <?php foreach($items as $code=>$item):?>
                    <li><b>Prekės kodas: </b><?=$code;?></li>
                    <?php $suma=0; //kint int priskiriame reikšmę 0 pradžioje arba apnuliname prieš sekantį ciklą?>
                <ul>
                    <?php foreach($item as $property=>$value):?>
                    <li><strong><?=ucfirst($property);?></strong>:<?=$value;?></li>
                        <?php if ($property==="kaina") {$suma=intval($value);} elseif ($property==="kiekis") {$suma = $suma * intval($value);}?>
                        <?php endforeach;?>
                    <li><strong>Suma</strong>:<?=$suma;?></li>
                </ul>
                <?php endforeach;?>
            </ul>
        </li>
        <?php endforeach;?>
    </ul>
</section>

</body>
</html>