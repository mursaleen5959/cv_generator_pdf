<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// DATA Variables Here
$fname = 'VorName';
$lname = 'Nachname';

$language1 = array("Deutsch","Englisch","Spanisch");
$language2 = array(2,4,2);

$skills1 = array("Java","Windows","MacOS");
$skills2 = array(3,2,6);

$hobbys = "• Lorem ipsum dolor sit • Lorem ipsum dolor sit amet • Lorem ipsum dolor sit amet • Lorem ipsum dolor sit amet";
$hobbies = explode("•",$hobbys);

$experience1 = array("Erfahrung 01 Mustermann AG - Ort ","Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort", "Erfahrung 02 Mustermann AG - Ort");
$experience2 = array("05/2022 - Aktuell","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022","03/2022 - 04/2022");
$experience3 = array("   Lorem ipsum dolor sit amet,Online Grammar and Writing Checker To Help You Deliver Impeccable, Mistake-free Writing. Grammarly Has a Tool For Just About Every Kind Of Writing You Do. Try It Out For Yourself! Eliminate Grammar Errors. AI Writing Assistant. Improve Word Choice. consetetur sadipscing,Lorem ipsum dolor sit amet, consetetur sadipscing Lorem ipsum dolor sit amet, consetetur sadipscing  • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consetetur sadipscing, consetetur Lorem ipsum dolor sit amet, consetetur sadipscing Lorem ipsum dolor sit amet, consetetur sadipscing Lorem ipsum dolor sit amet, consetetur sadipscing sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing", "Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing "," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing","  Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing");

$employment1 = array("Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort ","Name der Bildungseinrichtung & Ort");
$employment2 = array("2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020");
$employment3 = array("Lorem Search Quality Answers Now. Get The Best Result With ZapMeta About Quality Answers Now. Find More Harvard Certificate Program. ZapMeta Offers The Overview from 6 Engines. ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias  • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing ","Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipsadipscing elitr, sed dias • Lorem ipsum dolor sit amet, consetetur sadipscing");

$job1 = array("Name der Bildungseinrichtung & Ort","Name der Bildungseinrichtung & Ort" ,"Name der Bildungseinrichtung & Ort", "Name der Bildungseinrichtung & Ort","Name der Bildungseinrichtung & Ort" ,"Name der Bildungseinrichtung & Ort");
$job2 = array("2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020","2018 - 2020");
$job3 = array("• Lorem Search Quality Answers Now. Get The Best Result With ZapMeta About Quality Answers Now. Find More Harvard Certificate Program. ZapMeta Offers The Overview from 6 Engines. ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing", "Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing "," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing"," Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing","  Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing • Lorem ipsum dolor sit amet, consetetur sadipscing");

//////////////////////  




require('fpdf/fpdf.php');
require('fpdf/extension.php');
$pdf = new PDF();
$pdf->AddPage('P', 'A4');
$pdf->SetAutoPageBreak(1, 0);
//     $pdf->AddFont('Nunito-Italic', 'I', 'Nunito-Italic-VariableFont_wght.php');
//     $pdf->AddFont('Nunito', '', 'Nunito-VariableFont_wght.php');
//     $pdf->AddFont('Nunito', 'B', 'Nunito-Bold.php');

$pdf->SetXY(150, 0);
$pdf->SetFillColor(218, 238, 241);
$pdf->Cell(60, 25, '', 0, 0, 'l', 1);


$pdf->SetXY(0, 0);
$pdf->SetFillColor(247, 247, 247);
$pdf->Cell(65, 290, '', 0, 0, 'l', 1);


$pdf->SetFont('Arial', '', 10);

//$pdf->SetFillColor(247, 247, 247);

// //$pdf->Image($imgPath, 60, 70,60,60);
$imgPath = 'images/user.jpg';
$pdf->ClippingCircle(35, 35, 25, false);
$pdf->Image($imgPath, 10, 10, 50);
$pdf->UnsetClipping();

