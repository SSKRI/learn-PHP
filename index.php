

<?php
ini_set('error_reporting', E_ALL);

$text = "Прошлое не возвращается а может и нет";
$newtext = wordwrap($text, 8, "<br>", true);

echo "$newtext<br>";


$text2 = "Прошлое не возвращается а может и нет";
$newtext2 = wordwrap($text, 8, "<br>", false);

echo "$newtext2<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$school = [
    "1a" => [
        "Иванов Петя",
        "Тарасова Маша",
        "Калинин Илья",
        "Арбузова Лена",
        "Катюшин Игорь",
        "Ващенко Лена",
        "Иванов Артем",
        "Никитин ОЛег",
        "Заика Таня",
        "Харин Тарас"
    ],
    "1б" => [
        "Иванов Петя2",
        "Тарасова Маша2",
        "Калинин Илья2",
        "Арбузова Лена2",
        "Катюшин Игорь2",
        "Ващенко Лена2",
        "Иванов Артем2",
        "Никитин ОЛег2",
        "Заика Таня2",
        "Харин Тарас2"
    ],
    "1в" => [
        "Иванов Петя21",
        "Тарасова Маша21",
        "Калинин Илья21",
        "Арбузова Лена21",
        "Катюшин Игорь21",
        "Ващенко Лена21",
        "Иванов Артем21",
        "Никитин ОЛег21",
        "Заика Таня21",
        "Харин Тарас21"
    ],
    "1г" => [
        "Иванов Петя22",
        "Тарасова Маша22",
        "Калинин Илья22",
        "Арбузова Лена22",
        "Катюшин Игорь22",
        "Ващенко Лена22",
        "Иванов Артем22",
        "Никитин ОЛег22",
        "Заика Таня22",
        "Харин Тарас22"
    ],
    "1д" => [
        "Иванов Петя23",
        "Тарасова Маша23",
        "Калинин Илья23",
        "Арбузова Лена23",
        "Катюшин Игорь23",
        "Ващенко Лена23",
        "Иванов Артем23",
        "Никитин ОЛег23",
        "Заика Таня23",
        "Харин Тарас23"
    ],
];
echo "<pre>";
print_r($school);
echo "</pre>";

/*for ($i = 0; $i < count($school); $i++) {
    $school[$i] = implode (",", $school[$i]);
    echo $school[$i];
}*/
foreach ($school as $key => $val) {
    $school[$key] = implode(",", $val);
    //$school[] = implode(",", $val);
}
echo "<br>";

echo "<pre>";
print_r($school);
echo "</pre>";



?>
<?php






















?>