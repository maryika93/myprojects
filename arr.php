<?php

$animals = array(
    'Africa' => array('Elephantidae', 'Hippopotamus amphibius', 'Tragelaphus eurycerus'),
    'Antarctica' => array('Hydrurga leptonyx', 'Cetacea', 'Lobodon carcinophagus'),
    'Australia' => array('Camelus', 'Macropus', 'Phascolarctos cinereus')
);

echo '<pre>';
print_r($animals);

$double_animals = array();
$a = array();
$b = array();

foreach($animals as $k => $v){
    foreach ($v as $animal){
        if (substr_count($animal, ' ')==1){
            $words = explode(" ", $animal);
            echo '<pre>';
            print_r($words);
            $a[] = $words[0];
            $b[] = $words[1];
        }
    }
}

shuffle($b);
echo '<pre>';
var_dump($b);

for ($i = 0; $i < count($b); $i++) {
    $da = $a[$i]." ".$b[$i];
    echo '<pre>';
    print_r($da);
}