$pdf->SetFont('Arial', 'B', 30);
$pdf->SetXY(70, 20);
$pdf->Cell(80, 10, strtoupper($fname), 0, 0, 'l');
$pdf->SetXY(70, 33);
$pdf->Cell(80, 10, strtoupper($lname), 0, 0, 'l');


$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(70, 40);
$pdf->Cell(80, 10, 'Geburtsdatum', 0, 0, 'l');

$pdf->SetFont('Arial', '', 15);
$pdf->SetXY(70, 48);
$pdf->SetTextColor(255, 105, 180);
$pdf->Cell(80, 10, 'Jobbezeichnung', 0, 0, 'l');

$pdf->SetFont('Arial', 'B', 13);
$pdf->SetXY(10, 70);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(80, 10, utf8_decode('ÜBER MICH'), 0, 0, 'l');

$pdf->SetFont('Arial', '', 10);
$pdf->Image('images/1.png', 10, 80, 5);
$pdf->SetXY(17, 78.5);
$pdf->Cell(80, 10, utf8_decode('Mustermann Straße 10B'), 0, 0, 'l');

$pdf->Image('images/2.png', 10, 88, 5);
$pdf->SetXY(17, 85.5);
$pdf->Cell(80, 10, utf8_decode('+49 (0) 123 456 78'), 0, 0, 'l');

$pdf->Image('images/3.png', 10, 95, 5);
$pdf->SetXY(17, 91.5);
$pdf->Cell(80, 10, utf8_decode('musterman@mail.de'), 0, 0, 'l');

$pdf->Image('images/4.png', 10, 102, 5);
$pdf->SetXY(17, 99.5);
$pdf->Cell(80, 10, utf8_decode('https://www.linkedin.com'), 0, 0, 'l');

$pdf->Image('images/5.png', 10, 110, 5);
$pdf->SetXY(17, 106.5);
$pdf->Cell(80, 10, utf8_decode('Führerscheinklasse'), 0, 0, 'l');


$pdf->SetFont('Arial', 'B', 13);
$pdf->SetXY(10, 120);
$pdf->Cell(80, 10, utf8_decode('SPRACHEN'), 0, 0, 'l');




$pdf->SetFont('Arial', '', 10);
$vertical = 130;
for($i=0;$i<count($language1);$i++)
{
    $pdf->SetXY(10, $vertical);
    $pdf->Cell(80, 10, utf8_decode($language1[$i]), 0, 0, 'l');
    $horizontal = 30;
    for ($j = 1; $j <= 6; $j++) {
        if ($j <= $language2[$i]) {
            $pdf->Image('images/c1.png', $horizontal, $vertical + 3, 4);
        } else {
            $pdf->Image('images/c2.png', $horizontal, $vertical + 3, 4);
        }
        $horizontal += 5;
    }
    $vertical += 6;
}


$vertical += 5;
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetXY(10, $vertical);
$pdf->Cell(80, 10, utf8_decode('KENNTNISSE'), 0, 0, 'l');




$pdf->SetFont('Arial', '', 10);
$vertical += 10;
for($i=0;$i<count($skills1);$i++)
{
    $pdf->SetXY(10, $vertical);
    $pdf->Cell(80, 10, utf8_decode($skills1[$i]), 0, 0, 'l');
    $horizontal = 30;
    for ($j = 1; $j <= 6; $j++) {
        if ($j <= $skills2[$i]) {
            $pdf->Image('images/c1.png', $horizontal, $vertical + 3, 4);
        } else {
            $pdf->Image('images/c2.png', $horizontal, $vertical + 3, 4);
        }
        $horizontal += 5;
    }
    $vertical += 6;
}


$vertical += 5;
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetXY(10, $vertical);
$pdf->Cell(80, 10, 'HOBBYS (optional)', 0, 0, 'l');

$vertical += 10;
$pdf->SetFont('Arial', '', 10);
foreach ($hobbies as $key => $value) {
    if($value!='')
    {
        $pdf->SetXY(10, $vertical);
        $pdf->Cell(3, 10, chr(127), 0, 0, 'l');
        $pdf->Cell(80, 10, utf8_decode($value), 0, 0, 'l');
        $vertical += 5;
    }
}


