<?php 
function greeting($name = "Гость", $day) {
    switch ($day) {
        case "1": case '2': case '3': case '4': case '5':
            echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
            break;
        
        case "6": case '7':
            echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
            break;
        default:
            echo "Привет, $name! Видимо у вас неполадки с календарем!";            
            break;
    }
} 
echo "case: day is 1-5 <br>";
greeting("Денис", 1);
echo "<br><br>";

echo "case: day is 6-7 <br>";
greeting("Денис", 6);
echo "<br><br>";

echo "case: day is out of 1-7 or absent <br>";
greeting("Денис", 8);
echo "<br><br>";
?>