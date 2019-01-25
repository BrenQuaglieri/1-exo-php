<?php

$colors = [
    '#000',
    '#111',
    "#222",
    "#333",
    "#444",
    "#555",
    "#666",
    "#777",
    "#888",
    "#999",
    "#AAA",
    "#BBB",
    "#CCC",
    "#DDD",
    "#EEE",
    "#FFF"
];

var_dump($colors);

for($i = 0; $i <= count($colors); $i++) {
    echo "<div style='background-color:$colors[$i];'>" . $colors[$i] . "</div>";
};