// Experience Cells insertions
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(80, 70);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(80, 10, utf8_decode('BERUFSERFAHRUNG'), 0, 0, 'l');

$vertical = 80+5;
$horizontal = 80;

for($i=0;$i<count($experience1);$i++)
{
    //
    $pdf->SetXY($horizontal, $vertical);
    $pdf->Image('images/c1.png', $horizontal - 5, $vertical + 1, 4);
    $pdf->SetFont('Arial', 'B', 10);
    $cell_width = $pdf->GetStringWidth(utf8_decode($experience1[$i]));
    $pdf->Cell($cell_width, 5, utf8_decode($experience1[$i]), 0, 0, 'l');
    $pdf->SetFont('Arial', '', 10);
    //
    $vertical += 2;
    $pdf->SetXY($horizontal, $vertical);
    $cell_width = $pdf->GetStringWidth(utf8_decode($experience2[$i]));
    $pdf->Cell($cell_width, 10, utf8_decode($experience2[$i]), 0, 0, 'l');
    $pdf->Ln(6);
    $vertical += 2;
    //
    $pdf->SetFont('Arial', '', 8);
    $points = explode("•",$experience3[$i]);
    for($j=0;$j<count($points);$j++)
    {
        if($points[$j]!='')
        {
            $vertical = $pdf->GetY()+3;
            //
            if($vertical>=250)
            {
                $pdf->AddPage('P', 'A4');
                $vertical = 10;
                $pdf->SetXY(0, 0);
                $pdf->SetFillColor(247, 247, 247);
                $pdf->Cell(65, 290, '', 0, 0, 'l', 1);
            }
            //
            $pdf->SetXY($horizontal, $vertical);
            $pdf->Cell(2, 3, chr(127), 0, 0, 'l');
            $text = ltrim($points[$j],' ');
            $pdf->MultiCell(115, 3, utf8_decode($text), 0, 'l', 0);

    
            // Testing
            // $pdf->SetXY($horizontal-10, $vertical);
            // $pdf->Cell(20, 10, $vertical, 0, 0, 'l');
            //   
        }
    }
    //
    $vertical += 9;
}

//////////////////




// Employment Path insertions

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(80, $vertical+5);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(80, 10, utf8_decode('BILDUNGSWEG'), 0, 0, 'l');

$vertical+=20;

for($i=0;$i<count($employment1);$i++)
{
    //
    $pdf->SetXY($horizontal, $vertical);
    $pdf->Image('images/c1.png', $horizontal - 5, $vertical + 1, 4);
    $pdf->SetFont('Arial', 'B', 10);
    $cell_width = $pdf->GetStringWidth(utf8_decode($employment1[$i]));
    $pdf->Cell($cell_width, 5, utf8_decode($employment1[$i]), 0, 0, 'l');
    $pdf->SetFont('Arial', '', 10);
    //
    $vertical += 2;
    $pdf->SetXY($horizontal, $vertical);
    $cell_width = $pdf->GetStringWidth(utf8_decode($employment2[$i]));
    $pdf->Cell($cell_width, 10, utf8_decode($employment2[$i]), 0, 0, 'l');
    $pdf->Ln(6);
    $vertical += 2;
    //
    $pdf->SetFont('Arial', '', 8);
    $points = explode("•",$employment3[$i]);
    for($j=0;$j<count($points);$j++)
    {
        if($points[$j]!='')
        {
            $vertical = $pdf->GetY()+3;
            //
            if($vertical>=250)
            {
                $pdf->AddPage('P', 'A4');
                $vertical = 10;
                $pdf->SetXY(0, 0);
                $pdf->SetFillColor(247, 247, 247);
                $pdf->Cell(65, 290, '', 0, 0, 'l', 1);
            }
            //
            $pdf->SetXY($horizontal, $vertical);
            $pdf->Cell(2, 3, chr(127), 0, 0, 'l');
            $text = ltrim($points[$j],' ');
            $pdf->MultiCell(115, 3, utf8_decode($text), 0, 'l', 0);
    
            // Testing
            // $pdf->SetXY($horizontal-10, $vertical);
            // $pdf->Cell(20, 10, $vertical, 0, 0, 'l');
            //   
        }
    }
    //
    $vertical += 9;
}

