<?php
/*
[inputlanguage1] => 
Array ( 
       [0] => Deutsch 
       [1] => Englisch 
       [2] => Spanisch
)
[dropdownlanguage1] => 
Array ( 
       [0] => 2 
       [1] => 4 
       [2] => 2
)
$language1 = array("Deutsch","Englisch","Spanisch");
print_r($language1);
echo "<br>";
echo "<br>";
$language2 = array(2,4,2);
print_r($language2);
echo "<br>";
echo "<br>";



[inputKentnisse] => 
Array ( 
       [0] => Java 
       [1] => Windows 
       [2] => MacOS 
)
[dropdownKentnisse] =>
Array ( 
       [0] => 3 
       [1] => 2 
       [2] => 6 
)

[hobby] => • Lorem ipsum dolor sit • Lorem ipsum dolor sit amet • Lorem ipsum dolor sit amet • Lorem ipsum dolor sit amet


*/
$skills1 = array("Java","Windows","MacOS");
print_r($skills1);
echo "<br>";
echo "<br>";
$skills2 = array(3,2,6);
print_r($skills2);
echo "<br>";
echo "<br>";

/*
[jobTitle] => 
Array ( 
       [0] => Name der Bildungseinrichtung & Ort 
       [1] => Name der Bildungseinrichtung & Ort 
       [2] => Name der Bildungseinrichtung & Ort 
       [3] => Name der Bildungseinrichtung & Ort 
       [4] => Name der Bildungseinrichtung & Ort 
       [5] => Name der Bildungseinrichtung & Ort
)

[jobDauer] => 
Array ( 
       [0] => Titel des Abschlusses 
       [1] => Titel des Abschlusses 
       [2] => Titel des Abschlusses 
       [3] => Titel des Abschlusses 
       [4] => Titel des Abschlusses 
       [5] => Titel des Abschlusses
)

[job] => 
Array ( 
       [0] => 2018 - 2020 
       [1] => 2018 - 2020 
       [2] => 2018 - 2020 
       [3] => 2018 - 2020 
       [4] => 2018 - 2020 
       [5] => 2018 - 2020
)
$job1 = array("Name der Bildungseinrichtung & Ort","Name der Bildungseinrichtung & Ort" ,"Name der Bildungseinrichtung & Ort", "Name der Bildungseinrichtung & Ort","Name der Bildungseinrichtung & Ort" ,"Name der Bildungseinrichtung & Ort");
print_r($job1);
echo "<br>";
echo "<br>";
$job2 = array("Titel des Abschlusses ","Titel des Abschlusses","Titel des Abschlusses","Titel des Abschlusses","Titel des Abschlusses","Titel des Abschlusses");
print_r($job2);
echo "<br>";
echo "<br>";
$job3 = array("2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020");
print_r($job3);
echo "<br>";
echo "<br>";
*/
// Employment Portion Arrays
/*
[EmploymentTitel] => 
       Array ( 
              [0] => Name der Bildungseinrichtung & Ort 
              [1] => Name der Bildungseinrichtung & Ort 
              [2] => Name der Bildungseinrichtung & Ort 
              [3] => Name der Bildungseinrichtung & Ort
       )

[employmentDauer] => 
       Array ( 
              [0] => 2018 - 2020 
              [1] => 2018 - 2020 
              [2] => 2018 - 2020 
              [3] => 2018 - 2020
       )

[employment] => 
       Array ( 
              [0] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
                     • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias 
                     • Lorem ipsum dolor sit amet, consetetur sadipscing 
              [1] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
                     • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias 
                     • Lorem ipsum dolor sit amet, consetetur sadipscing 
              [2] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
                     • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias 
                     • Lorem ipsum dolor sit amet, consetetur sadipscing 
              [3] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
                     • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias 
                     • Lorem ipsum dolor sit amet, consetetur sadipscing
       )

       $emp1 = array("Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort");
       print_r($emp1);
       echo "<br>";
       echo "<br>";
       $emp2 = array("2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020");
       print_r($emp2);
       echo "<br>";
       echo "<br>";
       $emp3 = array("Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias  • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing");
       print_r($emp3);
       echo "<br>";
       echo "<br>";
*/

// Experience Portion

/* --> [erfahrung] => 

Array ( 
    [0] => • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
    [1] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
    [2] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
    [3] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
    [4] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
    [5] =>   Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing 
           • Lorem ipsum dolor sit amet, consetetur sadipscing
    )

    --> [erfahrungDauer] => 
Array ( 
    [0] => 05/2022 - Aktuell 
    [1] => 03/2022 - 04/2022 
    [2] => 03/2022 - 04/2022 
    [3] => 03/2022 - 04/2022 
    [4] => 03/2022 - 04/2022 
    [5] => 03/2022 - 04/2022
)
    
    -->[erfahrungTitle] => 
Array ( 
    [0] => Erfahrung 01 Mustermann AG - Ort 
    [1] => Erfahrung 02 Mustermann AG - Ort 
    [2] => Erfahrung 02 Mustermann AG - Ort 
    [3] => Erfahrung 02 Mustermann AG - Ort 
    [4] => Erfahrung 02 Mustermann AG - Ort 
    [5] => Erfahrung 02 Mustermann AG - Ort
)    
    */

// $arr1 = array("• Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing", "Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing "," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing","  Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing");
// print_r($arr1);
// echo "<br>";
// echo "<br>";
// $arr2 = array("05/2022 - Aktuell","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022");
// print_r($arr2);
// echo "<br>";
// echo "<br>";
// $arr3 = array("Erfahrung 01 Mustermann AG - Ort ","Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort");
// print_r($arr3);