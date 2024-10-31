<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = [
    "Leden", // 0
    "Únor", // 1
    "Březen", // 2
    "Duben", // 3
    "Květen", // 4
    "Červen", // 5
    "Červenec", // 6
    "Srpen", // 7
    "Září", // 8
    "Říjen", // 9
    "Listopad", // 10
    "Prosinec" // 11

    ];

foreach ($months as $month) {
    echo $month . "\n";
}

for($i = 5; $i < 12; $i++) {
    echo $months[$i] . "\n";
}
?>