//////////////////




// Jobs Portion insertions

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetXY(80, $vertical+5);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(80, 10, utf8_decode('WEITERBILDUNGEN (optional)'), 0, 0, 'l');

$vertical+=20;

for($i=0;$i<count($job1);$i++)
{
    //
    $pdf->SetXY($horizontal, $vertical);
    $pdf->Image('images/c1.png', $horizontal - 5, $vertical + 1, 4);
    $pdf->SetFont('Arial', 'B', 10);
    $cell_width = $pdf->GetStringWidth(utf8_decode($job1[$i]));
    $pdf->Cell($cell_width, 5, utf8_decode($job1[$i]), 0, 0, 'l');
    $pdf->SetFont('Arial', '', 10);
    //
    $vertical += 2;
    $pdf->SetXY($horizontal, $vertical);
    $cell_width = $pdf->GetStringWidth(utf8_decode($job2[$i]));
    $pdf->Cell($cell_width, 10, utf8_decode($job2[$i]), 0, 0, 'l');
    $pdf->Ln(6);
    $vertical += 2;
    //
    $pdf->SetFont('Arial', '', 8);
    $points = explode("•",$job3[$i]);
    for($j=0;$j<count($points);$j++)
    {
        if($points[$j]!='')
        {
            $vertical = $pdf->GetY()+3;
            //
            if($vertical>=250)
            {
                $pdf->AddPage('P', 'A4');
                $vertical = 10;
                $pdf->SetXY(0, 0);
                $pdf->SetFillColor(247, 247, 247);
                $pdf->Cell(65, 290, '', 0, 0, 'l', 1);
            }
            //
            $pdf->SetXY($horizontal, $vertical);
            $pdf->Cell(2, 3, chr(127), 0, 0, 'l');
            $text = ltrim($points[$j],' ');
            $pdf->MultiCell(115, 3, utf8_decode($text), 0, 'l', 0);

            // Testing
            // $pdf->SetXY($horizontal-10, $vertical);
            // $pdf->Cell(20, 10, $vertical, 0, 0, 'l');
            //   
        }
    }
    //
    $vertical += 9;
}

//////////////////


$pdf->SetFont('Arial', 'B', 13);
$pdf->SetXY(10, 250);
$pdf->Cell(80, 10, strtoupper($fname), 0, 0, 'l');
$pdf->SetXY(10, 256);
$pdf->Cell(80, 10, strtoupper($lname), 0, 0, 'l');


$pdf->SetFont('Arial', '', 10);
$pdf->Image('images/1.png', 10, 270, 5);
$pdf->SetXY(17, 269);
$pdf->Cell(80, 10, utf8_decode('Mustermann Straße 10B'), 0, 0, 'l');

$pdf->Image('images/2.png', 10, 278, 5);
$pdf->SetXY(17, 275.5);
$pdf->Cell(80, 10, utf8_decode('+49 (0) 123 456 78'), 0, 0, 'l');

$pdf->Image('images/3.png', 10, 286, 5);
$pdf->SetXY(17, 282.5);
$pdf->Cell(80, 10, utf8_decode('musterman@mail.de'), 0, 0, 'l');


$pdf->SetFont('Arial', '', 7);
$pdf->SetXY(120, 262);
$pdf->SetFillColor(218, 238, 241);
$pdf->Cell(90, 35, '', 0, 0, 'l', 1);

$pdf->SetXY(130, 262);
$pdf->Cell(90, 35, '_______________', 0, 0, 'l');
$pdf->SetXY(130, 278);
$pdf->Cell(90, 10, 'Datum (optionales Feld)', 0, 0, 'l');


$pdf->SetXY(170, 262);
$pdf->Cell(90, 35, '_______________', 0, 0, 'l');
$pdf->SetXY(170, 278);
$pdf->Cell(90, 10, 'Unterschrift (optionales Feld)', 0, 0, 'l');


$pdf->output();
