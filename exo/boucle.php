<?php

$tableauSimple = [
    'Zero',
    'Un',
    'Deux',
    'Trois',
    'Quatre',
];

for ($i = 0; $i < count($tableauSimple); $i++) {
    echo '<li>' . $tableauSimple[$i] . '</li>';
};

echo '<br>';

$i = 0;
while ($i < count($tableauSimple)) {
    echo '<li>' . $tableauSimple[$i] . '</li>';
    $i++;
};

foreach ($tableauSimple as $i => $nombres) {
    echo $i . ' ' . $nombres . '<br>';
}

/* do {
 
} while (false);*/
